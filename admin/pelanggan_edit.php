<?php include 'header.php'; ?>

<div class="container">
    <br>
    <br>
    <br>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit pelanggan</h4>
            </div>
            <div class="panel-body">
                <?php
                    include '../koneksi.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi,"SELECT * from pelanggan where pelanggan_id='$id'      ");
                    $d=mysqli_fetch_array($data);
                ?>

                <form method="post" action="pelanggan_update.php">
                    <div class="form-group">
                        <label>Nama</label>

                        <input type="hidden" name="id" value="<?php echo $d['pelanggan_id']; ?>">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama .."
                            value="<?php echo $d['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Hp</label>
                        <input type="number" class="form-control" name="hp" placeholder="Masukkan no.. "
                            value="<?php echo $d['hp'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat .." value="<?php echo 
        $d['alamat'] ?>">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-warning btn-block" value="simpan">

                </form>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>