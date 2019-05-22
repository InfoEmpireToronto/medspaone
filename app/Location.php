<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Location extends Model
{
    protected $table = 'location';

    public function user()
    {
    	return User::find($this->user_id);
    }

    public function distance($lat1, $lon1, $lat2, $lon2, $unit = 'K') 
    {
	  if (($lat1 == $lat2) && ($lon1 == $lon2)) 
	  {
	    return 0;
	  }
	  else 
	  {
	    $theta = $lon1 - $lon2;
	    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
	    $dist = acos($dist);
	    $dist = rad2deg($dist);
	    $miles = $dist * 60 * 1.1515;
	    $unit = strtoupper($unit);

	    if ($unit == "K") {
	      return ($miles * 1.609344);
	    } else if ($unit == "N") {
	      return ($miles * 0.8684);
	    } else {
	      return $miles;
	    }
	  }
	}

	public function cmp($a, $b)
	{
	    return strcmp($a->name, $b->name);
	}

}
