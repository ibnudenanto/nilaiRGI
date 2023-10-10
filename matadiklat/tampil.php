<div class = "content">
<div class = "row">
<a   href  = "?m=matadiklat&s=tambah" class = "btn btn-secondary btn-large">Tambah matadiklat</a>
        <h2>Modul matadiklat</h2>
        <table class = "table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama matadiklat</th>
                    <th>sks</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <?php
               include_once('koneksi.php');
               $sql   = 'SELECT * FROM matadiklat';
               $query = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($query) == 0) {
                echo "<tr><td colspan='5'> Data Kosong</td></tr>";
               } else {
                  /*$matadiklat = mysqli_fetch_array($query);
                foreach ($matadiklat as $no => $r){
                    echo "<tr>";
                    echo "<td>" . ($no+1) . "</td>";
                }*/
                $no = 1;
                while ($r=mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>" . $r['matadiklat'] . "</td>";
                echo "<td>" . $r['sks'] . "</td>";
                echo '<td><a href="?m=matadiklat&s=edit&id='.$r['id'].'"class="btn btn-warning">Edit </a> 
                <a href="?m=matadiklat&s=hapus&id='.$r['id'].'" onclick="return confirm(\'Menghapus matadiklat akan menghilangkan SEMUA data siswa yang ada pada matadiklat tersebut, yakin matadiklat ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                $no++;
               }
            }
               ?>
            </tbody>
        </table>
    </div>
</div>