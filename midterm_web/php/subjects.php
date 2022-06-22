<?php

  include_once("dbconnect.php");
  if (isset($_GET['submit'])) {
    $operation = $_GET['submit'];
    if ($operation == 'search') {
    $search = $_GET['search'];
    $option = $_GET['option'];
    if ($option == "Select") {
      $sqlsubj = "SELECT * FROM tbl_subjects WHERE subject_name LIKE '%$search%'";
    } else {
      $sqlsubj  = "SELECT * FROM tbl_subjects WHERE study_plan = '$option'";

    }
  } 
} else{
  $sqlsubj  = "SELECT * FROM tbl_subjects";
}

  $results_per_page = 10; 
if (isset($_GET['pageno'])) { 
 $pageno = (int)$_GET['pageno']; 
 $page_first_result = ($pageno - 1) * $results_per_page; 
} else { 
 $pageno = 1; 
 $page_first_result = 0; 
} 

$stmt = $conn->prepare($sqlsubj); 
$stmt->execute(); 
$number_of_result = $stmt->rowCount(); 
$number_of_page = ceil($number_of_result / $results_per_page); 
$sqlsubj = $sqlsubj . " LIMIT $page_first_result , $results_per_page"; 
$stmt =$conn->prepare($sqlsubj) ;
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
$rows = $stmt->fetchAll(); 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/subjects.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  position: center;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #70B5DF;
  color: white;
  transform: rotateY(180deg);
}
p{
  font-size: 12px;
  color: white;
  margin: 3px;
  font-weight: bolder
}
h4{
  margin: 7px;
  font-weight: bolder
}
</style>
</head>
<body>

<!-- Side Navigation -->
<div class="w3-sidebar w3-bar-block w3-blue-grey w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">My profile</a>
  <a href="#" class="w3-bar-item w3-button">courses</a>
  <a href="tutors.php" class="w3-bar-item w3-button">tutors</a>

  <a href="#" class="w3-bar-item w3-button">subscription</a>
  <a href="login.php" class="w3-bar-item w3-button">Logout</a>
</div>

<header class="w3-container w3-theme w3-padding" id="myHeader">
<button class="w3-button w3-light-blue w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-center">
  <h4> SCHOOL OPPORTUNITIES</h4>
  <h4 class="w3-xxxlarge w3-animate-bottom">WELCOME TO MY TUTOR</h4>
  </div>
</header>


<div class="w3-center w3-padding">
  
  <h2>Available Classes</h2>

</div>

<div class="w3-card w3-container w3-padding w3-margin w3-round">
        <h3>Search Your Subject</h3>
        <form>
            <div class="w3-row">
                <div class="w3-half" style="padding-right:4px">
                <p><input class="w3-input w3-block w3-round w3-border" type="search" name="search" placeholder="Type here to search" /></p>
                </div>
                <div class="w3-half" style="padding-right:4px">
                    <p> <select class="w3-input w3-block w3-round w3-border" name="option">
                            <option value="Select" selected>Study Plan</option>
                            <option value="10 weeks">10 weeks</option>
                            <option value="12 weeks">12 weeks</option>
                            <option value="14 weeks">14 weeks</option>
                            <option value="22 weeks">22 weeks</option>
                            <option value="32 weeks">32 weeks</option>
                           
                        </select>
                    </p>
                    
                </div>
            </div>
            <button class="w3-button button button2 w3-round w3-right" type="submit" name="submit" value="search">search</button>
        </form>
        </div>





<div class="w3-margin">
<div class="w3-grid-template">
<?php
  $i = 0;
  foreach ($rows as $subjects) {
    $i++;
    $subjid = $subjects['subject_id'];
    $subjname = $subjects['subject_name'];
    $subjdescription = $subjects['subject_description'];
    $subjprice = $subjects['subject_price']; 
    $tutorid = $subjects['tutor_id'];
    $subjsessions = $subjects['subject_sessions'];
    $subjrating = $subjects['subject_rating'];
    $studyplan = $subjects['study_plan'];


    echo "<div class='flip-card w3-margin'>";
    echo "<div class='flip-card-inner'>";
    echo" <div class='flip-card-front' <h4>$subjname</h4>";
    echo "<img src=../assets/courses/$subjid.png" .
         " style='width:300px;height:300px;'>
         
      </div>";
      echo "<div class='flip-card-back '>
        <h4>$subjname</h4>
        <p>Descriction:$subjdescription </p>
        <p>Price: RM:$subjprice </p><p>Study plan: $studyplan </p><p>Session: $subjsessions </p>
        <p>Rating: $subjrating </p>
        
      </div>
    </div>
  </div>";
  
    
}
?>
</div>
<br>

<?php
 $num = 1; 
 if ($pageno == 1) { 
 $num = 1; 
 } else if ($pageno == 2) { 
 $num = ($num) + 10; 
 } else { 
 $num = $pageno * 10 - 9; 
 } 
 echo "<div class='w3-container w3-row w3-padding-32'>"; 
 echo "<center>"; 
 for ($page = 1; $page <= $number_of_page; $page++) { 
 echo '<a href = "subjects.php?pageno=' . $page . '" style= 
 "text-decoration: none">&nbsp&nbsp' . $page . ' </a>'; 
 } 
 echo " ( " . $pageno . " )"; 
 echo "</center>"; 
 echo "</div>"; 
?>
<footer>
		<p>
        <p> copyright halHasmad©</p>
		</p>
	</footer>
  <script type="text/javascript" src="../js/js.js"></script>
</body>
</html>