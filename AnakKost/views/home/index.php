<!-- Page Content -->
<div class="container">
  <div class="col-sm">
    <h1 class="my-4">Anak Kost</h1>
    <!-- <div class="list-group">
      <a href="#" class="list-group-item">Category 1</a>
      <a href="#" class="list-group-item">Category 2</a>
      <a href="#" class="list-group-item">Category 3</a>
    </div> -->
  </div>
  <!-- /.col-lg-3 -->
  <div class="col-lg-12">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="<?php echo web; ?>/image/cover1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="<?php echo web; ?>/image/cover2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="<?php echo web; ?>/image/cover3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row">
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
          </div>
        </div>
      </div> 

    <?php    
          }
        } 
        ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->