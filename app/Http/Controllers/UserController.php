<?php namespace App\Http\Controllers;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return view('user.register');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$rules = [	'email'=>'required|email', 
					'pass' =>'required|min:2|max:50',
					'pass2' =>'required|same:pass'];
		$validator = Validator::make($data, $rules, 
							[	'email.required'=>'Полето е задължително',
								'email.email'=>'Това мейл ли е?', 
								'pass.required'=>'Полето е задължително', 
								'pass2.required'=>'Полето е задължително', ]);
		if($validator->fails()){
			return Redirect::to('/user/create')->withErrors($validator)->withInput();
		} else {
			$user = new User();
			$user->saveUser($data);
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
	
		
	public function showLogin()
	{
		// show the form
		return view('user/login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email'     => Input::get('email'),
				'password'  => Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {
				
				return Redirect::to('/');

			} else {

				// validation not successful, send back to form 
				return Redirect::to('/login');

			}

		}
	}


}
