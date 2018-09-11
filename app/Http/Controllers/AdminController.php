<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Product;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addproject()
    {
        return view('admin/addproject');
    }
    public function addproduct()
    {
        return view('admin/addproduct');
    }

    public function deleteitem()
    {

        $projects = Project::all();
        $products = Product::all();
        return view('admin/delete')->withProducts($products)->withProjects($projects);
    }

}
