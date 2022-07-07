## Tentang

ini adalah api data kota & kabupaten dari rajaongkir.com

## Install

- Clone aplikasi ini
    > https://github.com/fatkulumar/rajaongkir2.git
- Copy file .env.example dan ubah menjadi .env
- Setting database di file .env
- Migrate database
    > php artisan migrate

## Tambah data database dari rajaongkir.com

- Data Kota
    > php artisan add:city
- Data provinsi
    > php artisan add:province

## API
Gunakan aplikasi postman atau sejenis untuk mencoba aplikasi laravel tersebut
- Mendapatkan data kota berdasarkan ID  
    > http://127.0.0.1:8000/api/search/cities/{id}
- Mendapatkan data provinsi berdasarkan ID 
    > http://127.0.0.1:8000/api/search/provinces/{id}
