<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 08/03/16
 * Time: 14:05
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class Administrators extends Authenticatable
{
    /** Nom de ma table */
    protected $table='administrators';

    protected $fillable =[
        'lastname','email','password','firstname','description','photo'
    ];
    protected $hidden =[
        'password','remember_token'
    ];

    public function getNbDirectors(){
        $nbtotald=DB::table('directors')
            ->count();

        return$nbtotald;
    }
}