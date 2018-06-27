<?php include('header.php'); ?>
<?php
  include_once('controller/connect.php');
  
  $dbs = new database();
  $db=$dbs->connection();
  $TotalEmp =mysqli_query($db,"select count(EmployeeId) as emp from employee where RoleId !='1' ");
  $TotalEmploId = mysqli_fetch_assoc($TotalEmp);
  $pandingleave = mysqli_query($db,"select count(LeaveStatus) as pleave from leavedetails where LeaveStatus='Pending'");
  $tpandingleave = mysqli_fetch_assoc($pandingleave);
?>

<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item" title="Home"><a href="index.php">Home</a></li>
</ol>
<!--four-grids here-->
		<div class="four-grids" style="margin-bottom: 30px; margin-top: 10px; background: white; ">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
						<a href="employeeview.php">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Employee</h3>
								<h4><?php echo(isset($TotalEmploId['emp']))?$TotalEmploId['emp']:"";?></h4>
							</div>
						</a>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
						<a href="leaverequest.php">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Leave Request</h3>
								<h4><?php echo(isset($tpandingleave['pleave']))?$tpandingleave['pleave']:"";?></h4>
							</div>
						</a>
						</div>
					</div>
					<!-- <div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Projects</h3>
								<h4>12,430</h4>
								
							</div>
							
						</div>
					</div> -->
					<!-- <div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Old Projects</h3>
								<h4>14,430</h4>
								
							</div>
							
						</div>
					</div> -->
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->


  
<?php include('footer.php'); ?>

