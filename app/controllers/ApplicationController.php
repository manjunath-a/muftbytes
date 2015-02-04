<?php

class ApplicationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $application = ApplicationModel::getApplicationDetails();
            return View::make('application',array('header'=>'application','applicationDetails' => $application))->with(array('title'=>'Applications'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('addapplication',array('header'=>'application'))->with(array('title'=>'Add Applications'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $application_name = Input::get('appname');
            $application_url = Input::get('appurl');
            $application_description = Input::get('appdesc');
            $data_cap = Input::get('datacap');
            if(Input::get('enable') == 'on')
             $app_status = 1;
            else
                $app_status = 0;
            try{
                if (Input::hasFile('profile'))
                    {
                        $file = Input::file('profile');
                        $filename = $file->getClientOriginalName();
                        $file_expand = explode(".",$filename);
                        $image_name = str_replace(" ","_", Input::get('appname')).".".$file_expand[1];
                        $file->move(app_path()."/uploads/",$image_name);
                    }
                    else
                        $image_name = "placeholder.png";
                        
                }
                catch(Exception $e)
                {
                    echo $e;
                }
                $input=array('application_name' => $application_name,
                             'url' => $application_url,
                             'description' => $application_description,
                             'icon' => $image_name,
                             'data_cap' => $data_cap,
                             'status' => $app_status,
                             'created_date' => date('Y-m-d H:i:s'));
                $message = ApplicationModel::insertApplicationDetails($input);
                return Redirect::to('application');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $edit_info = ApplicationModel::getApplicationDetailsToEdit($id);
            return View::make('editapplication',array('header'=>'application','edit_info' => $edit_info))->with(array('title'=>'Edit Applications'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
            $application_name = Input::get('appname');
            if(Input::get('enable') == 'on')
             $app_status = 1;
            else
                $app_status = 0;
            try{
                if (Input::hasFile('profile'))
                    {
                        $file = Input::file('profile');
                        $filename = $file->getClientOriginalName();
                        $file_expand = explode(".",$filename);
                        $image_name = str_replace(" ","_", Input::get('appname')).".".$file_expand[1];
                        $file->move(app_path()."/uploads/",$image_name);
                    }
                    else
                        $image_name = Input::get('img');
                        
                }
                catch(Exception $e)
                {
                    echo $e;
                }
                $update_info=array('application_name' => $application_name,
                             'url' => Input::get('appurl'),
                             'description' => Input::get('appdesc'),
                             'icon' => $image_name,
                             'data_cap' => Input::get('datacap'),
                             'status' => $app_status,
                             );
                         ApplicationModel::updateApplicationDetails($update_info,$id);
                         return Redirect::to('application');

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            ApplicationModel::deleteApplication($id);
            return Redirect::to('application');
	}


}
