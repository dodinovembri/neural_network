<?php include 'module/koneksi.php'; ?>

  <div class="content-wrapper">
   <section class="content">
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <center><h3 class="box-title"><strong>Input Stand</strong></h3></center>
            </div>
           <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="?module=simpan_stand">
                        <div class="form-group"><label class="col-sm-2 control-label">ID Stand</label>
                            <div class="col-sm-10"><input type="text" name="id_stand" class="form-control" placeholder="ID Stand" required><br>
                        </div>
                        </div>                      
                        <div class="form-group"><label class="col-sm-2 control-label">Nama Stand</label>
                          	<div class="col-sm-10"><input type="text" name="stand" class="form-control" placeholder="Nama Stand" required><br><br>
                        	</div>
                        </div>
                        <br><br>                                            
                        <div class="form-group"><label class="col-sm-2 control-label"></label>
                          	 <div class="col-sm-6"><button class="btn btn-primary" type="submit">SIMPAN</button>
                       		 </div>
                       	</div>
                        <div class="col-sm-4 ">                        
                            <br><br>
                        </div>
                      </form>
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


<?php include 'module/templates/footer.php'; ?>