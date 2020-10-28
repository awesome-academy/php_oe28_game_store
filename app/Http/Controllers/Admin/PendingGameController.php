<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\PendingGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PendingGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendingGames = PendingGame::all();

        return view('admin.pending-games', compact('pendingGames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $pendingGame = PendingGame::findOrFail($request->id);
            $game = Game::create([
                'title' => $pendingGame->title,
                'price' => $pendingGame->price,
                'release_date' => $pendingGame->release_date,
                'summary' => $pendingGame->summary,
                'features' => $pendingGame->features,
                'requirement' => $pendingGame->requirement,
                'rating' => 0,
                'publisher_id' => $pendingGame->publisher_id,
            ]);

            $path = config('link.game-detail-link') . $game->id;
            File::makeDirectory($path, $mode = 0777, true, true);
            File::move(config('link.game-pending-link') . $request->id . '/preview.jpg', $path . '/preview.jpg');
            File::move(config('link.game-pending-link') . $request->id . '/detail-1.jpg', $path . '/detail-1.jpg');
            File::move(config('link.game-pending-link') . $request->id . '/detail-2.jpg', $path . '/detail-2.jpg');
            File::move(config('link.game-pending-link') . $request->id . '/detail-3.jpg', $path . '/detail-3.jpg');

            $pendingGame->delete();

            return "Game has been published!";
        } catch (ModelNotFoundException $e) {
            return "Failed !";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $pendingGame = PendingGame::findOrFail($id);
            $pendingGame->delete();

            return trans('text.admin.pending_game.delete_success');
        } catch (ModelNotFoundException $e) {
            return trans('text.admin.pending_game.delete_fail');
        }
    }
}
