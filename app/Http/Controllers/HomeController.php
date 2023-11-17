<?php

namespace App\Http\Controllers;

use App\Models\Kirgu;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Kirgu::all();
        return view('home',[
            'kirgu' => $products
        ]);
    }

    public function create(Request $request)
    {
        $model = new Kirgu();
        $model->name = $request->input('name');
        $model->price = $request->input('price');
        $model->demand = $request->input('demand');
        $model->save();
    }
}

