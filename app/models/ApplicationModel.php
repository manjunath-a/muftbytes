<?php

class ApplicationModel extends Eloquent
{
    static function insertApplicationDetails($input)
    {
        try{
        DB::table('applications')->insert($input);
        return "Success";
        }catch(Exception $e)
        {
            return $e;
        }
    }
    
     static function getApplicationDetails()
    {
        $application_details = DB::table('applications')->where('status',1)->get();
        return $application_details;
    }
    
     static function getApplicationDetailsToEdit($id)
    {
        $application_details = DB::table('applications')->where('application_id',$id)->get();
        return $application_details;
    }
    
    static function updateApplicationDetails($update_indo,$id)
    {
        DB::table('applications')
            ->where('application_id',$id)
            ->update($update_indo);
        return;
    }
    
    static function deleteApplication($id)
    {
        DB::table('applications')
            ->where('application_id',$id)
            ->update(array('status'=>9));
        return;
    }
}
?>
