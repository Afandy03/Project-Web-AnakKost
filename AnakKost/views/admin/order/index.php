<div class="container p-4 text-center" style="height: 580px">
    <table class='table'>
        <thead class="thead-dark">
        <tr>
        <th>USER</th>
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
        <td><?php echo $row['Username'] ?></td>
        <td><a href="<?php echo web; ?>kost/viewkost/<?php echo $row['idKost']?>"><?php echo $row['namaKost'] ?></a></td>
        <td><?php echo $row['tglOrder'] ?></td>
        <td>Rp <?php echo $row['harga'] ?></td>
        <td><?php if($row['status']) echo "<a href='akun-admin_order/verif/".$row['idUser'].",".$row['idKost'].",0'class='btn btn-success text-white'> Terkonfirm </a>";
                    else echo "<a href='akun-admin_order/verif/".$row['idUser'].",".$row['idKost'].",1' class='btn btn-danger text-white'> Konfirmasi </a>";  ?></td>
        <td><a class="btn btn-danger" href="<?php echo web; ?>akun-admin_order/removeOrder/<?php echo $row['idUser']; ?>,<?php echo $row['idKost']; ?>"><span class="fi-trash"></span></a></td>
        </tr>
        <?php
                }
            }
        ?>
        </tbody>
    </table>
</div>