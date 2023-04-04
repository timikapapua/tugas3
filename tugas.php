<?php
require 'koneksi.php';
$mahasiswa = query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>data produk</h1>
    <table border="1" cellpadding="10" cellspacing="0" >
       

   
        <tr>
            <th>no</th>
            <th>nama barang</th>
            <th>kode barang</th>
            <th>harga barang</th>
    
           

           
        </tr>
        <?php $i =1; ?>
        <?php foreach($mahasiswa as $mhs): ?>
     <tr>
        <td><?=$i;?></td>
        <td><?= $mhs["nama barang"];?></td>
        <td><?= $mhs["kode barang"];?></td>
        <td><?= $mhs["harga barang"];?></td>
       
       
     </tr>
    
     <?php $i++; ?>
            <?php endforeach; ?>
        
    </table>
</body>
</html>