<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class CartController extends Controller
{
    public function add(Product $product){
	
		//dd($product);  // to test it
        
        // add the product to cart
			\Cart::session(auth()->id())->add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 4,
                'attributes' => array(),
                'associatedModel' => $product
            ));
            
            //return back();
            
            return redirect()->route('cart.index');
    }

    public function checkout(){

      return view('cart.checkout');
    }
    
    public function index(){
	
		$cartItems = \Cart::session(auth()->id())->getContent();
		return view('cart.index', compact('cartItems'));
    }
    
    public function destroy($itemId){
		
		\Cart::session(auth()->id())->remove($itemId);
		
		return back();
  }
  
  public function update($rowId){
	
		\Cart::session(auth()->id())->update($rowId, [
			'quantity' => array(
				'relative' => false,
    //		'value' => request('quantity')
    'value' => 5
      ),
  ]);
		
		return back();
	}
}
