<?php
class ReportModel extends Eloquent
{
    public static function getRechargeList()
    {
        $recharge_list = DB::table('recharge')->join('users',function($join){
            $join->on('recharge.user_id','=','users.user_id');
        })->select('order_id','recharge_amount','recharge_date','status','user_name')->get();
        return $recharge_list;
    }
}
?>
