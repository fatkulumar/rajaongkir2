<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\RajaOngkirController;
use App\Models\Citiess;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function get($id) {

        $cities = Citiess::where('id', $id)->get();
        $citi = Citiess::count();
        $city = array();

        if($citi == 0) {
            $rajaongkir = new RajaOngkirController();
            return $rajaongkir->getCities($id);
        }

        foreach($cities as $kota) {
            $city[] = $kota;
        }

        return response()->json([
            'success' => true,
            'message' => 'Get All Provinces ' . $id . ' dari database' ,
            'data'    => $city
        ]);
    }
}
