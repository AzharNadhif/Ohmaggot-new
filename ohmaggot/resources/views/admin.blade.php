<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ohmaggot! - Admin</title>
    <link rel="Website Icon" href="{{asset('images/icon/logomaggot.png')}}" type="png">
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <!-- FONT RUBIK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- ICON -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    {{-- @foreach ($tes as $user)
    {{ $user->username }}
@endforeach

@foreach ($produk as $product)
    {{ $product->name}}
@endforeach --}}


<!-- SIDENAVVVV -->

    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Ohmaggot!</a>
        <br>
        <a href="#section1" onclick="openSection('section1')"><i class="fa-regular fa-user"></i> <b>Table User</b></a>
        <a href="#section2" onclick="openSection('section2')"><i class="fa-solid fa-cart-shopping"></i> <b>Table Produk</b></a>
        <a href="#section3" onclick="openSection('section3')"><i class="fa-regular fa-newspaper"></i> <b>Table Artikel</b></a>
        <a href="#section1" onclick="openSection('section4')"><i class="fa-regular fa-user"></i> <b>Table Lokasi</b></a>
        <a href="#section1" onclick="openSection('section5')"><i class="fa-regular fa-credit-card"></i> <b>Table Transaksi</b></a>
        <form action="{{route('logoutadmin')}}" method="POST">
            @csrf
            <button class="btn btn-danger logout">
                Logout
            </button>
        </form>
    </div>

    <div class="content">
        <span id="judul" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <img src="images/icon/logomaggot.png" alt=""style="height:100px" class="rounded float-right">
        <br><br>
        <div class="card mt-2" style="max-width: 540px; margin-left:50px;">
                <div class="card-body">
                    <h4>Haloo, Admin</h4>
                    <p>silakan kelola data data</p>
                    <hr>
                </div>
        </div>
        <br><br>
        <div class="section-content" id="section1-content">
            <h2>Table Pengguna</h2>
            <div class="container">
                    {{-- <?php
                        if (!empty($_SESSION['username'])) {
                            echo '<div class="text-end mt-5">
                                User Login : <b>' . $_SESSION['username'] . '</b> |
                                <a href="signout.php" class="btn btn-danger btn-sm">Logout</a>
                                </div>';
                            }
                    ?> --}}

                    {{-- <a href="tambah.php" class="btn btn-primary" style="margin-bottom:30px">Tambah Pengguna</a>
                    <br> --}}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            {{-- <th>Aksi</th> --}}
                            <th>Username</th>
                            {{-- <th>Password</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tes as $t)
                                <tr>
                                    {{-- <td>
                                        <a href="#" class="btn btn-warning btn-sm"> Ubah </a> |
                                        <a href="#" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin untuk menghapus data?\');"> Hapus </a>
                                    </td> --}}
                                
                                        <td>{{ $t ->username }}</td>
                                        {{-- <td>{{$t ->password}}</td> --}}
                                
                                </tr>
                            @endforeach
                            {{-- if(empty($data)) {
                                echo '<tr><td colspan ="5" class ="text-center"> Tidak ada data</td></tr>';
                            } --}}
                        

                        </tbody>
                    </table>
                    
                </div>
            </div>
        {{-- SECTION 2 --}}
        
        <div class="section-content" id="section2-content">
            <h2>Table Produk</h2>
            <a href="{{route('formproduk')}}" class="btn btn-primary" style="margin-bottom:30px">Tambah Produk</a>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Aksi</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Stock</th>
                            <th>Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $p)
                                <tr>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm"> Ubah </a> |
                                        <form method="POST" action="{{ route('deleteproduct', ['id' => $p->_id]) }}" onsubmit="return confirm('Apakah Anda yakin untuk menghapus data?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                        
                                    </td>
                                    <td>{{ $p ->name }}</td>
                                    <td>{{ $p ->description}}</td>
                                    <td>{{ $p ->stock? 'Tersedia' : 'Kosong'}}</td>
                                    <td><img src="images/produk/{{ $p ->images}}" class="produk"></td>
                                </tr>
                            @endforeach
                            {{-- if(empty($data)) {
                                echo '<tr><td colspan ="5" class ="text-center"> Tidak ada data</td></tr>';
                            } --}}
                        

                        </tbody>
                    </table>
        </div>
        
        <div class="section-content" id="section3-content">
            <h2>Table Artikel</h2>
            <a href="{{route('formartikel')}}" class="btn btn-primary" style="margin-bottom:30px">Tambah Artikel</a>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Aksi</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Penulis</th>
                            <th>Tanggal</th>
                            <th>Isi</th>
                            <th>Sumber</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artikel as $ar)
                                <tr>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm"> Ubah </a> |
                                        <form method="POST" action="{{ route('deletearticle', ['id' => $ar->_id]) }}" onsubmit="return confirm('Apakah Anda yakin untuk menghapus data?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                    <td>{{ $ar ->judul }}</td>
                                    <td><img src="images/artikel/{{ $ar ->gambar}}" class="artikel"></td>
                                    <td>{{ $ar ->penulis}}</td>
                                    <td>{{ $ar ->tanggal}}</td>
                                    <td>{{ $ar ->isi}}</td>
                                    <td>{{ $ar ->sumber}}</td>
                                </tr>
                            @endforeach
                            {{-- if(empty($data)) {
                                echo '<tr><td colspan ="5" class ="text-center"> Tidak ada data</td></tr>';
                            } --}}
                        

                        </tbody>
                    </table>
        </div>
        {{-- SECTION 4 --}}
        <div class="section-content" id="section4-content">
            <h2>Table Lokasi</h2>
        </div>

        {{-- SECTION 5 --}}
        <div class="section-content" id="section5-content">
            <h2>Table Transaksi</h2>
        </div>
    </div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.left = "0";
        document.querySelector(".content").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.left = "-250px";
        document.querySelector(".content").style.marginLeft = "0";
    }

    function openSection(sectionId) {
        // Sembunyikan semua konten section
        const sectionContents = document.getElementsByClassName("section-content");
        for (let i = 0; i < sectionContents.length; i++) {
            sectionContents[i].style.display = "none";
        }

        // Tampilkan konten yang sesuai
        document.getElementById(sectionId + "-content").style.display = "block";
    }
</script>

</body>
</html>
