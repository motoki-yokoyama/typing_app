<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ResultsController extends Controller
{
    public function index(Result $result)
    {
        return $result->get();
    }
}
