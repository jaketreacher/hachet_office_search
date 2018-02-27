<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;

class BuildingController extends Controller
{
    public function show()
    {
        $this->validate(request(), [
            'price-min' => "integer|min:0",
            'price-max' => "integer|min:0",
            'offices'   => "integer|min:0",
            'tables'    => "integer|min:0",
            'sqm-min'   => "integer|min:0",
            'sqm-max'   => "integer|min:0",
        ]);

        $buildings = \DB::table('buildings');

        if( null !== request('name')) {
            $buildings = $buildings->where('name', 'like', '%'.request('name').'%');
        }

        if( null !== request('price-min')) {
            $buildings = $buildings->where('price', '>=', request('price-min'));
        }

        if( null !== request('price-max')) {
            $buildings = $buildings->where('price', '<=', request('price-max'));
        }

        if( null !== request('offices')) {
            $buildings = $buildings->where('offices', '=', request('offices'));
        }

        if( null !== request('tables')) {
            $buildings = $buildings->where('tables', '=', request('tables'));
        }

        if( null !== request('sqm-min')) {
            $buildings = $buildings->where('sqm', '>=', request('sqm-min'));
        }

        if( null !== request('sqm-max')) {
            $buildings = $buildings->where('sqm', '<=', request('sqm-max'));
        }

        return $buildings->get();
    }
}
