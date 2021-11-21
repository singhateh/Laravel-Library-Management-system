<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentCategories extends Model
{
    protected $fillable = array('cat_id', 'category','max_allowed');

    public $timestamps = false;

	protected $table = 'student_categories';
	protected $primaryKey = 'cat_id';

	protected $hidden = array();

}
