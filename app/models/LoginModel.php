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
         $user_details = DB::table('users')->select('user_id','user_name','user_phone','operator_name','user_status','recharge_status')->where('user_role',2)->get();
         return $user_details;
    }
    
    static function getUserToEdit($id)
    {
        $user_details = DB::table('users')->select('user_id','user_name','user_phone','operator_name','user_status','recharge_status')->where('user_id',$id)->get();
        return $user_details;
    }
    
    static function updateUser($id,$updateinfo)
    {
        $updated_info = DB::table('users')->where('user_id',$id)->update($updateinfo);
        return $updated_info;
    }
    
    static function viewUsage($id)
    {
        //$view_usage = DB::table('data_usage')->where('user_id',$id)->get();
        $view_usage = DB::select('select u.user_name,a.application_name,a.application_id,d.usage,d.log_time from users u join data_usage d on u.user_id = d.user_id join applications a on d.application_id = a.application_id where u.user_id='.$id);
        return $view_usage;
        /*echo"<pre>";
        print_r($view_usage);
        echo"</pre>";*/
        
    }
}
?>
