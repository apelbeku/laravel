<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZeroController extends Controller
{
    public function index()
    {
    	return View('layout/index');
    }

    public function hello()
    {
    	return 'Hello World!';
    }

    public function name($id = 'Craft')
    {
    	return 'Name : '.$id;
    }
}
