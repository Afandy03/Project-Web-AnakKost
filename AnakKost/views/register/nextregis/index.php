<div class="container">
<form id="enableButtonForm" action="<?php echo web; ?>akun-register/creatUser/<?php echo $variabel?>" method="post" class="form-horizontal">   
<div class="form-group">
        <label class="col-sm-3 control-label">Nama</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="nama" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Email</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="email" />
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
        <label class="col-sm-3 control-label">NoTelp</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="number" />
        </div>
    </div>
    <div class="form-group">
        <div class="cek  col-sm-5 col-sm-offset-3">
            <button type="submit" class="btn btn-default">submit</button>
        </div>
    </div>
</form>

</div>