## Tentang

ini adalah api data kota & kabupaten dari rajaongkir.com

## Install

- Clone aplikasi ini
    > https://github.com/fatkulumar/rajaongkir2.git
- Copy file .env.example dan ubah menjadi .env
- Setting database di file .env
- Migrate database
    > php artisan migrate

## Menjalankan aplikasi laravel
   - > php artisan serve

## Register Lewat API
Gunakan aplikasi postman atau sejenis untuk mencoba aplikasi laravel tersebut
- Pilih tab Body dan klik from-data
- Isikan di KEY beserta VALUE : name, email, password
- Copy dan paste link tersebut pada kolom request URL di aplikasi postman
    > http://localhost:8000/api/register
- KLik send

## Login
- Setelah register akan mendapatkan token kemudian copy token tersebut lalu tab di bagian Authorization dan pilih type Bearer Token kemudian paste token yang di copy tadi
- di tab headers isikan KEY : Accept dan VALUE : application/json
- Isikan di 3 KEY beserta VALUE : name, email, password
- Copy dan paste link tersebut pada kolom request URL di aplikasi postman
    > http://localhost:8000/api/login
- KLik send

## Logout
- Copy dan paste link tersebut pada kolom request URL di aplikasi postman
    > http://localhost:8000/api/login
- KLik send

## Data

- Mendapatkan data kota berdasarkan ID  
    > http://127.0.0.1:8000/api/search/cities/{id}
- KLik send
- Mendapatkan data provinsi berdasarkan ID 
    > http://127.0.0.1:8000/api/search/provinces/{id}
- KLik send

## Tambah data database dari rajaongkir.com
- Data Kota
    > php artisan add:city
- KLik send
- Data provinsi
    > php artisan add:province
- KLik send
