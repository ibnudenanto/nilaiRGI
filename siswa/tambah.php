<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul siswa</h1>
        </div>
        <div class="col-4">
            <a href="?m=siswa&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
        </div>
        <div class="col">
            <form action="?m=siswa&s=simpan" method="post">
                <div class="mb-2">
                    <label for="">NIS</label>
                    <input type="text" name="nis" class="form-control" autofocus>
                </div>
                <div class="mb-2">
                    <label for="">Nama siswa</label>
                    <input type="text" name="siswa" class="form-control" >
                </div>
                <div class="mb-2">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" name="jk">
                </div>
                <div class="mb-2">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="nis" class="form-control" autofocus>
                </div>
                <div class="mb-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" autofocus>
                </div>
                <div class="mb-2">
                    <label for="">Nama Jurusan</label>
                    <input type="number" name="jurusan_id" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="reset" class="btn btn-warning">
                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>