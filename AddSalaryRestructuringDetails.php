<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
    <title>Salary Restucturing</title>
  </head>
  <body class="text-primary">
	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
		<!-- Navbar content -->
		<a class="navbar-brand text-primary" href="#"><span class="fa fa-times-circle"></span> Wipro Digital Operations and Platforms (DO&P)</a>
		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-primary btn-sm" type="submit">Signout</button>
		</form>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 bg-primary">
				<!-- A vertical navbar -->
<nav class="navbar bg-primary navbar-dark">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="Dashboard.php"><span class="fa fa-times-circle"></span> Dashboard</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="AccessManagement.php"><span class="fa fa-times-circle"></span> Access Management</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="SalaryRestructuring.php"><span class="fa fa-times-circle"></span> Salary Restructuring</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="Submitted.php"><span class="fa fa-times-circle"></span> Submitted</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="Cancelled.php"><span class="fa fa-times-circle"></span> Cancelled</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="OnHold.php"><span class="fa fa-times-circle"></span> On Hold</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ESICMinWage.php"><span class="fa fa-times-circle"></span> ESIC/Min Wage</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="LetterGenerated.php"><span class="fa fa-times-circle"></span> Letter Generated</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="LetterReleased.php"><span class="fa fa-times-circle"></span> Letter Released</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="Archive.php"><span class="fa fa-times-circle"></span> Archive</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="PosttoSAP.php"><span class="fa fa-times-circle"></span> Post to SAP</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="AuditTrail.php"><span class="fa fa-times-circle"></span> Audit Trail</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="Reports.php"><span class="fa fa-times-circle"></span> Reports</a>
		</li>
	</ul>
</nav>
			</div>
			<div class="col-md-10"><br>
				<b>Salary Restructuring > Add Salary Restructuring Details</b>
				
				<hr>
				
				<div id="accordion">
					<div class="card">
						<div class="card-header">
							<a class="card-link" data-toggle="collapse" href="#collapseOne">
								<b>Salary restructuring details 1</b> <span class="fa fa-angle-down pull-right"></span>
							</a>
						</div>
						<div id="collapseOne" class="collapse show" data-parent="#accordion">
							<div class="card-body">
								<div class="row">
									<div class="col-md-10">
										<form action="AddSalaryRestructuringDetails.php" method="post">
											<table class="table table-borderless">
												<tbody>
													<tr>
														<td class="text-right align-middle"><b>Employee ID</b></td>
														<td class="text-right align-middle"><input type="text" name="EmployeeID" class="form-control"></td>
														<td><b>Employee Name</b></td>
														<td>Senthil Kumar</td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Program Category</b></td>
														<td class="text-right align-middle">
															<select class="form-control">
																<option>Select</option>
															</select>
														</td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Hike</b></td>
														<td class="text-right align-middle"><input type="text" name="EmployeeID" class="form-control"></td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Employee Group</b></td>
														<td class="text-right align-middle">
															<select class="form-control">
																<option>Select</option>
															</select>
														</td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Employee Sub Group</b></td>
														<td class="text-right align-middle">
															<select class="form-control">
																<option>Select</option>
															</select>
														</td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Sub Type</b></td>
														<td class="text-right align-middle">
															<select class="form-control">
																<option>Select</option>
															</select>
														</td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Effective Date</b></td>
														<td class="text-right align-middle"><input type="date" name="EmployeeID" class="form-control"></td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Reason</b></td>
														<td class="text-right align-middle">
															<select class="form-control">
																<option>Select</option>
															</select>
														</td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Payscale area</b></td>
														<td class="text-right align-middle">
															<select class="form-control">
																<option>Select</option>
															</select>
														</td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Payscale Group</b></td>
														<td class="text-right align-middle">
															<select class="form-control">
																<option>Select</option>
															</select>
														</td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Currency</b></td>
														<td class="text-right align-middle">
															<select class="form-control">
																<option>Select</option>
															</select>
														</td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Designation</b></td>
														<td class="text-right align-middle">
															<select class="form-control">
																<option>Select</option>
															</select>
														</td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Dist. Mail ID</b></td>
														<td class="text-right align-middle"><input type="text" name="EmployeeID" class="form-control"></td>
													</tr>
													<tr>
														<td class="text-right align-middle"><b>Remarks</b></td>
														<td class="text-right align-middle"><input type="text" name="EmployeeID" class="form-control"></td>
													</tr>
												</tbody>
											</table>
											<a href="#">Click here to add another Salary restructuring details</a>
											<div class="text-center">
												<button type="submit" class="btn btn-md btn-outline-primary">Cancel</button>
												<a href="#" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal">Submit</a>
											</div>
										</form>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<!-- The Modal -->
		<div class="modal text-primary" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title"></h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body text-center">
						<span class="far fa-check-circle fa-5x"></span><br>
						<p>Record No '**********' created Successfully.</p>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>
		
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
