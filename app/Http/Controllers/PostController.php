<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;
class PostController extends Controller
{
    public function innerjoinclauses()
    {
        $request = DB ::table('users')
            ->join('posts','users.id','=','posts.user_id')
            ->select('users.name','posts.title','posts.body')
            ->get();

        return $request ;
                 
    }
}
