<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        return view('main');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       User::create($request->all());

        return to_route('index')->with('status', 'Спасибо за заявку. Мы свяжемся с Вами в ближайшее время!');
    }

}
