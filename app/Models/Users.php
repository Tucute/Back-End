<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Users extends Model
{
    use HasApiTokens, Notifiable;
    use HasFactory;
    protected $table ='users';
    public function role()
    {
        return $this->belongsTo(Roles::class);
    }
}
