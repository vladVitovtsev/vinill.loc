<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        $products = Auth::user()->products;
        return view('cabinet.index', [
            'products' => $products
        ]);
    }

    public function add()
    {
        return view('cabinet.add');
    }

    public function addPost(Request $request)
    {
        try {
            $product = new Product();
            $product->user_id = Auth::id();
            $product->title = trim(strtolower($request->input('title')));
            $product->count = trim(strtolower($request->input('count')));
            $product->size = trim(strtolower($request->input('size')));
            $product->label = trim(strtolower($request->input('label')));
            $product->country = trim(strtolower($request->input('country')));
            $product->year = trim(strtolower($request->input('year')));
            $product->condition = trim(strtolower($request->input('condition')));
            $product->save();
        }catch (Exception $e){
            LOG::error('Adding new product failed.'. $e->getMessage());
            return redirect()->route('cabinet')->with('error', 'Что то погло не так, пожалуйста повторите');
        }
        return redirect()->route('cabinet')->with('success', 'Поздравляем! Все успешно добавленно!');
    }
}
