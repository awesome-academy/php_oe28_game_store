<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $games = Game::orderBy('id', 'desc')->paginate(Config::get('number.games_per_page'));
        $data = $request->all();

        if ($request->has('filter') || $request->has('sort')) {
            $filter = $request->filter;
            $sort = $request->sort;

            $games = Game::where('title', 'like', '%' . $filter . '%');

            switch ($sort) {
                case Config::get('sort.atoz'):
                    $games = $games->orderBy('title', 'asc')->paginate(Config::get('number.games_per_page'));
                    break;
                
                case Config::get('sort.ztoa'):
                    $games = $games->orderBy('title', 'desc')->paginate(Config::get('number.games_per_page'));
                    break;

                case Config::get('sort.ltoh'):
                    $games = $games->orderBy('price', 'asc')->paginate(Config::get('number.games_per_page'));
                    break;

                case Config::get('sort.htol'):
                    $games = $games->orderBy('price', 'desc')->paginate(Config::get('number.games_per_page'));
                    break;
                    
                default:
                    $games = $games->orderBy('id', 'desc')->paginate(Config::get('number.games_per_page'));
                    break;
            }
        }

        return view('games', compact('games', 'data'));
    }
}
