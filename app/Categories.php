<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 08/03/16
 * Time: 12:03
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{

    /** Nom de ma table */
    protected $table='categories';

    public function getNbCategories(){
        $nbtotalc=DB::table('categories')
            ->count();
        return $nbtotalc;
    }
}