<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Comments extends Model
{
    protected $table = 'comments';

    public function getcommentaire(){
        $com=DB::table('comments')
            ->join('user','user.id','=','comments.user_id')
            ->join('movies','movies.id','=','comments.movies_id')
            ->select('user.username as uusername','movies.title as mtitle','content')
            ->orderBy('username')
            ->limit(4)
            ->get();

        return $com;
    }
}
