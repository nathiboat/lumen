<?php
/**
 * Created by PhpStorm.
 * User: Nathi
 * Date: 13/11/2016
 * Time: 20:24
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'isbn'];
}