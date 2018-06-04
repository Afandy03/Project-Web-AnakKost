<?php
    if($variabel!=false){
        $row=$variabel->fetch();
?>  
 

<!-- Page Content -->
<div class="container ml-0">
<div class="row">
  <div class="col-2 pl-5 pt-2">
    <!-- <button onclick="goBack()" type="button" class="btn btn-info "> 
        <span class="fi-arrow-thick-left">  Back</span>
    </button> -->
  </div>  
 <div class="col-10 p-2">

    <h1 class="my-4"><?php echo $row->namaKost ?> </h1>
  
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="<?php echo web; ?>/image/<?php echo $row->gambar; ?>" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Description</h3>
        <p><?php echo $row->deskripsi ?></p>
        <h3 class="my-3">FASILITAS</h3>
        <ul>
            <li>Wifi <?php if($row->wifi)echo " Tesedia"; else echo" Tidak Tersedia"; ?></li>
            <li>Kamar Mandi <?php echo $row->kamarMandi?></li>
            <li>Ac <?php if($row->ac)echo " Tesedia"; else echo" Tidak Tersedia"; ?></li>
            <li><?php echo $row->barangDalam?></li>
            <!-- <li><?php echo $row->ukuran ?></li>
            <li><?php echo $row->jenis ?></li>
            <li><?php echo $row->noTelp ?></li>
            <li><?php echo $row->tersedia ?></li>
            <li><?php echo $row->barangDalam ?></li> -->
        </ul>
        <a href="<?php echo web?>kost/addwishlist/<?php echo $row->getidKost()?>" class="btn btn-info ">   <span class="fi-heart"></span> </a>
        <a href="<?php echo web?>kost/addorder/<?php echo $row->getidKost()?>" class="btn btn-info ">    <span class="fi-cart"></span></a>
      </div>

    </div>
    <div class="row">
        <div class="col-5"> 
        <li>Alamat  :  <?php echo $row->alamat ?> </li>
        <li>No Telp :  <?php echo $row->noTelp ?> </li>
        <li>Pemilik :  <?php echo $row->namaPemilik ?> </li>
        </div>

        <div class="col-5"> 
        <li>Kamar Kosong :  <?php echo $row->tersedia ?> </li>
        <li>Ukuran Kamar :  <?php echo $row->ukuran ?> </li>
        <li>Harga        :  RP <?php echo $row->harga ?>  / bulan</li>
        </div>
    
    </div>
    
  </div>
  </div>
 </div>

</div>

</div>
<?php } ?>

<!-- /.container -->



