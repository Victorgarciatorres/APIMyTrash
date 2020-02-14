<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Container extends Model
{
    protected $table = 'containers';
    protected $fillable = ['id','name','icon','color','description','location_id'];


    public function createContainer(Request $request)
    {
        //var_dump($request->name);exit();
        $container = new Container;
        $container->name = $request->name;
        $container->icon = $request->icon;
        $container->color = $request->color;
        $container->description = $request->description;
        $container->location_id = $request->location_id;
        $container->save();
    }

}
