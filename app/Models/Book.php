<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** 
     * I apply protected so that any fields that are not listed through here can't be modified by create and update
     * Added here basic attributes of a book entity such as title, the author, published year, genre and description
    */
    
    protected $fillable = [
        'title',
        'author',
        'published_year',
        'genre',
        'description'
    ];
}
