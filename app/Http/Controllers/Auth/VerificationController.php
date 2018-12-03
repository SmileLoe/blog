<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 电子邮件验证控制器
    |--------------------------------------------------------------------------
    |
    | 此控制器负责处理任何电子邮件验证。
    | 最近向应用程序注册的用户。
    | 如果用户没有收到原始电子邮件，电子邮件也可能被重新发送。
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     * 在验证后重定向用户的位置
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * 创建一个新的控制器实例
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
