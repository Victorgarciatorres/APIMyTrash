<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Blacklist extends Model
{
    
    protected $table = 'blacklists';
    protected $fillable = ['id','user_id','product_id'];

    public function createBlacklist(Request $request)
    {
        $blacklist = new Blacklist;
        $blacklist->user_id = $request->user_id;
		$blacklist->product_id = $request->product_id;
        $blacklist->save();
    }
}
