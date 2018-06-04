<div class="container">
<form id="enableButtonForm" action="<?php echo web; ?>akun-admin/insert" method="post" class="form-horizontal">  
<div class="row">
<div class="col-6">
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Kost</label>
        <div class="cek col-sm-8">
            <input type="text" class="form-control" name="namaKos" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Alamat Kost</label>
        <div class="cek col-sm-8">
            <input type="text" class="form-control" name="alamat" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">NoTelp</label>
        <div class="cek col-sm-8">
            <input type="text" class="form-control" name="number" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Pemilik</label>
        <div class="cek col-sm-8">
            <input type="text" class="form-control" name="nama" />
        </div>
    </div>

     <div class="form-group">
        <label class="col-sm-3 control-label">Ukuran</label>
        <div class="cek col-sm-8">
            <input type="text" class="form-control" name="ukuran" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Deskripsi</label>
        <div class="cek col-sm-8">
            <textarea  class="form-control" name="description" /> </textarea>
        </div>
    </div>

     <div class="form-group">
            <label class="col-sm-3 control-label">Gender</label>
                <div class="col-sm-5">
                    <div class="radio">
                        <label>
                        <input type="radio" name="gender" value="pria" /> Laki-Laki
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="gender" value="wanita" /> Perempuan
                        </label>
                    </div>
                </div>
    </div>

     <div class="form-group">
        <label class="col-sm-3 control-label">Tersedia</label>
        <div class="cek col-sm-8">
            <input type="text" class="form-control" name="tersedia" />
        </div>
    </div>

</div> 
<div class="col-6">
<div class="form-group">
            <label class="col-sm-3 control-label">WIFI</label>
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
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Barang Dalam</label>
        <div class="cek col-sm-8">
            <textarea  class="form-control" name="barangDalam" /> </textarea>
        </div>
    </div>
    <div class="form-group">
            <label class="col-sm-3 control-label">Kamar Mandi</label>
                <div class="col-sm-5">
                    <div class="radio">
                        <label>
                        <input type="radio" name="kamarMandi" value="dalam" /> dalam
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="kamarMandi" value="luar" /> luar
                        </label>
                    </div>
                </div>
    </div>
    <div class="form-group">
            <label class="col-sm-3 control-label">AC</label>
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
    </div>
    
    <div class="form-group">
        <label class="col-sm-3 control-label">harga</label>
        <div class="cek col-sm-8">
            <input type="text" class="form-control" name="harga" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Input Image</label>
        <div class="cek col-sm-5">
            <input type="file" accept=".jpeg,.jpg,.png" class="form-control-file-border" name="fileimage" />
        </div>
    </div>

    <div class="form-group">
        <div class="cek  col-sm-5 col-sm-offset-3">
            <button type="submit" class="btn btn-default">submit</button>
        </div>
    </div>
</div>
</div>
</form>

</div>