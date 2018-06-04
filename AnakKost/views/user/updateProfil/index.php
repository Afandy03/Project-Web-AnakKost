<div class="container" style="height:580px;">
<?php
        if($variabel!=false){
            $variabel->execute();
            $row=$variabel->fetch()
        ?>
<form id="enableButtonForm" action="<?php echo web; ?>akun-user/update/<?php echo $row->Username ?>" method="post" class="form-horizontal">
    <!-- <div class="form-group">
        <label class="col-sm-3 control-label">Username</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="username" value="<?php echo $row->Username ?>" />
        </div>
    </div> -->
    <div class="form-group">
        <label class="col-sm-3 control-label">Password</label>
        <div class="cek  col-sm-5">
            <input type="password" class="form-control" name="password" value="<?php echo $row->Password ?>"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Retype password</label>
        <div class="cek  col-sm-5">
            <input type="password" class="form-control" name="confirmPassword" value="<?php echo $row->Password?>" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Nama</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="nama" value="<?php echo $row->nama ?>"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Email</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="email" value="<?php echo $row->email ?>"/>
        </div>
    </div>
    <!-- <div class="form-group">
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
                    </div> -->
    <div class="form-group">
        <label class="col-sm-3 control-label">NoTelp</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="number" value="<?php echo $row->noTelp ?>"/>
        </div>
    </div>
     <div class="form-group">
        <div class="cek  col-sm-5 col-sm-offset-3">
            <button type="submit" class="btn btn-default">Update</button>
        </div>
    </div>
</form>
<?php
            }
        ?>
</div>