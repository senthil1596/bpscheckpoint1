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
		<li class="nav-item active">
			<a class="nav-link" href="SalaryRestructuring.php"><span class="fa fa-times-circle"></span> Salary Restructuring</a>
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
				<b>Salary Restructuring</b>
				<div class="pull-right" style="float:right;"><a href="AddSalaryRestructuringDetails.php" class="btn btn-primary btn-sm">Add salary restructuring details</a></div>
				<hr>
				<div class="pull-right" style="float:right;"><input type="submit" value="Filter" class="btn btn-outline-primary btn-md"></div>
					<table class="table table-borderless text-center" style="font-size:10px;">
						<thead>
							<tr>
								<th class="align-middle">Employee ID</th>
								<th class="align-middle">Employee Name</th>
								<th class="align-middle">Program Category</th>
								<th class="align-middle">Hike</th>
								<th class="align-middle">Employee Group</th>
								<th class="align-middle">Employee Sub Group</th>
								<th class="align-middle">Sub Type</th>
								<th class="align-middle">Effective Date</th>
								<th class="align-middle">Reason</th>
								<th class="align-middle">Payscale Group</th>
								<th class="align-middle">Currency</th>
								<th class="align-middle">Remarks</th>
								<th class="align-middle">Designation</th>
								<th class="align-middle">Dist. Mail ID</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="align-middle">370571</td>
								<td class="align-middle">Senthil Kumar</td>
								<td class="align-middle">Sample Program</td>
								<td class="align-middle">10%</td>
								<td class="align-middle">Wase</td>
								<td class="align-middle">C Section</td>
								<td class="align-middle">Type</td>
								<td class="align-middle">12/10/2018</td>
								<td class="align-middle">Well Performed!</td>
								<td class="align-middle">Group 2</td>
								<td class="align-middle">INR</td>
								<td class="align-middle">NA</td>
								<td class="align-middle">Student Computer Application</td>
								<td class="align-middle">senthil.kumar65@wipro.com</td>
							</tr>
						</tbody>
					</table>
					<hr style="border-color:blue;">
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
