<?php include 'header.php'; ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pelanggan</h4>
        </div>
        <div class="panel-body">

            <a href="pelanggan_tambah.php" class="btn btn-sm btn-info full-right">Tambah</a>

            <br />
            <br />


            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Name</th>
                        <th>HP</th>
                        <th>Alamat</th>
                        <th width="15%">OPSI</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include '../koneksi.php';

                    $data = mysqli_query($koneksi,"select * from Pelanggan");
                    $no = 1;
                    
                    while($d=mysqli_fetch_array($data)){ ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['hp']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td>
                            <a href="pelanggan_edit.php?id=<?php echo $d['pelanggan_id'] ?>"
                                class="btn btn-sm btn-info">Edit</a>
                            <a href="pelanggan_hapus.php?id=<?php echo $d['pelanggan_id']; ?>"
                                class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>

                    <?php  } ?>

                </tbody>
            </table>


        </div>
    </div>
</div>

<?php include 'footer.php'; ?>