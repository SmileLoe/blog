<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 用户注册控制器
    |--------------------------------------------------------------------------
    |
    | 该控制器处理新用户的注册以及它们的验证和创建。
    | 默认情况下，该控制器使用一个特性来提供此功能，而不需要任何额外的代码。
    |
    */

    use RegistersUsers;

    /**
     * 注册后重定向用户的位置。
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     *创建一个新的控制器实例
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * 获取传入注册请求的验证器
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     *在有效注册后创建一个新的用户实例
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
