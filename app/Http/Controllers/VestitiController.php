<?php

namespace App\Http\Controllers;


use App\Models\Swear;

use Illuminate\Http\Request;

class VestitiController extends Controller
{
    public function create(){
        return view('swear.create');
    }


public function store(Request $request){

    $swear = new Swear();
    $swear->name = $request->input('name');
    $swear->gender = $request->input('gender');
    $swear->category = $request->input('category');
    $swear->price = $request->input('price');
    $swear->description = $request->input('description');
    $swear->img = $request->file('img')->store('public/products');
    $swear->save();
// Swear::create(
// [
//     'name'=> $request->input('name'),
//     'gender' => $request->input('gender'),
//     'category' => $request->input('category'),
//     'price' => $request->input('price'),
//     'description' => $request->input('description'),
//     'img' => $request->file('img')->store('public/products'),


// ]
// )

return redirect()->route('vestiti.create')->with('message', 'Prodotto aggiunto con successo!');


}

}
