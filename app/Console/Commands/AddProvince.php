<?php

namespace App\Console\Commands;

use App\Models\Provinces;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class AddProvince extends Command
{
    /**
     * API_KEY
     *
     * @var string
     */
    protected $API_KEY = '0df6d5bf733214af6c6644eb8717c92c';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:province';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk menambahkan data kota dari rajaongkir.com';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = Http::withHeaders([
            'key' => $this->API_KEY
        ])->get('https://api.rajaongkir.com/starter/province');

        $provinces = $response['rajaongkir']['results'];

        foreach($provinces as $prov){

            $provinsi = new Provinces();
            $provinsi->province = $prov['province'];
            $provinsi->save();
            $this->info('Province added successfully');
        }


    }
}
