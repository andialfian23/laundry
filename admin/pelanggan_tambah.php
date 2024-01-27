<?php include 'header.php'; ?>

<div class="container">
    <br>
    <br>
    <br>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah pelanggan</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="pelanggan_insert.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama ..">
                    </div>
                    <div class="form-group">
                        <label>Hp</label>
                        <input type="number" class="form-control" name="hp" placeholder="Masukkan no.. ">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat ..">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-warning btn-block" value="simpan">

                </form>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>