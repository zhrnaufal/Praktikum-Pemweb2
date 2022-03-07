<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="border border-primary rounded m-5 p-4">

<form method="POST" action="form_belanja.php">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Tv</td>
      <td>4.200,000</td>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Kulkas</td>
      <td>3.100,000</td>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mesin Cuci</td>
      <td>3.800,000</td>
      <td>10</td>
    </tr>
  </tbody>
</table>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Costumer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci" required="required"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-archive"></i>
          </div>
        </div> 
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required" min="1" max="10">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      
      <!-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#daftar_harga">Daftar Harga</button> -->
      <input class="btn btn-success" type="submit" value="Kirim" name="proses">

    </div>
  </div>
</form>
    

<div class="row">
    <div class="col-md-12">
    <?php
$_nama = $_POST['nama'];
$_produk = $_POST['produk'];
$_jumlah = $_POST['jumlah'];

// 
// if ($_produk == 'tv' && $_jumlah >= 10){
//   echo "Mohon maaf stok produk tidak mencukupi"
// } elseif ($_produk == 'kulkas' && $_jumlah >= 8){
//   echo "Mohon maaf stok produk tidak mencukupi"
// } elseif ($_produk == 'mesin_cuci' && $_jumlah >= 10){
//   echo "Mohon maaf stok produk tidak mencukupi"
// } else{
//   ""
// }

//
if ($_produk == 'tv') {
    $total_harga = $_jumlah * 4200000;
} elseif($_produk == 'kulkas') {
    $total_harga = $_jumlah * 3100000;
} elseif($_produk == 'mesin_cuci') {
    $total_harga = $_jumlah * 3800000;
}else {
    "mana ada mas !!!";
}

echo 'Nama : '. $_nama;
echo '<br>Produk Pilihan : '. $_produk;
echo '<br>Jumlah : '. $_jumlah;

echo '<br><br>Total Harga : '. number_format($total_harga);

?>
    </div>
</div>

    </div>
</body>
</html>