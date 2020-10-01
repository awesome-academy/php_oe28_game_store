<?php

namespace App\Http\Controllers;

use App\Models\PaymentDetail;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if ($request->missing('id') || $request->missing('name') || $request->missing('price') || $request->missing('quantity')) {
            return redirect()->back();
        }

        $paymentDetail = PaymentDetail::where([
            'game_id' => $request->id,
            'account_id' => Auth::id(),
        ])->first();
        if ($paymentDetail !== null) {
            return redirect()->route('games.detail', ['id' => $request->id])->with('error', trans('text.cart.owned'));
        } elseif (Auth::user()->role == config('role.publisher')) {
            return redirect()->route('games.detail', ['id' => $request->id])->with('error', trans('text.cart.publisher'));
        }

        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $request->id => [
                    'name' => $request->name,
                    'price' => $request->price,
                    'quantity' => $request->quantity,
                ]
            ];
            session()->put('cart', $cart);

            return redirect()->route('games.detail', ['id' => $request->id])->with('success', trans('text.cart.added'));
        }
        if (isset($cart[$request->id])) {
            return redirect()->route('games.detail', ['id' => $request->id])->with('error', trans('text.cart.existed'));
        }
        $cart[$request->id] = [
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ];
        session()->put('cart', $cart);

        return redirect()->route('games.detail', ['id' => $request->id])->with('success', trans('text.cart.added'));
    }
}
