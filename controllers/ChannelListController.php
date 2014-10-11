<?php

class ChannelListController extends BaseController {


  //If the channel is not in the database
   public function add($channel)
  {
  	//Channel secruity
  	$query = channel::where('channel_name' , $channel)->first();
  	if($query)
  	{
      //Channel was already in the database Display the view
  		//return View::make('creator.index')->withQuery($query);
  	}
  	else{
      //Getting all data that is inserted
      $data         = file_get_contents('http://gdata.youtube.com/feeds/api/users/' . $channel . '?v=2&alt=json&key=AI39si7HdDJ5K6SSB6GbGuLt5MQOp6ezoOr_zb7mZpCO0cRkel2BQ0lti_gbgfe0Gj_khxbMPkKKQEEyxRJifTEaXdSNClfVeA');
      $data         = json_decode($data, true);
      $arr          = $data['entry'];
      reset($arr);
      $id           = $data['entry']['yt$userId']['$t'];
      $banner       = "https://i1.ytimg.com/u/".$id."/channels4_banner_hd.jpg";
      $thumbnail    = "http://i1.ytimg.com/i/".$id."/mq1.jpg";
       //Published
      $db_publishdate = $arr['published'] ;
      $db_publishdate = $db_publishdate['$t'];
      $originalDate = $db_publishdate;
      $published = date("Y-m-d", strtotime($originalDate));
      $db_location= $arr['yt$location'] ;
      $db_location= $db_location['$t'] ;



      //Add the channel
      $user = new channel;
      $user->channel_name = $channel;
      $user->channel_id   = $id;
      $user->banner       = $banner;
      $user->thumbnail    = $thumbnail;
      $user->category     = category($channel);
      $user->published    = $published;
      $user->location     = $db_location;
      $user->save();
      //Get channels information
      $query = channel::where('channel_name' , $channel)->first();
      //Display the view
  		return View::make('creator.add');
  	}

  }

  public function check($channel)
  {
    //Check if channel exist first
    $api = 'https://gdata.youtube.com/feeds/api/users/';
    $headers = get_headers($api . $channel, true);
      if ($headers[0] == "HTTP/1.0 200 OK")     
        {
          //Channel does exist

          //Checking if the channel is in database already
            $query = channel::where('channel_name' , $channel)->first();
              if($query)
              { 

                $data = data::whereRaw('channel_name = ? order by date desc', array($channel))->first();
                return View::make('creator.index')
                ->withQuery($query)
                ->with('channel', $channel)
                ->withData($data);
              }
              else 
              {

                return Redirect::action('choice', array('channel' => $channel ));    
              }
        }
        else
        {
          //Channel doesn't exist
          return View::make('creator.index')->with('message', "Channel doesn't exist, Please try again");
        }
  		
  }
 
}