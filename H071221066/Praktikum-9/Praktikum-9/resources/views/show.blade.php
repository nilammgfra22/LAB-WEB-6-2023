<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum 9 - H071221066</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
    background-color: #89CFF3;
}

nav {
    position: fixed;
    background-color: #FFE3E1;
    justify-content: center;
    text-align: center;
    align-items: center;
}

ul {
    display: flex;
    gap: 20px;
    text-decoration: none;
    justify-content: space-between;
    padding-top: 20px;
    padding-bottom: 20px;
}

nav li {
    color: black;
    font-size: 20px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    list-style: none;
    box-shadow: inset 0 0 0 0 #FF9B9B;
    margin: 0 -.25rem;
    padding: 0 .25rem;
}

.title {
    padding-top: 50px;
}

.search {
    display: inline-block;
    border-radius: 20px;
    background-color: #FFB6C1;
    color: #171617;
    transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
    cursor: pointer;
}

.search:hover {
    background-color: #FFC0CB;
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(255, 182, 193, 0.7);
    color: #FFF;
}

.pencarian {
    padding-left: 500px;
    gap: 10px;
}

.menu {
    color: #000000;
}
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <form class="d-flex align-items-end pencarian" action="{{ route('jenis') }}" method="GET">
                <input class="form-control" type="search" name="jenis" placeholder="Search by Album Types"
                    aria-label="Search">
                <button class="btn search" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link menu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('home') }}">Home</a></li>
                        <li><a class="dropdown-item" href="{{ route('toko.index') }}">Store</a></li>
                        <li><a class="dropdown-item" href="/toko/create">Add Product</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="title d-flex align-items-center justify-content-center">
            <h1>Product Details</h1>
        </div>
        <hr>
            <div class="col-12 mt-4">
                <label class="form-label">Name</label>
                <input type="text" name="nama" class="form-control" value="{{ $toko->nama }}" readonly>
            </div>
            <div class="col-12 mt-4">
                <label class="form-label">Price</label>
                <input type="text" name="harga" class="form-control" value="{{ $toko->harga }}" readonly>
            </div>
            <div class="col-12 mt-4">
                <label class="form-label">Album Types</label>
                <input type="text" name="jenis" class="form-control" value="{{ $toko->jenis }}" readonly>
            </div>
            <div class="col-12 mt-4">
                <label for="inputAddress2" class="form-label">Description</label>
                <textarea name="deskripsi" class="form-control" readonly>{{ $toko->deskripsi }}</textarea>
            </div>
            <div class="mt-3" style="margin: 20px 0">
                <a href="{{ route('toko.index') }}" class="btn search col-2">Back</a>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>