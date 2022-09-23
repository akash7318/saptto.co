<?php
include("header.php");
?>
  <!-- Left side column. contains the logo and sidebar -->
  
<?php
include("sidebar.php");
?>


<?php
if(isset($_POST['select_date'])){
$select_date = @$_POST['select_date'];
}
else{
    $select_date = date("m/d/Y")." - ".date("m/d/Y");
}
$len = strrpos(@$select_date," - ");

$date1 = substr(@$select_date,0,$len);
$date2 = substr(@$select_date,$len+3);

$odate1 = substr(@$select_date,0,$len);
$odate2 = substr(@$select_date,$len+3);

$date1 = date('Y-m-d', strtotime($date1));
$date2 = date('Y-m-d', strtotime($date2));
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My Earning
        <small>Monthly Cashback Income</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Monthly Cashback Income</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		 
	<div  style="background: #fff">
        <div class="box-header with-border">
         <h3 class="box-title">Monthly Cashback Income</h3>
        </div>
		
	  
        <div class="box-body">
         
		<table id="datatable" class="table table-striped">
      <thead>
      <tr>
		        <th>#</th>
		        <th>From Date</th>
		        <th>To Date</th>
		        <th>Release Date</th>
		        <!--<th>Income</th>-->
		        <!--<th>TDS</th>-->
		        <!--<th>Admin Charge</th>-->
		        <!--<th>Cashback Amt</th>-->
		        <th>Status</th>
		        
        
      </tr>
      </thead>
      <tbody>
		      <?php
		        $cnt=1;
		        $sql2 = "select sdate,plan from `investment` where `mid` = '$mid'";
		        $result2 = mysqli_query( $s_dbid, $sql2);
		        list($sdate,$plan) = mysqli_fetch_row( $result2);
		        $sd = new DateTime( $sdate ); 
		      	$sday = $sd->format( 'd' );
                $eday = $sday-1;
                
		        $sql = "select `join`.name,`join`.username,`comm`,`level`,`remarks`,`ttime`,`rname` from `join`,inv_transactions where `join`.id = '$mid' and `join`.id = mid and remarks like '%Cashback Income%';";
		        $result = mysqli_query( $s_dbid, $sql );
		        while (list( $namet, $usernamet, $amt, $level, $remarks, $tdate,$rname ) = mysqli_fetch_row( $result )) {
		        	
		        $sql1 = "select name from `join` where username = '$rname'";
		        $result1 = mysqli_query( $s_dbid, $sql1 );
		        list($namer) = mysqli_fetch_row( $result1 );
		        
		        $cdate = date("Y-m-d","2021-11-01");
		        if($tdate>=$cdate && $plan!="voucher"){
		            $damt = $amt - ($amt*5)/100;
		            $tds = ($amt*5)/100;
		            $admin = 0;
		        }
		        else{
		        $damt = $amt - ($amt*10)/100;
		      	$tds = ($amt*5)/100;
		      	$admin = $tds;
		        }
		      	  
		      	
		      	$d = new DateTime( $tdate ); 
		      	$year = $d->format( 'Y' );
		      	$month = $d->format( 'm' );
		      	$smonth = $d->format( 'm' )-1;
                
                $fday = $year."-".$smonth."-".$sday;
		      	$fday = strtotime($fday);
                $fday = date('Y-m-d',$fday);  
		      	
		      	$edate = $year."-".$month."-".$eday;
		      	$edate = strtotime($edate);
                $edate = date('Y-m-d',$edate);  
		        ?>
		       <tr>
		      	<td><?=$cnt?></td>
		      	<td><?=$fday?></td>
		      	<td><?=$edate?></td>
		      	<td><?=$tdate?></td>
		      	<td><?=$amt?></td>
		      	<td><?=$tds?></td>
		      	<td><?=$admin?></td>
		      	<td><?=$damt?></td>
		      	<td><?=$remarks?></td>
		      	
		       </tr>
		      <?php 
		      $cnt++;
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
    <strong>Copyright &copy; 2021 Spatto Services.</strong> All rights
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
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
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
<script src="//cdn.datatables.net/plug-ins/1.10.11/sorting/date-eu.js"></script>
<script>
$(document).ready(function() {
   $('#datatable').DataTable({
	   "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            //debugger;
            var index = iDisplayIndexFull + 1;
            $("td:first", nRow).html(index);
            return nRow;
        }
   })
   
	$('#select_date').daterangepicker()
   
} );

	
</script>

</body>
</html>
