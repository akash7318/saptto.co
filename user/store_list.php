<?php
include("header.php");
?>
  <!-- Left side column. contains the logo and sidebar -->
  
<?php
include("sidebar.php");
?>


<?php
$sql = "select `bank_status` from `bank` where `jid` = '$mid';";
$result = mysqli_query( $s_dbid, $sql );
list( $bank_status ) = @mysqli_fetch_row( $result );
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Orders
        <small>Store List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Store List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
	<div class=" col-sm-12" style="background: #fff">
        <div class="box-header with-border">
          <h3 class="box-title">Store List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body" style="overflow-x: scroll;">
          
			<table id="datatable" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th style="text-align: center;">S No</th> 
        <th style="text-align: center;">Store Name</th>
        <th style="text-align: center;">Store Code</th>
        <th style="text-align: center;">City</th>
        <th style="text-align: center;">State</th>
        <th style="text-align: center;">Address</th>
        <th style="text-align: center;">Pincode</th>
        <th style="text-align: center;">Landmark</th>
        <th style="text-align: center;">Category</th>
        <th style="text-align: center;"></th>
      </tr>
      </thead>
      <tbody>
      <?php 
                                  $ctr =1;
                                  
                                  $sql  = "SELECT id,name,username,city,state,address,pincode,landmark,category FROM `join_store` where `username`  NOT LIKE 'demo' ";
                                  $result = mysqli_query($s_dbid,$sql);
      
                                  while(list($sid,$name,$user,$city,$state,$address,$pincode,$landmark,$category) = @mysqli_fetch_row($result)){
                                  
                                      
                                  ?>
                                  <tr>
                                      <td align='center'><?=$ctr?></td>
                                      <td align='center'><?=$name?></td>
                                      <td align='center'><?=$user?></td>
                                      <td align='center'><?=$city?></td>
                                      <td align='center'><?=$state?></td>
                                      <td align='center'><?=$address?></td>
                                      <td align='center'><?=$pincode?></td>
                                      <td align='center'><?=$landmark?></td>
                                      <td align='center'><?=$category?></td>
                                      <td align='center'>
                                          <form method="post" action="new_order.php">
                                              <input type="hidden" name="sid" value="<?=$sid?>">
                                              <input type="submit" name="submit" value="New Order"/>
                                          </form>
                                      </td>
                                      </tr>
                                  <?php
                                  $ctr++;
                                      
                                  }
                                                          
                                      ?> 
      
      
      </tbody>
    </table>
			
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2022 Spatto Services.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#datatable').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
