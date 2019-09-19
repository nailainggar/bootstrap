
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>BELI BUKU</title>
</head>
<body>

<?php
if (isset($_POST['simpan'])) {
    $jml_form=$_POST['jml'];
    $nama = $_POST['nama'];
    $alamat =  $_POST['alamat'];
    $jeniskel = $_POST['jk'];
    $tgl_pem = $_POST['tgl']; 
        
?>    
    <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">isi</div>
                        <div class="card-body">
    
    <form action="hidebuku.php" method="post">
   <?php for ($a=1; $a <= $jml_form; $a++) {?>
    <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="jdl[]" class="form-control" required><br><br>
    </div>

    <div class="form-group">
        <label for="">Kode Buku</label>
        <input type="number" min="1" name="kode[]" class="form-control"><br><br>
    </div>
    
    <div class="form-group">
        <label for="">Pengarang</label>
        <input type="text" name="penga[]" class="form-control"><br><br>
    </div>
    
    <div class="form-group">
    <label for="">Jenis Buku</label>
    <select name="jenis[]" class="form-control">
        <option value="">Pilih</option>
        <option value="Fiksi">Fiksi</option>
        <option value="Horor">Horor</option>
        <option value="Petualangan">Petualangan</option>
        <option value="Action">Action</option></select><br><br>
    </div>
    
    <div class="form-group">
    <label for="">Harga Buku</label>
    <input type="number" min="1" name="harga[]" class="form-control">
    </div>
    <br><br>
      

    <?php }
    ?>
    <input type="hidden" name="nama" value="<?php echo $nama ?>">
    <input type="hidden" name="alamat" value="<?php echo $alamat ?>">
    <input type="hidden" name="jk" value="<?php echo $jeniskel ?>">
    <input type="hidden" name="tgl" value="<?php echo $tgl_pem ?>">
    <input type="hidden" name="jml" value="<?php echo $jml_form ?>">
    <input type="submit" name="submit"  value="simpan"
    <hr>
    </form>
    </div>
    </div>
        </div>
            </div>
                </div>
                    </div>


                   <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  
    
        
        
</body>
</html>
    <?php } ?>