<div style="height: 600px" class="p-5 d-flex flex-column mb-4 align-items-center contents">
<span class="navbar-toggler-icon">Admin </span>
<form class="w-50" action="<?php echo web.controlAkun; ?>_admin/autentifikasi/admin" method="post">
<div class="form-group">
    <label for="uname1">Username:</label>
    <input type="text" class="form-control " name="username" id="uname1" required="">
</div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password" required="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>