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



class Sessions extends Model
{
    protected $table = 'sessions';


    public function getprochainesession(){
        $prochainesession=DB::table('sessions')
            ->join('cinema','cinema.id','=','sessions.cinema_id')
            ->select('cinema.title as ctitle','cinema.ville as cville', 'date_session')
            ->get();

        return $prochainesession;
    }
}