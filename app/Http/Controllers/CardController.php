<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Cart;

class CardController extends Controller
{
    public function addCard($id)
    {
    	$card = Post::where('id',$id)->first();
        $qty = 1;

        $data['qty'] = $qty;
        $data['id'] = $card->id;
        $data['name'] = $card->title;
        $data['price'] = $card->price;
        $data['options']['image'] = $card->image;
        Cart::add($data);

        return redirect('/cart');
    	
    }

    public function deleteProduct($id)
    {
    	Cart::update($id, 0);
    	return redirect('/cart');
    }

    public function incrimentCart($id,$qty)
    {
    	Cart::update($id, $qty+1);
    	return redirect('/cart');
    }

    public function decriment($id,$qty)
    {
    	 Cart::update($id, $qty-1);
    	 return redirect('/cart');
    }
}
