<body>
<Header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo web; ?>home">Anak Kost</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo web; ?>home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo web.controlAkun; ?>_user">Login user</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="<?php echo web.controlAkun; ?>_admin">Login admin</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo web; ?>akun-register">Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo web; ?>blog">Tentang Kami</a>
            </li>


          </ul>
          <!-- <form action="" class="form-inline">
        <input type="text" class="form-control mr-sm-2" placeholder="search">
        <button class="btn btn-success" type="submit">search</button>
    </form> -->
        </div>
      </div>
    </nav>
</Header>