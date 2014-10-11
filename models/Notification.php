<?php



class Notification extends Eloquent{

	protected $fillable = array('notification', 'user' );

	
	protected $table = 'notifications';

	
}


