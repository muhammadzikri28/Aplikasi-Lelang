<?php 
    $id = $_GET['id'];

    $query = "SELECT * FROM admin WHERE id = '$id'";
    $execute = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($execute);
?>

<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="user/act.php?act=update"" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?=$data['id']?>">
                  <label for="nama">Nama User</label>
                  <input type="text" value="<?=$data['nama']?>" name="nama" class="form-control" id="nama" placeholder="Input Nama User" required>
                  
                  <label for="nama">Email</label>
                  <input type="text" value="<?=$data['email']?>" name="email" class="form-control" id="email" placeholder="Input Email" required>

                  <label for="nama">Nomor Hp</label>
                  <input type="text" value="<?=$data['nope']?>" name="nope" class="form-control" id="nope" placeholder="Input Nomor Hp" required>

                  <label for="nama">Alamat</label>
                  <input type="text" value="<?=$data['alamat']?>" name="alamat" class="form-control" id="alamat" placeholder="Input Alamat" required>
                  <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div> 