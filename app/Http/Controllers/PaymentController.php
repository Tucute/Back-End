<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Orders;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment_VnPay($radioValue, $totalPrice) {
        
        if ($radioValue == 'vnpay') {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:3000/thankfull";
        $vnp_TmnCode = "HMEJ9HK0";//Mã website tại VNPAY 
        $vnp_HashSecret = "CLTOHNQVRSFMUVOWUFVAQLEATTNJRSJP"; //Chuỗi bí mật

        $vnp_TxnRef = Carbon::now()->timestamp; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Da Thanh Toan";
        $vnp_OrderType = "100000";
        $vnp_Amount = ($totalPrice+30000)*100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
        //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        // }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);

        return response()->json($returnData);
        }
        
        elseif ($radioValue == 'momo') {
            
        }
        else {  
            $returnData = array('code' => '01'
            , 'message' => 'Đặt hàng thành công. Vui lòng chuẩn bị đầy đủ số tiền khi hàng được giao đến'
            , 'data' => 'cảm ơn');
        return response()->json($returnData);
        }
    }

    public function OrderVnpay(Request $request) {
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $cart_id = Carts::where('user_id',$user_id)->pluck('id');

            $date=date_create($request->input('vnp_PayDate'));
            echo date_format($date,"H:i d/m/Y");

            $order = new Orders();
            $order->id = $request->input('vnp_TxnRef');
            $order->user_id = $user_id;
            $order->cart_id = $cart_id[0];
            $order->date = $date;
            $order->totalPrice = $request->input('vnp_Amount');
            $order->payType = 'VNPAY';
            $order->status = $request->input('vnp_OrderInfo');
            $order->save();
        }
    }

}