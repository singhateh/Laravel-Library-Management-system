<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssueLog extends Model
{
    protected $fillable = array('added_by', 'available_status', 'book_id');

    public $timestamps = false;

	protected $table = 'book_issues';
	protected $primaryKey = 'issue_id';

	protected $hidden = array();

}
