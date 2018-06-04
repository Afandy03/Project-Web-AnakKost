<div class="container p-4 text-center" style="height: 580px">
    <p>Pembayaran dapat Dilakukan Via Transfer rekening </p> 
    <p>No.rek :idUser 1418982367124</p>
    <table class='table'>
        <thead class="thead-dark">
        <tr>
        <th>KOST</th>
        <th>TANGGAL ORDER</th>
        <th>HARGA</th>
        <th>STATUS</th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        if($variabel!=false){
            $variabel->execute();
            for($i=0; $row=$variabel->fetch(); $i++){
        ?>
        <tr>
        <td><a href="<?php echo web; ?>kost/viewkost/<?php echo $row['idKost']?>"><?php echo $row['namaKost'] ?></a></td>
        <td><?php echo $row['tglOrder'] ?></td>
        <td>Rp <?php echo $row['harga'] ?></td>
        <td><?php if($row['status']) echo "<p class='bg-success text-white p-1'> Sudah dibayar </p>";
                    else echo "<p class='bg-danger text-white p-1'> belum dibayar </p>";  ?></td>
        <td><a class="btn btn-danger" href="<?php echo web; ?>akun-user_order/removeOrder/<?php echo $row['idKost']?>"><span class="fi-trash"></span></a></td>
        </tr>
        <?php
                }
            }
        ?>
        </tbody>
    </table>
</div>