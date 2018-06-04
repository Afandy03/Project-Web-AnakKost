<div class="container">
<?php
    if($variabel!=false){
            $row=$variabel->fetch();
                // echo $row->getidKost()." - ".$row->namaKost."<br/>";  
?>  
<form id="enableButtonForm" action="<?php echo web; ?>akun-admin_kost/updateKost/<?php echo $row->getidKost() ?>" method="post" class="form-horizontal">   
 <div class="row">
 <div class="col-6">
  
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Kost</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="namaKos" value="<?php echo $row->namaKost ?>"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Alamat Kost</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat ?>" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">NoTelp</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="number" value="<?php echo $row->noTelp ?>" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Pemilik</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="nama" value="<?php echo $row->namaPemilik ?>"/>
        </div>
    </div>

     <div class="form-group">
        <label class="col-sm-3 control-label">Ukuran</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="ukuran" value="<?php echo $row->ukuran ?>"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Deskripsi</label>
        <div class="cek col-sm-8">
            <textarea  class="form-control" name="description" /><?php echo $row->deskripsi ?> </textarea>
        </div>
    </div>
     <!-- <div class="form-group">
            <label class="col-sm-3 control-label">Gender</label>
            <label style="color:blue;"><?php echo $row->jenis ?></label>
                <div class="col-sm-5">
                    <div class="radio">
                        <label>
                        <input type="radio" name="gender" value="pria"/> Laki-Laki
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="gender" value="perempuan"/> Perempuan
                        </label>
                    </div>
                </div>
    </div> -->

     <div class="form-group">
        <label class="col-sm-3 control-label">Tersedia</label>
        <div class="cek col-sm-8">
            <input type="text" class="form-control" name="tersedia" value="<?php echo $row->tersedia?>" />
        </div>
    </div>

</div>
<div class="col-6">
<!-- <div class="form-group">
            <label class="col-sm-3 control-label">WIFI</label>
            <label style="color:blue;"><?php if($row->wifi)echo "Tersedia" ;else echo "Tidak ada" ?></label>
                <div class="col-sm-5">
                    <div class="radio">
                        <label>
                        <input type="radio" name="wifi" value="1" /> Tersedia
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="wifi" value="0" /> Tidak Tersedia
                        </label>
                    </div>
                </div>
    </div> -->
    <div class="form-group">
        <label class="col-sm-3 control-label">Barang Dalam</label>
        <div class="cek col-sm-8">
            <textarea  class="form-control" name="barangDalam" /><?php echo $row->barangDalam?> </textarea>
        </div>
    </div>
    <!-- <div class="form-group">
            <label class="col-sm-3 control-label">Kamar Mandi</label>
            <label style="color:blue;"><?php echo $row->kamarMandi ?></label>
                <div class="col-sm-5">
                    <div class="radio">
                        <label>
                        <input type="radio" name="kamarMandi" value="dalam" /> dalam
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="kamarMandi" value="laur" /> luar
                        </label>
                    </div>
                </div>
    </div>
    <div class="form-group">
            <label class="col-sm-3 control-label">AC</label>
            <label style="color:blue;"><?php if($row->ac)echo "Tersedia" ;else echo "Tidak ada" ?></label>
                <div class="col-sm-5">
                    <div class="radio">
                        <label>
                        <input type="radio" name="ac" value="1" /> ada
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="ac" value="0" /> Tidak ada
                        </label>
                    </div>
                </div>
    </div> -->
<div class="form-group">
        <label class="col-sm-3 control-label">harga</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="harga" value="<?php echo $row->harga ?>"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Input Image</label>
        <div class="cek col-sm-5">
            <input type="file"  accept=".jpeg,.jpg,.png" class="form-control-file-border" name="fileimage" select="<?php echo $row->gambar; ?>"/>
        </div>
    </div>

    <div class="form-group">
        <div class="cek  col-sm-5 col-sm-offset-3">
            <button type="submit" class="btn btn-default">Update</button>
        </div>
    </div>
</div> 
</div> 
</form>
<?php
        
        }
?>  
</div>