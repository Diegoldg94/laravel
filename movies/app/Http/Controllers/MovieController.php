<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // GET para obtener todos los registros
    public function index()
    {
        return Movie::all();
    }

    // GET para obtener un registro específico por ID
    public function show($id)
    {
        return Movie::find($id);
    }

    // POST para crear un nuevo registro
    public function store(Request $request)
    {
        $movie = Movie::create($request->all());
        return response()->json($movie, 201);
    }
}
