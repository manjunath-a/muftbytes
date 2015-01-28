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
        $application_details = DB::table('applications')->get();
        return $application_details;
    }
}
?>
