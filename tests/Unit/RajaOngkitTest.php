<?php

namespace Tests\Unit;

use App\Models\Citiess;
use Illuminate\Support\Facades\Http;
use App\Console\Commands\AddCity;
use App\Console\Commands\AddProvince;
use App\Http\Controllers\Api\RajaOngkirController;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\CreatesApplication;
use Tests\TestCase;

class RajaOngkitTest extends TestCase
{
    // protected $API_KEY = '0df6d5bf733214af6c6644eb8717c92c';
    /**
     * A basic unit test example.
     *
    //  * @return void
     */

    // public function testApi()
    // {
    //     $response = Http::withHeaders([
    //         'key' => $this->API_KEY
    //     ])->get('https://api.rajaongkir.com/starter/city');
    // }
    use CreatesApplication, DatabaseMigrations;

    public function test_registrasi()
    {
        $response = $this->post('/api/reg', [
            'name' => 'Kornelius',
            'password' => 'Sipayung',
            'email' => 'sipayung09091999@gmail.com'
        ]);
        $user = User::all();
        $response->assertOk();
        $this->assertEquals(1, count($user));
    }

    // public function test_login()
    // {
        // $response = $this->post('/api/login', [
        //     'password' => Hash::make('fatkulumar'),
        //     'email' => 'fatkul@gmail.com',
        // ]);

        // $user = DB::table()->create([
        //     'email'    => 'username@example.net',
        //     'password' => bcrypt('secret'),
        // ]);

        // Login sebagai user tersebut
        // $this->actingAs($user);

        // $this->actingAs($response);


        // $this->assertAuthenticatedAs($response);
        // $this->post('/login');
        // $this->assertEquals(200, $response->getStatusCode());
        // $this->assertEquals('api/login', $response->original->name());
        // $this->seeText('Dashboard');
        // $response->assertStatus(200);
        // $response->assertOk();
        // $this->assertEquals(1, count($user));
        // $response->assertStatus(200);
    // }

    public function test_logout()
    {
        $response = $this->post('/api/logout', [
            'password' => Hash::make('fatkulumar'),
            'email' => 'fatkul@gmail.com'
        ]);
        $this->post('/logout');
        $response->assertOk();
        $response->assertStatus(200);
    }

    public function test_getProvince()
    {
        $response = $this->get('/api/getProvinces/1');
        $response->assertStatus(200);
    }

    public function test_getCities()
    {
        $response = $this->get('/api/getCities/1');
        $response->assertStatus(200);
    }

}
