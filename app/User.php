<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Request;
use Hash;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function signup () // 写在controller里面
    {
        $username = Request::get('username');
        $password = Request::get('password');
        if (!$username && !Request::get('password'))
            return ['satus'=>0, 'msg'=>'用户名和密码不能为空'];
        // 检测用户名是否存在   
        $user_exists = $this
            ->where('username', $username)
            ->exists();
        if($user_exists)
            return ['status'=>0,'msg'=>'用户名已存在'];

        // 加密password
        $hashed_password = bcrypt($password);
        // dd($hashed_password);

        $user = $this;
        $user -> username = $username;
        $user -> password = $hashed_password;
        if ($user->save())
            return ['status'=>1,'id'=> $user -> id];
        else return['status'=>0,'msg'=>'db insert failed'];

        return 1;
    }
}
