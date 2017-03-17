<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabinetController extends Controller
{

    /**
     * CabinetController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /** Main page cabinet
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('cabinet.index');
    }
}
