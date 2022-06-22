<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/basic.css">
</head>
<body>

<!-- Side Navigation -->
<div class="w3-sidebar w3-bar-block w3-blue-grey w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">My profile</a>
  <a href="subjects.php" class="w3-bar-item w3-button">courses</a>
  <a href="tutors.php" class="w3-bar-item w3-button">tutors</a>
  <a href="#" class="w3-bar-item w3-button">subscription</a>
  <a href="mytutor.php" class="w3-bar-item w3-button">Logout</a>
</div>

<header class="w3-container w3-theme w3-padding" id="myHeader">
<button class="w3-button w3-light-blue w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-center">
  <h4> SCHOOL OPPORTUNITIES</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">WELCOME TO MY TUTOR</h1>
  </div>
</header>



<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>One on One Lessons</h3><br>
  <i class="fa fa-group w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p> A tailored one-on-one tutor to suit</p>
  <p> your lear from the convenience of</p>
  <p> your home or location of your choosing.</p>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Flexible Schedule</h3><br>
  <i class="fa fa-calendar w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Tutoring takes place on your schedule.</p>
  <p>You choose the tutoring schedule </p>
  <p>that works best for your family.</p>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Love Learning</h3><br>
  <i class="fa fa-heart w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
   
  <p>Tutoring with My Tutor will raise</p>
  <p>your child's confidence in the classroom</p>
  <p> and instill a love for learning.</p>
  </div>
</div>
</div>
<div class="w3-container">
<hr>
<div class="w3-center">
  <h2>Available Classes</h2>
</div>
<div class="w3-row">
  <div class="w3-col w3-container m2 w3-red"><p>English Language</p></div>
  <div class="w3-col w3-container m2 w3-blue"><p>Physic</p></div>
  <div class="w3-col w3-container m2 w3-blue-grey"><p>Mobile Programming</p></div>
  <div class="w3-col w3-container m2 w3-teal"><p>Web Engineering</p></div>
  <div class="w3-col w3-container m2 w3-yellow"><p>Mathmatic</p></div>
  <div class="w3-col w3-container m2 w3-orange"><p>Quran</p></div>
</div>
<hr>
<h2 class="w3-center">Progress Bars</h2>
<div class="w3-container">
<div class="w3-light-gray">
  <div id="myBar" class="w3-center w3-padding w3-theme" style="width:5%">5%</div>
</div><br>
</div>
<hr>
<footer>
		<p>
        <p> copyright halHasmad©</p>
		</p>
	</footer>
  <script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>