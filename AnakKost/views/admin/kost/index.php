<div class="container p-4" >
<a class="btn btn-success" href="<?php echo web; ?>akun-admin_insert">INSERT</a>
<div class="row m-2">
    <?php
    if($variabel!=false){
            for($i=0; $row=$variabel->fetch(); $i++){
                // echo $row->getidKost()." - ".$row->namaKost."<br/>";  
      ?>  
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="<?php echo web; ?>kost/viewkost/<?php echo $row->getidKost()?>"><img class="card-img-top" src="<?php echo web; ?>/image/<?php echo $row->gambar; ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="<?php echo web; ?>kost/viewkost/<?php echo $row->getidKost()?>"> <?php echo $row->namaKost ?>  </a>
            </h4>
            <h5> <?php echo $row->harga ?></h5>
            <p class="card-text"><?php echo $row->deskripsi ?></p>
            <p class="card-text"><?php echo $row->alamat ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><?php echo $row->jenis ?></small>
            <a class="btn btn-danger" href="<?php echo web; ?>akun-admin_kost/removeKost/<?php echo $row->getidKost()?>">Hapus</a>
            <a class="btn btn-primary" href="<?php echo web; ?>akun-admin_update,<?php echo $row->getidKost()?>">Update</a>
          </div>
        </div>
      </div> 

    <?php             
          }
        } 
        ?>
    </div>

</div>