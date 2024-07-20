// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', auth()->id())->get();
        return view('carts.index', compact('carts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'toy_id' => 'required|exists:toys,id',
            'quantity' => 'required|integer|min=1'
        ]);

        Cart::create([
            'user_id' => auth()->id(),
            'toy_id' => $request->toy_id,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('carts.index')->with('success', 'Toy added to cart.');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('carts.index')->with('success', 'Toy removed from cart.');
    }
}
