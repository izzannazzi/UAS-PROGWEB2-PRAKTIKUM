 <?php
     $get = mysqli_query($koneksi, "SELECT * FROM detail_pesanan p, produk pr WHERE p.id_produk=pl.id_produk");
                                        
     $i=1;

      while ($p=mysqli_fetch_array($get)) {
      $qty = $p['qty'];
       $harga = $p['harga'];
       $nama_produk = $p['nama_produk'];
        $subtotal = $qty * $harga
          ?>
                                           
          <tr>
                                    
            <tr>
            <td><?= $i++;?></td>
             <td><?= $nama_produk ?></td>
               <td>Rp. <?= number_format($harga) ?>,-</td>
               <td><?= number_format($qty) ?></td>
               <td>Rp. <?= number_format($subtotal) ?>,-</td>
               <td> <a href="view.php?idp=<?=$id_pesanan;?>" class="btn btn-primary" target="blank"> Tampilkan </a> | Delete </td>
                 </tr>
                                            
               <?php } ?>