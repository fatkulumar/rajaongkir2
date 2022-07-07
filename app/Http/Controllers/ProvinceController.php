<?php

namespace App\Http\Controllers;

use App\Models\Provinces;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\RajaOngkirController;

class ProvinceController extends Controller
{
    public function get($id) {

        $province = Provinces::where('id', $id)->get();
        $prov = Provinces::count();

        if($prov == 0) {
            $rajaongkir = new RajaOngkirController();
            return $rajaongkir->getProvinces($id);
        }

        $provinsi = array();
        foreach($province as $prov) {
            $provinsi[] = $prov;
        }

        return response()->json([
            'success' => true,
            'message' => 'Get All Provinces' . $id . ' dari database',
            'data'    => $provinsi
        ]);
    }
}
