<?php
extract($_POST);
if (isset($sub)) {
  $user = $_SESSION['user'];

  $sql = mysqli_query($conn, "select * from feedback where student_id='$user'");
  $r = mysqli_num_rows($sql);
  if ($r == TRUE) {
    echo "<h5 style='color:Red'>You already given feedback to this faculty</h5>";
  } else {
    $query = "insert into feedback
values (NULL,'$user','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11')";

    mysqli_query($conn, $query);
    echo "<h5 style='color:black'>Thank you</h5>";
  }
}


?>


<form method="post">
  <fieldset>
    <center><u>Student's FeedBack Form</u></center><br>
  </fieldset>

  <div class="container">
    <div class="jumbotron;" style="background-color:#bfff80;">
      <div class="container" style="background-size:cover;
  width:100%;">
        <div>
          <center>
            <div>

              <h5>Please put your honest declaration to assess the delivery of the course through your response to each of the following questions.</h5>
              <button type="button" style="font-size:7pt;color:white;background-color:#1a3300;border:2px solid #002e5c57 ;padding:3px">Strongly Agree 5</button>
              <button type="button" style="font-size:7pt;color:white;background-color:Black;border:2px solid #002e5c57;padding:3px">Agree 4</button>
              <button type="button" style="font-size:7pt;color:white;background-color:#1a3300;border:2px solid #002e5c57;padding:3px">Neutral 3</button>
              <button type="button" style="font-size:7pt;color:white;background-color:Black;border:2px solid #002e5c57;padding:3px"> Disagree 2</button>
              <button type="button" style="font-size:7pt;color:white;background-color:#1a3300;border:2px solid #002e5c57;padding:3px">Strongly Disagree 1</button><br>
            </div>




            <br>


            <h3>QUESTION</h3>
            <table class="table table-bordered">
              <tr>
                <td><b>1:</b> Relevance / usefulness of the topics covered in the course</td>
                <td><input type="radio" name="quest1" value="5" required> 5
                  <input type="radio" name="quest1" value="4">4
                  <input type="radio" name="quest1" value="3"> 3
                  <input type="radio" name=" quest1" value="2">2
                  <input type="radio" name="quest1" value="1">1</td>
              </tr>

              <tr>
                <td><b>2:</b>Regularity of the class</td>
                <td><input type="radio" name="quest2" value="5" required>5
                  <input type="radio" name="quest2" value="4">4
                  <input type="radio" name="quest2" value="3">3
                  <input type="radio" name=" quest2" value="2">2
                  <input type="radio" name="quest2" value="1">1</td>
              </tr>

              <tr>
                <td>
                  <b>3:</b>Pace of delivery of content</td>
                <td>
                  <input type="radio" name="quest3" value="5" required> 5
                  <input type="radio" name="quest3" value="4">4
                  <input type="radio" name="quest3" value="3"> 3
                  <input type="radio" name="quest3" value="2">2
                  <input type="radio" name="quest3" value="1">1</td>
              </tr>


              <tr>
                <td>
                  <b>4:</b>Enthusiasm and preparedness in teaching the subject</td>
                <td>
                  <input type="radio" name="quest4" value="5" required> 5
                  <input type="radio" name="quest4" value="4">4
                  <input type="radio" name="quest4" value="3"> 3
                  <input type="radio" name="quest4" value="2">2
                  <input type="radio" name="quest4" value="1">1</td>
              </tr>

              <tr>
                <td>
                  <b>5:</b>Clarity of presentation / teaching techniques</td>
                <td>
                  <input type="radio" name="quest5" value="5" required> 5
                  <input type="radio" name="quest5" value="4">4
                  <input type="radio" name="quest5" value="3"> 3
                  <input type="radio" name="quest5" value="2">2
                  <input type="radio" name="quest5" value="1">1</td>
              </tr>

              <tr>
                <td>
                  <b>6:</b>Stimulation of interest in the subject</td>
                <td>
                  <input type="radio" name="quest6" value="5" required> 5
                  <input type="radio" name="quest6" value="4">4
                  <input type="radio" name="quest6" value="3"> 3
                  <input type="radio" name="quest6" value="2">2
                  <input type="radio" name="quest6" value="1">1</td>
              </tr>

              <tr>
                <td>
                  <b>7:</b>Consistency of the question paper (coverage and balance)</td>
                <td>
                  <input type="radio" name="quest7" value="5" required> 5
                  <input type="radio" name="quest7" value="4">4
                  <input type="radio" name="quest7" value="3"> 3
                  <input type="radio" name="quest7" value="2">2
                  <input type="radio" name="quest7" value="1">1</td>
              </tr>

            </table>



            <h3>Self Assessment of Students</h3>
            <table class="table table-bordered">
              <tr>
                <td><b>8:</b> Workload of this course in comparison with other courses</td>
                <td>
                  <input type="radio" name="quest8" value="5" required> 5
                  <input type="radio" name="quest8" value="4">4
                  <input type="radio" name="quest8" value="3"> 3
                  <input type="radio" name="quest8" value="2">2
                  <input type="radio" name="quest8" value="1">1</td>
              </tr>
              <tr>
                <td><b>9:</b>Your effort in studying the course</td>
                <Td>
                  <input type="radio" name="quest9" value="5" required> 5
                  <input type="radio" name="quest9" value="4">4
                  <input type="radio" name="quest9" value="3"> 3
                  <input type="radio" name="quest9" value="2">2
                  <input type="radio" name="quest9" value="1">1</td>
              </tr>
            </table>

            <b>10:</b>What I liked about the course:<br><br>
            <center>
              <textarea name="quest10" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center><br><br>
            <b>11:</b>Why I disliked about the course:<br><br>
            <center>
              <textarea name="quest11" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center>

            <p align="center"><button type="submit" style="font-size:10pt;color:white;background-color:#1a3300;border:1px solid white;padding:4px" name="sub">Submit</button></p>


</form>