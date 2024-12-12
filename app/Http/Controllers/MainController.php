<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        if(!Storage::disk('public')->exists('images')) {
            Storage::disk('public')->makeDirectory('images', 0775, true);
        }

        $files = Storage::disk('addFiles')->files();


        foreach($files as $file){

            if(!Storage::disk('public')->exists('images/'.$file)) {

                Storage::disk('public')->put('images/'.$file, Storage::disk('addFiles')->get($file));
            }
        }

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
