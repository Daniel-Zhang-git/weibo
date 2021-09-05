<?php

namespace App\Models;
//使用了 use 对类进行引用之后，便可以对类进行直接调用。
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * 可批量分配的属性。
     * @var array
     */
    protected $fillable = [  //fillable 在过滤用户提交的字段，只有包含在该属性中的字段才能够被正常更新：
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * 数组中应该隐藏的属性
     * @var array
     */
    protected $hidden = [  //们需要对用户密码或其它敏感信息在用户实例通过数组或 JSON 显示时进行隐藏，则可使用hidden 属性：
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     * 应转换为本机类型的属性
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
