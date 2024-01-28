<?php include 'header.php'; ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Filter Laporan</h4>
        </div>
        <div class="panel-body">
            <form action="laporan.php" method="get">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Dari Tanggal</th>
                        <th>Sampai Tanggal</th>
                        <th width="1%"></th>
                    </tr>
                    <tr>
                        <td>
                            <br />
                            <input type="date" name="tgl_dari" class="form-control">
                        </td>
                        <td>
                            <br />
                            <input type="date" name="tgl_sampai" class="form-control">
                            <br />
                        </td>
                        <td>
                            <br />
                            <input type="submit" class="btn btn-primary" value="Filter">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <br />
    <?php
        if(isset($_GET['tgl_dari']) && isset($_GET['tgl_sampai'])){
        $dari = $_GET['tgl_dari'];
        $sampai = $_GET['tgl_sampai'];
        ?>
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Laporan Laundry dari <b><?= $dari; ?></b> sampai <b><?= $sampai; ?></b></h4>
        </div>
        <div class="panel-body">
            <a target="_blank" href="cetak_print.php?dari=<?php
echo $dari; ?>&sampai=<?= $sampai; ?>" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-print"></i>
                CETAK</a>
            <a target="_blank" href="cetak_pdf.php?dari=<?php
echo $dari; ?>&sampai=<?= $sampai; ?>" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-print"></i>
                CETAK PDF</a>
            <br />
            <br />
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Berat (Kg)</th>
                    <th>Tgl. Selesai</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
                <?php
                    // koneksi database
                    include '../koneksi.php';
                    // mengambil data pelanggan dari database
                    $data = mysqli_query($koneksi,"SELECT t.*, nama 
                        FROM transaksi as t
                        LEFT JOIN pelanggan as p ON t.pelanggan_id = p.pelanggan_id 
                        and date(tgl) > '$dari' 
                        and date(tgl) < '$sampai' 
                        order by transaksi_id desc");
                    $no = 1;
                    // mengubah data ke array dan menampilkannya dengan perulangan while
                    while($d=mysqli_fetch_array($data)){
                    ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td>INVOICE-<?=$d['transaksi_id']; ?></td>
                    <td><?= $d['tgl'];?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['berat']; ?></td>
                    <td><?= $d['tgl_selesai']; ?></td>
                    <td><?= "Rp. ".number_format($d['harga']) ." ,-"; ?></td>
                    <td>
                        <?php
                            if($d['status']=="0"){
                            echo "<div class='label label-warning'>PROSES</div>";
                            }else
                            if($d['status']=="1"){
                            echo "<div class='label label-info'>DICUCI</div>";
                            }else
                            if($d['status']=="2"){
                            echo "<div class='label label-success'>SELESAI</div>";
                            }   
                        ?>
                    </td>
                </tr>
                <?php
}
?>
            </table>
        </div>
    </div>
    <?php } ?>
</div>
<?php include 'footer.php'; ?>