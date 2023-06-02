<?php
if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $result = mysqli_query($con, "INSERT INTO matakuliah(id,kode,nama,sks,semester) 
VALUES('$id','$kode','$nama','$sks','$semester')") or die(mysqli_error($con));
    header("Location:?page=matakuliah-show");
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data Matakuliah</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=matakuliah-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="id" class="control-label">Id</label>
                        <input type="text" class="form-control" name="id" placeholder="Masukan id..." required>
                    </div>
                    <div class="form-group">
                        <label for="kode" class="ontrol-label">Kode</label>
                        <input type="text" class="form-control" name="kode" placeholder="Masukan kode..." required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama..." required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="sks" class="control-label">Sks</label>
                            <input type="text" class="form-control" name="sks" placeholder="Masukan sks..." required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="semester" class="control-label">Semester</label>
                            <input type="number" class="form-control" name="semester" placeholder="Masukan semester..." required>
                        </div>
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>