<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 08/03/16
 * Time: 14:05
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Directors extends Model
{
    /** Nom de ma table */
    protected $table='directors';

    public function getNbDirectors(){
        $nbtotald=DB::table('directors')
            ->count();

        return$nbtotald;
    }
}