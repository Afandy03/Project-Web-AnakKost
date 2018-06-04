<div class="container p-4 text-center" style="height: 580px">
    <table class='table'>
        <thead class="thead-dark">
        <tr>
        <th>USERNAME</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
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
        <td><a href="<?php echo web; ?>akun-user_profil,<?php echo $row['Username'] ?>"><?php echo $row['Username'] ?></a></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['Password'] ?></td>
        <!-- <td><a href="<?php echo web; ?>kost/viewkost/<?php echo $row['idKost']?>"><?php echo $row['namaKost'] ?></a></td> -->
        <td><a class="btn btn-danger" href="<?php echo web; ?>akun-admin_user/removeUser/<?php echo $row['idUser'] ;?>"><span class="fi-trash"></span></a></td>
        </tr>
        <?php
                }
            }
        ?>
        </tbody>
    </table>
</div>