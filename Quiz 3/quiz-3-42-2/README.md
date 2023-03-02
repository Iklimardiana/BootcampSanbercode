# Quiz 3

## Buat Branch

Buatlah branch dengan nama sesuai dengan username Gitlab kalian!

## 0. Setup (5 poin)

Repositori ini dibangun dengan Laravel versi 8.0 ke atas. Setelah melakukan clone dari repositori ini, lakukanlah langkah-langkah di bawah ini untuk menjalankan project.

- masuk ke direktori quiz-3-42-2

```bash
cd quiz-3-42-2
```

- jalankan perintah composer install untuk mendownload direktori vendor . Note : jika terjadi error coba perintah `composer update` untuk menggantikan perintah composer install

```bash
composer install
```

- buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example (copy isi dari .env.example lalu paste di file .env)

- jalankan perintah php artisan key generate

```bash
php artisan key:generate
```

- Tambahan: Untuk pengerjaan di laptop/PC masing-masing, sesuaikan nama database, username dan password nya di file .env dengan database kalian. (database tidak perlu dikirim)

- menjalankan server laravel

```bash
php artisan serve
```

### nb: sebelum mengerjakan soalnya silahkan buat branch dulu dan jangan lupa di checkout

Setelah itu kalian sudah bisa lanjut mengerjakan soal berikutnya.

## 1. Membuat ERD (15 poin)

Seorang klien ingin dibuatkan sebuah aplikasi web untuk Forum diskusi game. Harapannya aplikasi web ini dapat digunakan untuk saling berbagi informasi tentang game.

berikut deskripsi singkat mengenai requirement web tersebut (tabel-tabel beserta hubungan di antara tabel):

### Require

- table "game" terdapat data : id(int), name(VARCHAR), gameplay(TEXT), developer(VARCHAR), year(int atau year)
- table "platform" terdapat data : id(int), name(VARCHAR)
- table "user" terdapat data : id(int), name(VARCHAR), email(VARCHAR), password(VARCHAR)
- table "profile" terdapat data : id(int), address(TEXT), age(int)

### Description

- setiap user memiliki satu profile
- satu game memiliki banyak platform
- user dapat memberi komentar di banyak game dan game dapat dikomentari oleh banyak user

Buatlah ERD untuk keperluan web tersebut lalu export ke dalam format gambar (PNG). Kamu bisa gunakan mysql workbench atau aplikasi online https://app.diagrams.net/.

Simpan file PNG tersebut di dalam folder images dan simpan folder images tersebut di folder public di project ini.

## 2. Membuat Migrations (20 poin)

Buatlah Migration yang diimplementasi dari ERD yang dibuat di soal sebelumnya.

## 3. Membuat Controller (10 poin)

Buatlah controller untuk mengatur fitur CRUD "game".

## 4. Memasangkan Template & Routing(25 poin)

- Pada project ini kamu diminta untuk memasangkan template dari SB-Admin-2 https://startbootstrap.com/themes/sb-admin-2/. Kami sudah memasangkan asset-asset yang sudah didownload dari halaman SB-Admin-2 di folder public. Tugas kamu adalah memperbaiki template master blade yang terdapat di folder resources/views/layouts/master.blade.php dan hubungkan dengan asset-asset yang diperlukan. (5 poin)
- Web memiliki route sebagai berikut: (10 poin)

| url                      | method   | keterangan                                                                                                    |
| ------------------------ | -------- | ------------------------------------------------------------------------------------------------------------- |
| `'/'`                    | `GET`    | menampilkan gambar PNG/JPG/JPEG desain ERD yang sudah dibuat di soal no #1.                                   |
| `'/game' `               | `GET`    | menampilkan tabel berisi data game yang tersedia                                                              |
| `'/game/create'`         | `GET`    | menampilkan form untuk membuat data game baru, di dalam form tersebut terdapat input pengisian data-data game |
| `'/game'`                | `POST`   | menyimpan data game baru                                                                                      |
| `'/game/{game_id}'`      | `GET`    | no #6                                                                                                         |
| `'/game/{game_id}/edit'` | `GET`    | menampilkan form untuk edit data-data game                                                                    |
| `'/game/{game_id}'`      | `PUT`    | menyimpan data game yang sudah diedit melalui form edit game sesuai id                                        |
| `'/game/{game_id}'`      | `DELETE` | menghapus data game dengan id tertentu                                                                        |

- pasangkanlah script berikut ini ke HANYA ke halaman blade untuk menampilkan data pada tabel game (pada url `'/game'`). (10 poin)
  Keterangan : `Swal` merupakan function dari file swal.min.js yang terdapat di folder public/sbadmin2/swal.min.js

```html
<script>
  Swal.fire({
    title: "Berhasil!",
    text: "Memasangkan script sweet alert",
    icon: "success",
    confirmButtonText: "Cool",
  });
</script>
```

- Jika pemasangan script pada poin sebelumnya berhasil maka akan menampilkan alert seperti ini di halaman courses tersebut:

![swal-example.gif](swal-example.gif?raw=true)

## 5. Alur CRUD (10 poin)

Pastikan alur CRUD game berjalan seperti alur CRUD biasanya. Gambarannya adalah seperti berikut:

- halaman index game (`'/game'`) menampilkan tabel kumpulan game lengkap beserta tombol-tombol actionnya (Edit, Delete, Detail). terdapat pula tombol menuju form pembuatan game (Tambah game).
- halaman create game menampilkan form untuk membuat game baru, sesudah submit lalu halaman kembali ke index game.
- halaman edit untuk menampilkan form edit game, sesudah submit update lalu kembali ke index game
- menghapus data game berdasarkan id ketika tombol Delete diklik

## 6. Menampilkan platform-platform di Halaman Show game (15 poin)

- untuk data table platform silahkan insert manual di phpmyadmin/mysql untuk data-datanya
- Tampilkanlah detail game pada route `'/game/{game_id}'` saat tombol detail di klik seperti berikut :

### output

![show-game.png](show-game.png?raw=true)
