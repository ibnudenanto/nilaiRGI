<div class = "content">
<div class = "row">
<a   href  = "?m=siswa&s=tambah" class = "btn btn-secondary btn-large">Tambah siswa</a>
        <h2>Modul Siswa</h2>
        <table class = "table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Nama Jurusan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <?php
               include_once('koneksi.php');
               $sql   = 'SELECT siswa.id, nis, nama, jk, tempat_lahir, tanggal_lahir, nama_jurusan, foto  FROM `siswa` JOIN jurusan ON jurusan.id=siswa.jurusan_id';
               $query = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($query) == 0) {
                echo "<tr><td colspan='5'> Data Kosong</td></tr>";
               } else {
                  /*$siswa = mysqli_fetch_array($query);
                foreach ($siswa as $no => $r){
                    echo "<tr>";
                    echo "<td>" . ($no+1) . "</td>";
                }*/
                $no = 1;
                while ($r=mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>" . $r['nis'] . "</td>";
                echo "<td>" . $r['nama'] . "</td>";
                echo "<td>" . $r['jk'] . "</td>";
                echo "<td>" . date('d F Y', strtotime($r['tanggal_lahir'])) . "</td>";
                echo "<td>" . $r['tempat_lahir'] . "</td>"; 
                echo "<td>" . $r['nama_jurusan'] . "</td>";
                if ($r['foto']=='') {
                    echo "<td align='center'><img src='gambar/ibnu.jpg'height=74></td>";
                }else{
                    echo "<td align='center'><img src='data:image/jpeg;base64," . base64_encode($r['foto']) . "' height=74></td>";
                }
                //echo "<td>" . $r['foto'] . "</td>";
                echo '<td><a href="?m=siswa&s=edit&id='.$r['id'].'"class="btn btn-warning">Edit </a> 
                <a href="?m=siswa&s=hapus&id='.$r['id'].'" onclick="return confirm(\'Menghapus siswa akan menghilangkan SEMUA data siswa yang ada pada siswa tersebut, yakin siswa ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                $no++;
               }
            }
               ?>
            </tbody>
        </table>
    </div>
</div>