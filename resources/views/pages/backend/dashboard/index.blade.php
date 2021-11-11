@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        Dashboard
    </div>
    <div class="card-body">
        <p class="mb-4">
            8. Jelaskan secara singkat (2-3 paragaraf) arsitektur, prinsip, pendekatan, atau hal lainnya yang digunakan dalam pengembangan aplikasi ini ? <br>
            Secara arsitektur yang saya pahami bahwa laravel menggunakan konsep MVC, dengan memisahkan folder antara tampilan view, pengelolaan database dan controller. selain itu juga memisahkan asset-asset yang dibutuhkan untuk pengembangan seperti gambar, file frontend seperti bootstrap, css file, js file dll yang disimpan difoler public. <br> 
            Pendekatan yang dilakukan dengan memahami setiap perintah atau soal yang diberikan dan mengerjakannya step by step. Setiap mengerjakan sebuah test, prinsip saya biasanya membaca setiap soal dan perintah yang ada, dari situ bisa diseleksi mana yang sekiranya yang bisa saya lakukan atau belum bisa dilakukan karena harus dipelajari dahulu terkait soal yang diberikan. karena tentu saja ketika mengembangkan sebuah aplikasi pasti mengalami errors dan kemudian mencari solusi dengan bertanya kepada teman atau browsing di internet. <br>
        </p>
    
        <p>
            9. Apa kekurangan dari aplikasi yang dibangun ini dari beberapa aspek berikut:
            <ol type="A">
                <li>Fitur</li> 
                <li>Performa</li>
                <li>Kualitas Kode</li>
            </ol>
            - Menurut saya dari segi fitur : 
            <ul>
                <li> Fitur CRUD yang dikelola oleh Admin untuk setiap Post yang dibuat </li>
                <li> Role Akses Admin, Penulis, User </li>    
                <li> Category Post </li>    
                <li> Frontend </li>    
            </ul> 
            - Dari segi performa dan kualitas kode, saya sejujurnya belum terlalu memahami apakah pengembangan aplikasi yang saya kembangkan ini memenuhi performa yang baik dengan memperhatikan aspek kualitas kode yang dibuat sehingga kebanyakan ketika membuat sebuah aplikasi hanya bisa dilihat dari segi problem solve, apakah aplikasi yang dibuat sudah sesuai dengan studi kasus atau soal yang diberikan. 
        </p>
    </div>
</div>

   

 
@endsection