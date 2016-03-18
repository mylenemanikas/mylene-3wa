<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 08/03/16
 * Time: 13:54
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Actors;

class Actors extends Model
{
    /** Nom de ma table */
    protected $table='actors';

    public function getNbActors(){
        $nbtotala=DB::table('actors')
            ->count();

        return$nbtotala;
    }
    public function getmoyenneAge(){
        $moyenneage=DB::table('actors')
            ->AVG(DB::raw('TIMESTAMPDIFF(YEAR,dob,NOW() )'));

        return round($moyenneage,0);

    }

}