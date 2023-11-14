<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index(Request $request)

    {
        $kirgu = Items::create([
            'name' => $request->input('цемент'),
            'price' => $request->input(4999),
            'demand' => $request->input(999999),
        ]);

    }

    public function create(Request $request)
    {
        $model = new Items();
        $model->name = $request->input('name');
        $model->price = $request->input('price');
        $model->demand = $request->input('demand');
        $model->save();
    }
}

