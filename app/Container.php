<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Location;

class Container extends Model
{
    protected $table = 'containers';
    protected $fillable = ['id','name','icon','color','description','location_id'];


    public function createContainer(Request $request)
    {
        $container = new Container;
        $container->name = $request->name;
        $container->icon = $request->icon;
        $container->color = $request->color;
        $container->description = $request->description;
        $container->location_id = $request->location_id;
        $container->save();
    }
    
    public function getContainers(){
        $containers = self::all();

        // foreach ($containers as $key => $value) {

        //     $location = Location::where('id',$request->location_id)->first();
        //     var_dump($location);exit;
        //     $latitude = $location->latitude;

        // }
        // return $containers;
    }
}
