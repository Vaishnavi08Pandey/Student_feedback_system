<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, "fb");
if (!$conn) {
  die(mysqli_connect_error());
}

$q=mysqli_query($conn,"select * from feedback");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<font color='blue' size='5px'><center><center>No any records found ! </center></font>";
}
else
{
?>

<form method="post" style="margin-top: 80px">
            <div style="color: red "><?php

              echo @$err;

                ?>
            <div class="content" >
                <div class="container-fluid">
                    <div class="row panel panel-default" style="width: 1500px">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title" style="color:orange">Feedback</h4>
                                </div>
                                <div class="content">

                                        <div class="row">

                                          <table class="table table-bordered">

                                          	<thead >

                                          	<tr class="success">
                                          		<th>Sr.No</th>
                                                <th>Student_id</th>
                                          		<th>Relevance or usefulness of the topics covered in the course</th>
                                          		<th>Regularity of the class</th>
                                          		<th>Pace of delivery of content</th>
                                          		<th>Enthusiasm and preparedness in teaching the subject</th>
                                          		<th>Clarity of presentation or teaching techniques</th>
                                          		<th>Stimulation of interest in the subject</th>
                                          		<th>Consistency of the question paper (coverage and balance)</th>
                                          		<th>Workload of this course in comparison with other courses</th>
                                          		<th>Your effort in studying the course</th>
                                          		<th>What I liked about the course</th>
                                          		<th>Why I disliked about the course</th>
                                          		</tr>
                                          		</thead>

                                          		<?php
                                          		$i=1;
                                          	while($row=mysqli_fetch_array($q))
                                          		{
													echo "<tr>";
                                          			echo "<td>".$i."</td>";
                                          			echo "<td>".$row[1]."</td>";
                                          			echo "<td>".$row[2]."</td>";
                                          			echo "<td>".$row[3]."</td>";
                                          			echo "<td>".$row[4]."</td>";
                                          			echo "<td>".$row[5]."</td>";
                                          			echo "<td>".$row[6]."</td>";
                                          			echo "<td>".$row[7]."</td>";
                                          			echo "<td>".$row[8]."</td>";
                                          			echo "<td>".$row[9]."</td>";
                                          			echo "<td>".$row[10]."</td>";
                                          			echo "<td>".$row[11]."</td>";
													echo "<td>".$row[12]."</td>";
													echo "</tr>";
												  $i++;
												 
                                          		}
                                          		?>



                                          </table>

                                        </div>

                            </div>
                        </div>
                      </div>

                </div>
            </div>
          </div>

        </form>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>


</html>

<?php } ?>