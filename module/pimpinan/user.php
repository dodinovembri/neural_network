<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>

  <div class="content-wrapper">
   <section class="content">
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
           <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <a href="?module=add_user"><button type="button" class="btn btn-primary">Tambahkan Data User</button></a>
                 <?php
                        $conn = mysqli_connect("localhost","root","","nadia");
                        $sqlSelect = "SELECT * FROM user";
                        $result = mysqli_query($conn, $sqlSelect);                                  
                    ?>
                            
                      <div class="panel-body table-responsive">
                       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Password</th>
                                    <th>Hak Akses</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        $no = 0;
                        while ($row = mysqli_fetch_array($result)) {
                          $no++;
                    ?>                                              
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php  echo $row['username']; ?></td>
                                <td><?php  echo $row['nama']; ?></td>
                                <td><?php  echo $row['jabatan']; ?></td>
                                <td><?php  echo $row['password']; ?></td>
                                <td><?php  echo $row['role']; ?></td>

                                <td>
                                	<a href="?module=update_user&username=<?php echo $row['username']; ?>"><button type="button" class="btn btn-warning">Update</button></a>
                                	<a href="?module=hapus_user&username=<?php echo $row['username']; ?>"><button class="btn btn-danger" onclick="return konfirmasi()">Delete</button></a>
                                </td>
                            </tr>
                    <?php
                        }
                    ?>
                            </tbody>
                        </table>
                      </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>      
      <!-- /.row -->
    </section>
  </div>

<footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">Nadia</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>

<script src="assets/adminlte/dist/js/adminlte.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootswatch.js"></script>

<!-- tabel -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
 $('#example').dataTable( {
        "language": {
            "url": "assets/css/datatables/Indonesian.json"
        }
    } );
} );
</script> 

</html>