<?php
class AccountController extends BaseController {


	public function getSignin(){

		return View::make('account.signin');
	}


	public function postSignin(){
		$validator = Validator::make(Input::all() ,
			array(
				'email' => 'required|email',
				'password' => 'required'
				));
		if($validator->fails())
		{
			return Redirect::route('account-sign-in')
			->withErrors($validator)
			->withInput();
		}
		else
		{

			//Remember button
			//If true else flase
			$remember = (Input::has('remember')) ? true : false;

			//auth
			$auth = Auth::attempt(array(
				'email' => Input::get('email'),
				'password' => Input::get('password'),
				'active' => 1
				) ,$remember);
			if($auth)
			{
				//Redirect home
				return Redirect::intended('/profile');
			}else{
				return Redirect::route('account-sign-in')
					->with('global', 'Problem signing you in ');
			}

		}


		return Redirect::route('account-sign-in')
		->with('global', 'Problem signing you in ');

	}


	public function getSignout()
	{
		Auth::logout();
		return Redirect::route('home');
	}


	public function getCreate(){
		return View::make('account.create');
	}

	public function postCreate(){
		$validator = Validator::make(Input::all() ,
			array(

				'email' => 'required|max:50|email|unique:users',
				'username' => 'required|max:20|min:5|unique:users',
				'password' => 'required|min:6',
				'password_again' => 'required|same:password',
				)
			);
		if($validator->fails())
		{
			return Redirect::route('account-create')
			->withErrors($validator)
			->withInput(Input::all());
		}
		else
		{
			
			$email = Input::get('email');
			$username = Input::get('username');
			$password = Input::get('password');

			//Activation code 
			$code = str_random(60);

			$create = User::create(array(
				'email' => $email,
				'username' => $username,
				'password' => Hash::make($password),
				'code' => $code,
				'active' => 0
				));

			if($create)
			{
				//Send email
				Mail::send('emails.auth.activate' , array('link' => URL::route('account-activate', $code), 'username' => $username), function($message) use ($create){
					$message->to($create->email, $create->username)->subject('Activate your account');
				});


				//Return the field
				return Redirect::route('home')
				->with('global' ,'Your account was created we sent you an email');
			}
		}

	}




	public function getActivate($code)
	{
		$user = User::where('code', '=', $code)->where('active', '=' , 0);
		if($user->count())
		{
			$user = $user->first();

			//Update user to activate state
			$user->active = 1;
			$user->code   = '';
			if($user->save())
			{
		return Redirect::route('home')
			->with('global', 'Welcome you can now sign in!');
			}
		}


		return Redirect::route('home')
			->with('global', 'We could not activate your account try again later');

	}




	public function getProfile()
	{
		$user = Auth::user();
		if($user->hasRole('admin')){
			return View::make('profile');
		}else{
			return "View Comming soon";
		}
	}
	

	public function postProfile()
	{

		$validator = Validator::make(Input::all(),

			array(

				'old_password' => 'required',
				'password' => 'required|min:6'

				));
		if($validator->fails())
		{
			//redirect

			return Redirect::route('dashboard-profile')
			->withErrors($validator);

		}else{
			//change password

			$user = User::find(Auth::user()->id);

			$old_password = Input::get('old_password');
			$password = Input::get('password');
			if(Hash::check($old_password, $user->getAuthPassword()))
			{
				$user->password = Hash::make($password);

				if($user->save())
				{
					return Redirect::route('home')
					->with('global', 'Thank you for verifying, your password has been changed.')
					->with('global_tag', 'success');
				}
			}

				return Redirect::route('dashboard-profile')
		->with('global' , "We're sorry, the password entered was incorrect")
		->with('global_tag', 'danger');

		}


		return Redirect::route('dashboard-profile')
		->with('global' , "We're sorry, the password entered was incorrect")
		->with('global_tag', 'danger');


	}

}