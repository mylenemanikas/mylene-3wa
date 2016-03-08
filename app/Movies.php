<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 08/03/16
 * Time: 11:42
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Movies
 * @package App
 * Ma class movies modelise toutes mes requetes concernant la table movies
 */
class Movies extends Model
{
/** Nom de ma table */
    protected $table='movies';
}