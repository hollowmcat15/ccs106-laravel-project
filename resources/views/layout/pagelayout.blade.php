<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> {{ config('app.name') }} </title>
<style>

body {
  font-family: "Gotham", sans-serif;
  transition: background-color 0.5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left 0.5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
  }

  .sidenav a {
    font-size: 18px;
  }
}
</style>
</head>

<body>

<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;
        My School
    </span>
</div>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/">Home</a>
    <a href="/enroll">Enroll</a>
    <a href="/students_display">Students</a>
    <a href="">Profile</a>
    <a href="#">Reports</a>
    <a href="/subjectlist">Subjects</a>
    <a href="/teacher_display">Teachers</a>
    <a href="/aboutus">About Us</a>
    <a href="#">Contact</a>
    <br><br>
    <a href="/login">Log-in</a>
</div>

@yield('content')

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.5)";

  var enrollSysSpan = document.querySelector('#main span');
  enrollSysSpan.style.color = "#fff";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";

  var enrollSysSpan = document.querySelector('#main span');
  enrollSysSpan.style.color = "#000000";
}
</script>

</body>
</html>


