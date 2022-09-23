<?php
include("header.php");
?>
  <!-- Left side column. contains the logo and sidebar -->
  
<?php
include("sidebar.php");
?>


<?php
$sql = "select `id` from `join` where `username` = '$username';";           
$result = mysqli_query($s_dbid,$sql);
list($jid) = mysqli_fetch_row($result);

$sql = "select * from `join` where `username` = '$username';";           
$result = mysqli_query($s_dbid,$sql);
$data = mysqli_fetch_array($result);

$sql = "select * from bank where `jid` = '$jid'";
$result = mysqli_query($s_dbid,$sql);
$bank = mysqli_fetch_array($result);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>ID Card</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">ID Card</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<form method="post" action="update-profile.php"  id="personalform" enctype="multipart/form-data">	
	<div class=" col-sm-6" style="background: #fff">
        <div class="box-header with-border">
          <h3 class="box-title">ID Card</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
			
              				<style>
    .rotate {

  transform: rotate(-90deg);


  /* Legacy vendor prefixes that you probably don't need... */

  /* Safari */
  -webkit-transform: rotate(-90deg);

  /* Firefox */
  -moz-transform: rotate(-90deg);

  /* IE */
  -ms-transform: rotate(-90deg);

  /* Opera */
  -o-transform: rotate(-90deg);

  /* Internet Explorer */
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

}
</style>
<table width="600" border="1" style="height: 300px">
  <tbody>
    <tr>
        <td width="51" align="center" valign="middle" bgcolor="#0C82B3" style="color: #FFFFFF;"><img src="consumer.jpg" width="47" height="300" alt=""/></td>
      <td width="514">
          <table width="95%" border="0" align="center" style="height: 250px">
        <tbody>
          <tr>
            <td width="60%" rowspan="2" align="right" valign="bottom">
                
                <table   style=" text-align:left; width:100%; height:200px">
                    <tbody>
                    <?php
                    $username = @$_SESSION['username'];
                    $name = @$_SESSION['name'];
                    ?>
                    <tr> <td width="41%"><strong>Code :</strong></td> 
                    <td width="59%"><span id="ctl00_ContentPlaceHolder1_lbluserid"><?=$username?></span></td>   </tr>
                    <tr> <td><strong>Name :</strong></td> 
                    <td><span id="ctl00_ContentPlaceHolder1_lblname"><?=$name?></span></td>   </tr>
                    <tr> <td><strong>Mobile :</strong></td> 
                    <td><span id="ctl00_ContentPlaceHolder1_lblmobile"><?=$phone?></span></td>   </tr>
                    <tr> <td><strong>Email ID :</strong></td> 
                    <td><span id="ctl00_ContentPlaceHolder1_lblemailid"><?=$email?></span></td>   </tr>
                    <tr> <td><strong>Addhaar No. :</strong></td> 
                    <td><span id="ctl00_ContentPlaceHolder1_lblmobile"></span></td>   </tr>
                    <tr> <td><strong>Designation :</strong></td> 
                    <td><span id="ctl00_ContentPlaceHolder1_lblmobile">Consumer</span></td>   </tr>
                    <tr> <td><strong>Code Issue : </strong></td> 
                    <td><span id="ctl00_ContentPlaceHolder1_lbljoindate"><?=$jdate?></span></td>   </tr>
                    
                    
                    </tbody>
                    </table>
                
                </td>
            <td width="40%" align="right" valign="top"><img src="logo-spatto.jpg"></td>
          </tr>
          <tr>
            <td height="30%" align="right"><div style="height:100%; padding-top:50px;">Signature </div></td>
          </tr>
        </tbody>
      </table></td>
      <td width="21" bgcolor="#0C82B2">&nbsp;</td>
    </tr>
  </tbody>
</table>


              				
              
              					
              						
              						
              						
			
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
    
    <div class=" col-sm-1" >
    </div>
    
      
     </form> 
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
</body>
</html>
