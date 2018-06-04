<body>
<Header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="navbar-brand" href="<?php echo web; ?>home">Anak Kost</a>
        <a class="navbar-brand" href="#"><?php echo $_SESSION['username'] ?></a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo web; ?>home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo web; ?>akun-admin_order">Transaksi
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo web; ?>akun-admin_wishlist">Wishlist
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo web; ?>akun-admin_user">Daftar User
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo web; ?>akun-admin_kost">Daftar Kost
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
          <div class="d-flex justify-content-end collapse navbar-collapse" >
    
        </div>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo web.controlAkun; ?>_user/logout" >Logout( <?php echo $_SESSION['username'] ?> )</a>
        </li>
        </ul>
        </div>
      </div>
    </nav>
</Header>