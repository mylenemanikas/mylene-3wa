<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class User extends Model
{
    protected $table = 'user';

    protected $fillable =[
        'name','email','password',
    ];

    protected $hidden =[
        'password','remember_token'
    ];
    /**
     * Récupéréer les films actifs
     */
    public function getNbUserActifs()
    {

        $nbU=DB::table('user')
            ->where('enabled',1)
            ->count();
        return $nbU;
    }

    /**
     * @return mixed
     */
    public function getNbUser(){
        $nbtotalU=DB::table('user')
            ->count();

        return$nbtotalU;
    }
    public function getlastuser(){
        $lastuser=DB::table('user')
            ->select('avatar','created_at', 'username','ville')
            ->where('enabled',1)
            ->orderBy('avatar')
            ->limit(12)
            ->get();
         //dump($lastuser);
        return $lastuser;
    }






}
