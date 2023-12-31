<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;

class UserController extends Controller
{
    public function Register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'phone' => 'required',
            'email' => 'required|email|max:191|unique:users,email',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password',
            'address' => 'required',
            'age' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->errors(),
            ]);
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'address' => $request->address,
                'avatar' => 'https://png.pngtree.com/element_our/20200610/ourmid/pngtree-character-default-avatar-image_2237203.jpg',
                'isActive' => true,
                'role_id' => 1,
            ]);
            $token = $user->createToken($user->email . '_Token')->plainTextToken;

            return response()->json([
                'status' => 200,
                'username' => $user->name,
                'token' => $token,
                'message' => 'Đăng kí tài khoản thành công'
            ]);
        }
    }

    public function Login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:191',
            'password' => 'required||min:8',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->errors(),
            ]);
        } else {
            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => 401,
                    'message' => 'Thông tin đăng nhập không hợp lệ',
                ]);
            } else {
                $token = $user->createToken($user->email . '_Token')->plainTextToken;
                Auth::login($user);
                return response()->json([
                    'status' => 200,
                    'token' => $token,
                    'message' => 'Đăng nhập thành công',
                    'user' => $user,
                ]);
            }
        }
    }
    // public function Logout() {
    //     auth()->user()->tokens()->delete();
    //     return response()->json([
    //         'status' => 200,
    //         'message' => 'Đăng xuất thành công',
    //     ]);
    // }
    public function Logout()
    {
        auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json([
            'status' => 200,
            'message' => 'Đăng xuất thành công',
        ]);
    }

    public function UpdateUser(Request $request) {
        if (auth('sanctum')->check()) {
            $userid = auth('sanctum')->user()->id;
            $user = User::find($userid);
    
            if ($user) {
                $user->name = $request->name;
                $user->phone = $request->phone;
                $user->email = $request->email;
                $user->address = $request->address;
                
                $user->save();
    
                return response()->json([
                    'status' => 200,
                    'message' => 'Update successfully',
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'User not found',
                ], 404);
            }
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Unauthorized',
            ], 401);
        }
    }
    
}
