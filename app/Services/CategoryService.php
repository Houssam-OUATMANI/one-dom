<?php

namespace App\Services;

use App\Models\category;

class CategoryService
{
    public function index() {
        return category::all();
    }
}
