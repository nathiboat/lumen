<?php
/**
 * Created by PhpStorm.
 * User: Nathi
 * Date: 12/11/2016
 * Time: 10:42
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Article extends  Model
{
    protected $fillable = ['title' , 'content'];
}