<?php

namespace App\Http\Controllers;
use App\Models\Inspiration;
use Illuminate\Http\Request;

class InspirationController extends Controller
{
public function index()
{
    $inspirations = Inspiration::all();

    return view('inspiration', compact('inspirations'));
}
}
