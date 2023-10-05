<div class = "content">
<div class = "row">
<a   href  = "?m=jurusan&s=tambah" class = "btn btn-secondary btn-large">Tambah Jurusan</a>
        <h2>Modul Jurusan</h2>
        <table class = "table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jurusan</th>
                    <th>Kapasitas</th>
                    <th>Terisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <?php
               include_once('koneksi.php');
               $sql   = 'SELECT * FROM jurusan';
               $query = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($query) == 0) {
                echo "<tr><td colspan='5'> Data Kosong</td></tr>";
               } else {
                  /*$jurusan = mysqli_fetch_array($query);
                foreach ($jurusan as $no => $r){
                    echo "<tr>";
                    echo "<td>" . ($no+1) . "</td>";
                }*/
                $no = 1;
                while ($r=mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>" . $r['nama_jurusan'] . "</td>";
                echo "<td>" . $r['kapasitas'] . "</td>";
                echo "<td>" . $r['terisi'] . "</td>";
                echo '<td><a href="?m=jurusan&s=edit&id='.$r['id'].'"class="btn btn-warning">Edit </a> 
                <a href="?m=jurusan&s=hapus&id='.$r['id'].'" onclick="return confirm(\'Menghapus Jurusan akan menghilangkan SEMUA data siswa yang ada pada jurusan tersebut, yakin jurusan ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                $no++;
               }
            }
               ?>
            </tbody>
        </table>
    </div>
</div>