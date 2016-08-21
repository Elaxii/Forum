<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class forumController extends Controller
{
    /**
     * Show the index page.
     *
     * @param  int  $id
     * @return view
     */
    public function index()
    {
        return view('index');
    }
}