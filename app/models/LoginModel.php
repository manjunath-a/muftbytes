<?php

class LoginModel extends Eloquent
{
    static function getUser($email,$password)
    {
        $userinfo = DB::select('select * from users where user_name = "'.$email.'"and user_password = "'.$password.'" and user_status = 1');
        return $userinfo;
    }
    
    static function getUsersDetails()
    {
         $user_details = DB::table('users')->select('user_name','user_phone','operator_name','user_status','recharge_status')->get();
         return $user_details;
    }
}
?>
