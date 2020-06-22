<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>
	</body>
	
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2>Login form</h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>username: </label>
							<input type="text" name="user" class="form-control">
						</div>
						<div class="form-group">
							<label>password: </label>
							<input type="password" name="password" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
				<div class="col-lg-6">
					<h2>Signin form</h2>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label>username: </label>
							<input type="text" name="user" class="form-control">
						</div>
						<div class="form-group">
							<label>password: </label>
							<input type="password" name="password" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">Signin</button>
					</form>
				</div>
			</div>
		</div>
	
	</body>
</html>
