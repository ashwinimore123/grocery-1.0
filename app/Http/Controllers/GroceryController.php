<?php

namespace App\Http\Controllers;

use App\Models\GroceryItem;
use Illuminate\Http\Request;

class GroceryController extends Controller
{
     public function getInventory(){
        $inventory = GroceryItem::all();
        return view('grocery.index',['inventory' => $inventory]);
    }
    public function addItem(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
        ]);
            // dd($request);

        $item = GroceryItem::create([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
        ]);
        return redirect('index');
        
    }

   }



