<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $user_details = LoginModel::getUsersDetails();
            return View::make('users',array('header'=>'users','user_details'=>$user_details))->with(array('title'=>'Users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $viewusage = LoginModel::viewUsage($id);
            $user_name = DB::table('users')->select('user_name')->where('user_id',$id)->get();
            return View::make('view_usage',array('header'=>'users','viewUsage'=>$viewusage,'count'=>count($viewusage),'user_name'=>$user_name))->with(array('title'=>'Users'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $user_details = LoginModel::getUserToEdit($id);
            return View::make('edituser',array('header'=>'users','user_information'=>$user_details))->with(array('title'=>'Users'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
            if(Input::get('enableuser') != null)
                $updateinfo['user_status'] = 1;
            else 
                $updateinfo['user_status'] = 0;
            if(Input::get('enablerecharge') != null)
                $updateinfo['recharge_status'] = 1;
            else 
                $updateinfo['recharge_status'] = 0;
            LoginModel::updateUser($id,$updateinfo);
            return Redirect::to('user');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
