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
    <title>ESIC/Min Wage</title>
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
				<?php include('leftNavbar.php'); ?>
			</div>
			<div class="col-md-10"><br>
				<b>ESIC/Min Wage</b>
				<div class="pull-right" style="float:right;">
					<a href="#" class="btn btn-primary">Cancel</a>
					<a href="#" class="btn btn-primary">Download</a>
					<a href="#" class="btn btn-outline-primary">Filter</a>
				</div>
				<table class="table table-responsive table-borderless text-center" style="font-size:10px;">
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
								<th class="align-middle">Status</th>
								<th class="align-middle">Created By</th>
								<th class="align-middle">Modified By</th>
								<th class="align-middle">Modified Date</th>
								<th class="align-middle">Edit Salary Details</th>
								<th class="align-middle">Edit</th>
								<th class="align-middle">Submit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="align-middle"><input type="checkbox" class="form-control"><b><a href="ESICMinWageSalaryDetails.php">370571</a></b></td>
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
								<td class="align-middle">PASS</td>
								<td class="align-middle">SE370571</td>
								<td class="align-middle">SE370545</td>
								<td class="align-middle">12-Jan-2018</td>
								<td class="align-middle"><a class="btn btn-xs" href="#"><span class="fa fa-edit"></span></a></td>
								<td class="align-middle"><a class="btn btn-xs" href="#"><span class="fa fa-edit"></span></a></td>
								<td class="align-middle"><a class="btn btn-xs" href="#"><span class="fa fa-check"></span></a></td>
							</tr>
							<tr>
								<td class="align-middle"><input type="checkbox" class="form-control"><b><a href="ESICMinWageSalaryDetails.php">370571</a></b></td>
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
								<td class="align-middle">PASS</td>
								<td class="align-middle">SE370571</td>
								<td class="align-middle">SE370545</td>
								<td class="align-middle">12-Jan-2018</td>
								<td class="align-middle"><a class="btn btn-xs" href="#"><span class="fa fa-edit"></span></a></td>
								<td class="align-middle"><a class="btn btn-xs" href="#"><span class="fa fa-edit"></span></a></td>
								<td class="align-middle"><a class="btn btn-xs" href="#"><span class="fa fa-check"></span></a></td>
							</tr>
						</tbody>
					</table>
				<hr>
				<div class="pull-right" style="float:right;"><a href="#" class="btn btn-outline-primary">Load More...</a></div>
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