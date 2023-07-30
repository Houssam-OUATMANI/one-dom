<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(private readonly CategoryService $categoryService)
    {
    }

    public function index () {
        $cateories = $this->categoryService->index();
        return view('main.index', compact('cateories'));
    }
}
