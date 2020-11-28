<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = array('first_name','last_name','approved','category','roll_num','branch','year','email_id');

    public $timestamps = false;

	protected $table = 'students';
	protected $primaryKey = 'student_id';

	protected $hidden = array();

}
