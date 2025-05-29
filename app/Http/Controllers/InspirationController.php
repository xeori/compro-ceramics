<?php

namespace App\Http\Controllers;
use App\Models\Inspiration;
use Illuminate\Http\Request;

class InspirationController extends Controller
{
public function index()
{
    $inspirations = Inspiration::paginate(9)->withQueryString();

    return view('inspiration', compact('inspirations'));
}

}
