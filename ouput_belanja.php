<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <div class="container-fluid">
	    <div class="row">
		    <div class="col-md-12 mt-4">
                <?php 
                $customer = $_POST["customer"];
                $produk = $_POST["produk"];
                $jumlah = $_POST["jumlah"];
                
                if($produk == "TV"){
                    $harga = 4200000;
                }elseif($produk == "KULKAS"){
                    $harga = 3100000;
                }else($produk == "MESIN CUCI"){
                    $harga = 3800000;
                }
                
                $total = $jumlah * $harga; 
                echo "Customer = ".$customer"<br>";
                echo "Produk = ".$produk"<br>";
                echo "Jumlah = ".$jumlah"<br>";
                echo "Total = ".$total;
                
                ?>
            </div>
	    </div>
    </div>
</body>
</html>