<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container py-5">
    <h2>Belanja Online</h2>
        <div class="row">
            <div class="col-8">
                <form method="POST">
                    <div class="form-group row">
                        <label for="Nama " class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="Nama" name="nama" placeholder="Nama Customer" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="Produk_0" type="radio" class="custom-control-input" value="TV" required="required">
                                <label for="Produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="Produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required">
                                <label for="Produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="Produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required">
                                <label for="Produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="Jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <table class="table text-uppercase table-bordered">
                    <tr class="bg-primary text-white">
                        <th>DAFTAR HARGA</th>
                    </tr>
                    <tr>
                    <td>TV : Rp. 4.200.000</td>
                    </tr>
                    <tr>
                        <td>KULKAS : Rp. 3.100.000</td>
                    </tr>
                    <tr>
                    <td>Mesin Cuci : Rp. 3.800.000</td>
                    </tr>
                    <tr class="bg-primary text-white">
                        <th>HARGA DAPAT BERUBAH SETIAP SAAT</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
    <table class="table text-uppercase table-bordered">
            <tr class="table-primary">
                <th>Nama</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
            <?php
            if (isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];

                if ($produk == 'TV'){
                    $harga = 42000000;
                }
                else if ($produk == 'Kulkas'){
                    $harga = 3100000;
                }
                else if($produk == 'Mesin Cuci'){
                    $harga = 3800000;
                }
                else { $harga = 0;}
                
                ?>
            
            <tr>
                <td><?= $nama ?></td>
                <td><?= $produk ?></td>
                <td><?= $jumlah ?></td>
                <td><?= $harga * $jumlah ?></td>
            <?php
            }
            ?>
            </tr>
     </table>
    </div> 
</body>

</html>