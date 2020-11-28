<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ['added_by', 'available_status', 'book_id'];

    public $timestamps = false;

	protected $table = 'book_issues';
	protected $primaryKey = 'issue_id';

	protected $hidden = array();
}
