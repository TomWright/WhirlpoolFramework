<?php

class User extends \Whirlpool\BaseModel
{

    protected $table = 'users';

    protected $fillable = [
        'username',
        'password',
        'email',
    ];

    public static function register($username, $password, $email)
    {
        $user = new User();

        $user->username = $username;
        $user->password = $password;
        $user->email = $email;

        $user->save();

        return $user;
    }

} 