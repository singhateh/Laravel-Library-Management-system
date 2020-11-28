<?php

// class HomeController extends BaseController {
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCategories;

use App\Models\Branch;

use App\Models\Categories;
use Exception;

class HomeController extends Controller
{

    public $categories_list = array();
    public $branch_list = array();
    public $student_categories_list = array();

    public function __construct() {
        $this->categories_list = Categories::select()->orderBy('category')->get();
        $this->branch_list = Branch::select()->orderBy('id')->get();
        $this->student_categories_list = StudentCategories::select()->orderBy('cat_id')->get();
    }

	public function home(){	
		return view('panel.index')
            ->with('categories_list', $this->categories_list)
            ->with('branch_list', $this->branch_list)
            ->with('student_categories_list', $this->student_categories_list);
	}
}
