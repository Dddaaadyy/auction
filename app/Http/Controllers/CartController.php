<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $cartIds = session('cart', []);
        $lots = [];
        foreach ($cartIds as $id) {
            if ($id == 1) {
                $lots[] = [
                    'id' => 1,
                    'title' => '1 рубль 1904 год. АР. Серебро, вес: 19.71 грамм. RRR. Экспертное заключение. 1.3.981',
                    'img' => asset('img/lot1.png'),
                    'desc' => 'АР. Серебро, вес: 19.71 грамм. RRR. Экспертное заключение. 1.3.981',
                    'price' => '370 000 руб.',
                ];
            }
            // Здесь можно добавить другие лоты по id
        }
        return view('cart', compact('user', 'lots'));
    }

    public function add(Request $request)
    {
        $lotId = $request->input('lot_id');
        $cart = session()->get('cart', []);
        if (!in_array($lotId, $cart)) {
            $cart[] = $lotId;
            session(['cart' => $cart]);
        }
        return redirect()->route('cart');
    }
} 