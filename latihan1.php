<?php
session_start();
if (isset($_SESSION['login'])) {
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Latihan 2</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logoutppdb.php">Log-out</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Formulir PPDB SMK ASSALAAM</div>
                        <div class="card-body">
                <!--isi disini-->
                <form action="" method="post">
                <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                     <textarea name="alamat" class="form-control" rows="10">
                </textarea>
                </div>
                <div class="form-group">
                <label for="">Jenis Kelamin</label>
                    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki </label>
                    <input type="radio" name="jk" value="perempuan">Perempuan </label>
                    </div>
                <div class="form-group">
                 <label for="">Asal Sekolah</label>
                    <input type="text" name="asal" class="form-control">
                    </div>
                <div class="form-group">
                 <label for="">Nilai Bahasa Indonesia</label>
                    <input type="number" name="indo" class="form-control">
                    </div>
                <div class="form-group">
                 <label for="">Nilai Matematika</label>
                    <input type="number" name="mtk" class="form-control" >
                    </div>
                <div class="form-group">
                 <label for="">Nilai IPA</label>
                    <input type="number" name="ipa" class="form-control">
                    </div>
                <div class="form-group">
                 <label for="">Nilai Bahasa Inggris</label>
                    <input type="number" name="ingg" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        
                        </div>
                </form>
                    <?php
                    if(isset($_POST['simpan'])) {
                       $nama = $_POST['nama'];
                       $alam = $_POST['alamat'];
                       $jk = $_POST['jk'];
                       $asal = $_POST['asal'];
                       $indo = $_POST['indo'];
                       $mtk = $_POST['mtk'];
                       $ipa = $_POST['ipa'];
                       $ing = $_POST['ingg'];

                       $rata= $indo+$mtk+$ipa+$ing;
                       $hasil = $rata/4;
                       $ket;
                       if($hasil > 65){
                           $ket = "Diterima";
                       } else {
                           $ket = "Tidak Diterima";
                       }

                    
                ?>
                <!--end isi disini-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="row">
    <div class="col-md-12" style="background:yellow">
        <center>
            <h2>Data Formulir<h2>
        </center>
        <div class="table-responsive">
            <table class="table">
             <tr>
                
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Asal Sekolah</th>
                <th>Nilai Bahasa Indonesia</th>
                <th>Nilai Matematika</th>
                <th>Nilai Ipa</th>
                <th>Nilai Inggris</th>
                <th>Rata-Rata</th>
                <th>Keterangan</th>
            </tr>
            <tr>
    
            <td><?php echo $nama; ?></td>
            <td><?php echo $alam; ?></td>
            <td><?php echo $jk; ?></td>
            <td><?php echo $asal; ?></td>
            <td><?php echo $indo; ?></td>
            <td><?php echo $mtk; ?></td>
            <td><?php echo $ipa; ?></td>
            <td><?php echo $ing; ?></td>
            <td><?php echo $hasil; ?></td>
            <td><?php echo $ket; ?></td>

            </tr>
    </table>
                <?php } ?>
</div>
    </div>
        </div>
   


  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    <?php
} else {
    // Redirect(pindah halaman)
    // ke login.php
    
     die("Silahkan Login Terlebih dahulu <a href='pertamalogin.php'>Login</a>");
} ?>


