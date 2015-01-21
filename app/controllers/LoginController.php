<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            return View::make('login', array('Head'=>'Home'))->with(array('title'=>'Login'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
           
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
                $user_information = Session::get('userinfo');
		 if($user_information[0]->user_id == 1)
                {
                    Session::put('username',$user_information[0]->user_name);
                    return  View::make('admin',array('header'=>'dashboard'))->with(array('title'=>'Dashboard'));
                }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
           
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
        
        public function authenticate()
        {
            $email = Input::get('email');
            $password = md5(Input::get('password'));
            $user_information = LoginModel::getUser($email,$password);
            if(count($user_information) == 0)
              return Redirect::to('/')->with('message', 'Login Failed');
            else
            {
                Session::put('userinfo',$user_information);
                return Redirect::to('dashboard');
            }
        }


}
