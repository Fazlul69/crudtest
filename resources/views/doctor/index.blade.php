<!DOCTYPE html>
<html>
<head>
	<title>Doctors Information</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="doctorInfo">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-2">
					<div class="card">
						<div class="card-header d-flex justify-content-between align-items-center">
							<h5>Doctors Information</h5>
							<a href="{{route('doctor.create')}}" class="btn btn-primary" >Add new Doctor</a>
						</div>
						<div class="card-body">
							<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">Id</th>
							      <th scope="col">Name</th>
							      <th scope="col">Email</th>
							      <th scope="col">Image</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	@foreach($doctors as $doctor)
							    <tr>							
							      <td>{{$doctor->id}}</td>
							      <td>{{$doctor->name}}</td>
							      <td>{{$doctor->email}}</td>
							      <td>{{$doctor->image}}</td>
							      <td>action</td>
							    </tr>
							    @endforeach
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>