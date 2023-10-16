<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cases;

class CaseController extends Controller
{
    public function showCases()
    {
        $cases = Cases::all();
        return view('items.caselist', ['cases' => $cases]);
    }

    public function addToCart($id)
    {
        $case = Cases::find($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "fullname" => $case->case_fullname,
                "price" => $case->case_price,
                "quantity" => 1,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do koszyka!');
    }

}
