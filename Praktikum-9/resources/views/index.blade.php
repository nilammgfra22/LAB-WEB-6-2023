<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <h1>Daftar Produk</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Merek</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parfumeProducts as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('parfume-products.show', $product->id) }}" class="btn btn-primary" style="background-color: #ff69b4; border-color: #ff69b4;">Detail</a>
                        <a href="{{ route('parfume-products.edit', $product->id) }}" class="btn btn-primary" style="background-color: #ff69b4; border-color: #ff69b4;">Edit</a>
                        <form action="{{ route('parfume-products.destroy', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="background-color: #808080;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
     <a href="{{ route('parfume-products.create') }}" class="btn btn-primary" style="background-color: #ff69b4; border-color: #ff69b4; margin-: 30px">Tambah Produk Baru</a> {{--button --}}
</div>