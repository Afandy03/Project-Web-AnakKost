<div class="container" style="height:580px;">
    <table class='table'>
        <?php
        if($variabel!=false){
            $variabel->execute();
            $row=$variabel->fetch();
        ?>
        <tr>
        <th>NAMA</th>
        <td><?php echo $row->nama ?></td>
        </tr>
        <tr>
        <th>EMAIL</th>
        <td><?php echo $row->email ?></td>
        </tr>
        <tr>
        <th>USERNAME</th>
        <td><?php echo $row->Username ?></td>
        </tr>
        <tr>
        <th>NO TELP</th>
        <td><?php echo $row->noTelp ?></td>
        </tr>
        <tr>
        <th>JENIS KELAMIN</th>
        <td><?php echo $row->jenisKelamin ?></td>
        </tr>
        <tr>
        <th>ID USER</th>
        <td><?php echo $row->idUser ?></td>
        </tr>
    </table>
    <a href="<?php echo web; ?>akun-user_updateProfil,<?php echo $row->Username?>" class="btn btn-primary">UPDATE</a>
    
    <?php
            }
    ?>
</div>