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
use Illuminate\Support\Facades\Input;


/**
 * Class Movies
 * @package App
 * Ma class movies modelise toutes mes requetes concernant la table movies
 */
class Movies extends Model
{



    /** Nom de ma table */
    protected $table = 'movies';

    public function rechercheMovies(){
        $query=Input::get('recherche');


        $result = DB::table('movies')
            ->select(
                'movies.title as mtitle',
                'movies.synopsis as msynopsis',
                'movies.budget',
                'movies.duree',
                'movies.note_presse',
                'categories.title as ctitle'
            )
            ->join ('categories','categories.id','=','movies.categories_id')
            ->join('actors_movies','actors_movies.movies_id', '=', 'movies.id')
            ->join('actors', 'actors_id', '=', 'actors_movies.actors_id')
            ->join('directors_movies', 'directors_movies.movies_id','=','movies.id')
            ->join('directors','directors.id', '=', 'directors_movies.directors_id')

            ->where('movies.title', 'LIKE','%'. $query.'%')
            ->orwhere('movies.synopsis', 'LIKE', '%'. $query.'%')
            ->orWhere('movies.description', 'LIKE', '%'. $query. '%')
            ->orWhere('categories.title', 'LIKE', '%'. $query. '%')
            ->orWhere('actors.firstname', 'LIKE', '%'. $query. '%')
            ->orWhere('actors.lastname', 'LIKE', '%'. $query. '%')
            ->orWhere('directors.lastname', 'LIKE', '%'. $query. '%')
            ->orWhere('directors.lastname', 'LIKE', '%'. $query. '%')

            ->groupBy('movies.id')
            ->get();

        return $result;
    }

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
    public function getvideoaleatoire()
    {
        $va=DB::table('movies')

            ->select('trailer')
            ->OrderBy(DB::raw('RAND(id)'))
            ->take(1)
            ->first();
        return $va;
    }




}