<?php
extract($_POST);
if (isset($save)) {
	$query = mysqli_query($conn, "select * from user where email='$email'");

	$dob = $yy . "-" . $mm . "-" . $dd;
	$password = $password;
	$sql = "insert into user (name, email, password, mobile, branch, semester, gender, dob) 
values ( '$name', '$email', '$password', '$mobile', '$branch', '$semester', '$gender','$dob')";
	$err = "<font color='red' size='15px'><h6> Registration Successful!! </h6></font>";

	$r = mysqli_query($conn, $sql);
	if ($r) {
		echo "Successfully inserted";
	} else {
		echo mysqli_error($conn);
	}
}
?>

<div class="container">
	<h2 align="center" style="padding-top:10px">
		<font color="white">Registration Form</font>
	</h2>
	<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-top:20px;margin-bottom:50px">

			<?php echo @$err; ?>






			<tr>
				<td>
					<font color="white">Name:</font>
				</td>
				<Td><input type="text" name="name" class="form-control" required></td>
			</tr>
			<tr>
				<td>
					<font color="white">Email:</font>
				</td>
				<Td><input type="email" name="email" class="form-control" required></td>
			</tr>

			<tr>
				<td>
					<font color="white">Password:</font>
				</td>
				<Td><input type="password" name="password" class="form-control" required></td>
			</tr>

			<tr>
				<td>
					<font color="white">Mobile:</font>
				</td>
				<Td><input type="text" name="mobile" class="form-control" required></td>
			</tr>

			<tr>
				<td>
					<font color="white">Branch:</font>
				</td>
				<Td><select name="branch" class="form-control" required>

						<option>Computer Science and Engineering</option>
						<option>Information Technology</option>
						<option>Chemical Engineering</option>
						<option>Mechanical engineering</option>
						<option>Electronics and Communication Engineering</option>
						<option>Material Science and Metallurgical Engineering</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>
					<font color="white">Select Your Semester</font>
				</td>
				<td><select name="semester" class="form-control" required>

						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>
					<font color="white">Select Your Gender</font>
				</td>
				<td>
					<font color="white">Male: </font><input type="radio" name="gender" value="m" />
					<font color="white">Female:</font> <input type="radio" name="gender" value="f" />
				</td>
			</tr>


			<tr>
				<td>
					<font color="white">Enter Your DOB</font>
				</td>
				<Td>
					<select style="width:150px;float:left" name="yy" class="form-control" required>
						<option value="">Year</option>
						<?php
						for ($i = 1990; $i <= 2020; $i++) {
							echo "<option>" . $i . "</option>";
						}
						?>

					</select>

					<select style="width:150px;float:left" name="mm" class="form-control" required>
						<option value="">Month</option>
						<?php
						for ($i = 1; $i <= 12; $i++) {
							echo "<option>" . $i . "</option>";
						}
						?>

					</select>


					<select style="width:150px;float:left" name="dd" class="form-control" required>
						<option value="">Date</option>
						<?php
						for ($i = 1; $i <= 31; $i++) {
							echo "<option>" . $i . "</option>";
						}
						?>

					</select>

				</td>
			</tr>

			<tr>


				<td colspan="2" align="center">
					<input type="submit" value="Save" class="btn btn-success" name="save" />
					<input type="reset" value="Reset" class="btn btn-danger" />

				</td>
			</tr>
		</table>
	</form>
</div>