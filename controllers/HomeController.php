<?php
class HomeController extends BaseController {
	function home()
	{

		//Admin nofications

		/*$create = Notification::create(array(
				'notification' => "Hello this is our first nofication",
				'user' => "Admin",
				));
		*/		

		$nofication = Notification::orderby('created_at', 'desc')->first();


		return View::make('home')->with('notification' , $nofication);
	}

}