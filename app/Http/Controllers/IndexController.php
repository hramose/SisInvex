<?php

namespace SisInvex\Http\Controllers;

use Illuminate\Http\Request;

use SisInvex\Http\Requests;
use SisInvex\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }   
}
