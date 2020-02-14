<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Location extends Model
{
    
    protected $table = 'locations';
    protected $fillable = ['id','latitude','longitude'];


    public function createLocation(Request $request)
    {
        //var_dump($request->name);exit();
        $location = new Location();
        $location->latitude = $request->latitude;
        $location->longitude = $request->longitude;
        $location->save();
    }
}
