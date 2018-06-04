<div style="height: 550px" class="container">
<form id="enableButtonForm" action="<?php echo web; ?>akun-register/creatLogin" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-3 control-label">Username</label>
        <div class="cek col-sm-5">
            <input type="text" class="form-control" name="username" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Password</label>
        <div class="cek  col-sm-5">
            <input type="password" class="form-control" name="password" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Retype password</label>
        <div class="cek  col-sm-5">
            <input type="password" class="form-control" name="confirmPassword" />
        </div>
    </div>

    <div class="form-group">
        <div class="cek  col-sm-5 col-sm-offset-3">
            <button type="submit" class="btn btn-default">Next</button>
        </div>
    </div>
</form>


</div>