<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-2"> Example Market </h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/produk.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sambal Pedas</h5>
                <p class="card-text">Dijamin Ketagihan</p>
                <form action="/checkout" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mau Pesan Berapa ?</label>
                        <input type="number" placeholder="Jumlah Produk yang ingin dipesan" class="form-control" name="qty">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                        <input type="text" placeholder="Masukkan Nama Anda" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                        <input type="text" placeholder="Masukkan No HP!" class="form-control" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat Pelanggan </label>
                        <textarea name="address" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Checkout</button>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>