<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = array('category');

    public $timestamps = false;

	protected $table = 'book_categories';
	protected $primaryKey = 'id';

	protected $hidden = array();
}
