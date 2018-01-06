<?php
    include_once 'top.php';
    require_once 'db/class_bimbingan.php';
    //panggil file untuk operasi db
    //buat variabel utk menyimpan id
    //buat variabel untuk mengambil id
    $objKegiatan = new bimbingan_akademik();
    $_id = $_GET['id'];
    $data = $objKegiatan->findByID($_id);
    /*
    +----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+
    | id | tanggal    | bimbingan_presensi                 | bimbingan_keuangan | bimbingan_akademik          | kategori_id | semester | nim       |
    +----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+

    */
?>
<!--Buat tampilan dengan tabel-->
<div id="portfolio" class="page-section">
      <div class="content-wrapper">
          <div class="inner-container container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-heading">
<!--<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">-->
                <h3 class="panel-title">View Bimbingan Akademik</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                <tr>
                <td class="active">ID</td><td>:</td><td><?php echo
                $data['id']?></td>
                </tr>

                <tr>
                <td class="active">Tanggal</td><td>:</td><td><?php echo
                $data['tanggal']?></td>
                </tr>

                <tr>
                <td class="active">Bimbingan Presensi</td><td>:</td><td><?php echo
                $data['bimbingan_presensi']?></td>
                </tr>

                <tr>
                <td class="active">Bimbingan Keuangan</td><td>:</td><td><?php echo
                $data['bimbingan_keuangan']?></td>
                </tr>

                <tr>
                <td class="active">Bimbingan Akademik</td><td>:</td><td><?php echo
                $data['bimbingan_akademik']?></td>
                </tr>

                <tr>
                <td class="active">Kategori ID</td><td>:</td><td><?php echo
                $data['kategori_id']?></td>
                </tr>

                <tr>
                <td class="active">Semester</td><td>:</td><td><?php echo
                $data['semester']?></td>
                </tr>

                <tr>
                <td class="active">NIM</td><td>:</td><td><?php echo
                $data['nim']?></td>
                </tr>

                <tr
                </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
    include_once 'bottom.php';
?>
