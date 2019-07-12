<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('Example');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product($nombre = "Invitado")
    {
    $consolas = [
        "Play Station 4",
        "Play Station 3",
        "Xbox one",
        "Wii U"
       ];
       return view('product', compact('nombre', 'consolas'));
    }
}
