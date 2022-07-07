<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Citiess;
use App\Models\Provinces;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class RajaOngkirController extends Controller
{

    protected $API_KEY = '0df6d5bf733214af6c6644eb8717c92c';

    public function getProvinces($id)
    {

        $response = Http::withHeaders([
            'key' => $this->API_KEY
        ])->get('https://api.rajaongkir.com/starter/province?id=' . $id);

        $provinces = $response['rajaongkir']['results'];

        return response()->json([
            'success' => true,
            'message' => 'Get All Provinces ' . $id . ' dari API',
            'data'    => $provinces
        ]);
    }

    /**
     * getCities
     *
     * @param  mixed $id
     * @return void
     */
    public function getCities($id)
    {

        $response = Http::withHeaders([
            'key' => $this->API_KEY
        ])->get('https://api.rajaongkir.com/starter/city?id =' . $id);


        $cities = $response['rajaongkir']['results'];

        return response()->json([
            'success' => true,
            'message' => 'Get All Cities ' . $id . ' dari API',
            'data'    => $cities
        ]);

    }
}
