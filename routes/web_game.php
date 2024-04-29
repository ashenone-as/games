<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;


Route::get('/', function () {
    return view('Homepage');
});

Route::get('/games', function () {
    $games = \App\Models\Game::all();

    return response()->json($games);
});

Route::get('/games/{id}', function ($id) {
    $game = \App\Models\Game::find($id);

    if (!$game) {
        return response()->json(['error' => 'Game not found'], 404);
    }

    return response()->json($game);
});

Route::post('/games', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'category_id' => 'nullable|exists:category,id',
        'developer_id' => 'nullable|exists:developers,id',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    }

    $game = \App\Models\Game::create($request->all());

    return response()->json($game, 201);
});


Route::put('/games/{id}', function (Request $request, $id) {
    $game = \App\Models\Game::find($id);

    if (!game) {
        return response()->json(['error' => 'Game not found'], 404);
    }

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'category_id' => 'nullable|exists:category,id',
        'developer_id' => 'nullable|exists:developers,id',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    }

    $game->update($request->all());

    return response()->json($game);
});

Route::delete('/games/{id}', function ($id) {
    $game = \App\Models\Game::find($id);

    if (!$game) {
        return response()->json(['error' => 'Game not found'], 404);
    }

    $game->delete();

    return response()->json(null, 204);
});

