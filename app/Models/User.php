<?php

namespace App\Models;

use App\Notifications\PasswordResetUserNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'company_name','email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function getBodies()
    {
        $users = DB::table('users')->get();
        return $users;
    }
    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordResetUserNotification($token));    
    }   
    
    public static $rules = [
        'name' => ['required', 'string', 'max:50'],
        'email' => ['required', 'string', 'email:rfc', 'max:255', 'unique:users'],
        'company_name' => ['required','max:50'],
        'password' => ['required', 'string', 'min:8', 'confirmed','unique:users'],
    ];

    /**
     * バリデーションエラーメッセージ
     * Auth\RegisterControllerから移動しています。
     * 追加したユーザーの項目を追記しています。
     *
     * @var array
     */
    public static $messages = [
        'name.required' => 'お名前を入力してください',
        'name.max' => 'お名前は50文字以内で入力してください',
        'company_name.required' => '会社名を入力してください',
        'company_name.max' => '会社名は50文字以内で入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.email' => '正しいメールアドレスを入力してください',
        'email.max' => 'E-mailアドレスは255文字以内で入力してください',
        'email.unique' => 'そのメールアドレスは既に登録されています',
        'password.required' => 'パスワードを入力してください',
        'password.min' => 'パスワードは8文字以上で入力してください',
        'password.unique' => 'そのパスワードはすでに登録されています',
        'password.confirmed' => '入力されたパスワードが一致しません',
        'number.required' => '学籍番号を入力してください',
        'number.unique' => 'その学籍番号はすでに登録されています',
        'number.min' => '学籍番号は9文字で入力してください'
    ];
}
