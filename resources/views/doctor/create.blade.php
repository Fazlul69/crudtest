<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="doctorInfo">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-4">
					<div class="card">
						<div class="card-header d-flex justify-content-between align-items-center">
							<h5>Create Doctors</h5>
							<a href="{{route('doctor.index')}}" class="btn btn-primary" >BAck To Doctor List</a>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-8">
									@if(Session::has('success'))
									<div class="alert alert-success">{{Session::get('success')}}</div>
									@endif
									<form action="{{route('doctor.store')}}" method="post">
										@csrf
										<div class="form-group">
											<label for="">Name</label>
											<input type="text" name="name" class="form-control" placeholder="Enter Doctor Name">
										</div>
										<div class="form-group">
											<label for="">Email</label>
											<input type="text" name="email" class="form-control"placeholder="Enter Doctor Email">
										</div>
										<div class="form-group">
											<label for="">Upload Profile Picture</label>
											<input type="file" name="image" id="fileToUpload">
										</div>
										<div class="form-group">
											<button class="btn btn-success" type="submit">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>