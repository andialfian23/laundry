<?php include 'header.php'; ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data transaksi</h4>
        </div>
        <div class="panel-body">

            <a href="transaksi_tambah.php" class="btn btn-sm btn-info full-right">Tambah</a>

            <br />
            <br />
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>tgl</th>
                    <th>pelanggan</th>
                    <th>harga</th>
                    <th>berat</th>
                    <th>tgl selesai</th>
                    <th>status</th>
                    <th width="15%">OPSI</th>
                </tr>

                <?php
                    include '../koneksi.php';

                    $data = mysqli_query($koneksi,"select * from transaksi");
                    $no = 1;
                    
                    while($d=mysqli_fetch_array($data)){
                        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['tgl'];?></td>
                    <td><?php echo $d['pelanggan'];?></td>
                    <td><?php echo $d['harga']; ?></td>
                    <td><?php echo $d['berat'];  ?></td>
                    <td><?php echo $d['tgl_selesai'];?></td>
                    <td><?php echo $d['status'];?></td>
                    <td><a href="pelanggan_edit.php?id=<?php echo $d['transaksi_id'] ?>"
                            class="btn btn-sm btn-info">Edit</a>
                        <a href="pelanggan_hapus.php?id=<?php echo $d['transaksi_id']; ?>"
                            class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                    }
                    ?>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>