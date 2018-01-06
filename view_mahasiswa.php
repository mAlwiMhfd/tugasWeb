<?php
    include_once 'top.php';
    require_once 'db/classmahasiswa.php';
    //panggil file untuk operasi db
    //buat variabel utk menyimpan id
    //buat variabel untuk mengambil id
    $objKegiatan = new mahasiswa();
    $_id = $_GET['id'];
    $data = $objKegiatan->findByID($_id);
    /*
    " (nim,nama,tgl_lahir,jk,prodi_id,thnmasuk,rombel_id) ".
    */
?>
<!--Buat tampilan dengan tabel-->
<div id="portfolio" class="page-section">
      <div class="content-wrapper">
          <div class="inner-container container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-heading">
                <h3 class="panel-title">View Mahasiswa</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                <tr>
                <td class="active">NIM</td><td>:</td><td><?php echo
                $data['nim']?></td>
                </tr>

                <tr>
                <td class="active">Nama</td><td>:</td><td><?php echo
                $data['nama']?></td>
                </tr>

                <tr>
                <td class="active">Tanggal Lahir</td><td>:</td><td><?php echo
                $data['tgl_lahir']?></td>
                </tr>

                <tr>
                <td class="active">Jenis Kelamin</td><td>:</td><td><?php echo
                $data['jk']?></td>
                </tr>

                <tr>
                <td class="active">Prodi ID</td><td>:</td><td><?php echo
                $data['prodi_id']?></td>
                </tr>

                <tr>
                <td class="active">Tahun Masuk</td><td>:</td><td><?php echo
                $data['thnmasuk']?></td>
                </tr>

                <tr>
                <td class="active">Rombel ID</td><td>:</td><td><?php echo
                $data['rombel_id']?></td>
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
