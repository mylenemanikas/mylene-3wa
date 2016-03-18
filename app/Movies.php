<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 08/03/16
 * Time: 11:42
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Movies
 * @package App
 * Ma class movies modelise toutes mes requetes concernant la table movies
 */
class Movies extends Model
{
    /** Nom de ma table */
    protected $table = 'movies';

    /**
     * Récupéréer les films actifs
     */
    public function getNbMoviesActifs()
    {
      /**SELECT COUNT(*)as nb
       * FROM movies
       * WHERE visible=1
       */
        $nb=DB::table('movies')
            ->where('visible',1)
            ->count();
        return $nb;
    }

    /**
     * @return mixed
     */
    public function getNbMovies(){
        $nbtotal=DB::table('movies')
            ->count();

        return$nbtotal;
    }
    public function getbudget(){
        $budget=DB::table('movies')

            ->sum('budget');

        return $budget;
    }
    public function getnextseance(){
        $nextseance=DB::table('movies')
            ->where('date_release','>',DB::raw('NOW()'));
        return count($nextseance);

    }



}