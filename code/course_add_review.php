<?php 
  include 'resources/bslinks.php';
  $a = "select * from courses order by course_code";
  $b = "select * from review_course order by review_id ASC";

  $row = null;
  $conn = new mysqli('localhost','root','','wikipingdia');
  if ($conn->connect_error) die($conn->connect_error);
  
  $class = $conn->query($a);
  $review = $conn->query($b);
  if ($_GET['tid']) {
    $courseidq = "select * from courses order by course_code WHERE course_code = " . $_GET['cid'];
    $class = $conn->query($teacheridq);
    $row = $class->fetch_assoc();
  }
  include 'reviewModel.php';
  
?>


<!DOCTYPE HTML>
<!--
   Editorial by HTML5 UP
   html5up.net | @ajlkn
   Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
   -->
<!-- jQuery library -->
<html>
<head>
<title>Write a Review</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--[if lte IE 9]>
<link rel="stylesheet" href="assets/css/ie9.css" />
<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" href="assets/css/ie8.css" />
<![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
   $('.message a').click(function(){
      $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
   });

   function dark() {
    if (document.body.style.backgroundColor == 'rgb(255, 255, 255)') {

            document.body.style.backgroundColor = '#333';
            document.getElementById("logo").style.filter = "invert(100%)";
    }
    else {
            document.body.style.backgroundColor = 'rgb(255, 255, 255)';
            document.getElementById("logo").style.filter = "invert(0%)";

    }
}
    const button = document.querySelector('.btn')
    const form   = document.querySelector('.form')

    button.addEventListener('click', function() {
       form.classList.add('form--no') 
    });
</script>

</head>
   <body style="background-color: rgb(255, 255, 255)">
      <!-- Wrapper -->
      <div id="wrapper">
         <!-- Main -->
         <div id="main">
            <p>&ensp;</p>
            <a href=index.html>
            <img src = "https://i.imgur.com/RBrDeDY.png" class="center" id="logo"></a>
            <div class="inner">
               <!-- Header -->
               <header id="header">
                <a href="https://ischool.umd.edu/about-ischool" class="logo" align='center'>About InfoSci</a>
                  <a href="classinfo.html" class="logo" align='center'>Class Information</a>
                  <a href="teacher_review.html" class="logo" align='center'>Teacher Reviews</a>
                  <a href="https://ischool.umd.edu/internship-career-resources" class="logo" align='center'>Career Opportunities</a>
                  <a href="Prerequisites.html" class="logo" align='center'>Prerequisites</a>
                  <a href="index.html" class="logo" align='center'>Help/FAQ</a>
                     <ul class="icons" align='center'>
                     <li><a href="https://twitter.com/infosciumd?lang=en" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                     <li><a href="https://twitter.com/infosciumd?lang=en" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                     <li><a href="https://twitter.com/infosciumd?lang=en" class="icon fa-instagram"><span class="label" >Instagram</span></a></li>
                  </ul>
                  &ensp;&ensp;
                     <form method="post" action="#">
                     <input type="text" name="query" id="query" placeholder="Search" /></form>
               </header>
               <!-- Banner -->
               <section id="banner" style="padding: 2em 0 0em 0 ;">
                    <div style=" margin:0 auto;">
                        <h1></h1>
                        <h1 style="color:black;">Write a Review: </h1>
                              <form action="savecourseReview.php" method="post" class="form-horizontal">
                              <input type="hidden" name="review_id" value="<?=$row['review_id']?>" id="review_id">

                              

                              <div class="form-group">
                                <label for="teachername" class="control-label col-sm-3">Select A Class</label>
                                <div class="col-sm-5">
                                <?=dropdown('course_code', $class, $row['course_name'])?>
                                <datalist id ="course_code">
                                  <option value="<?=$row['course_code']?>">
                                </datalist>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="num_stars" class="control-label col-sm-3">Number of stars  </label>
                                <div class="col-sm-5">
                                  <input type="Number" onchange="validText(this.value, this.name)" name="num_stars" placeholder="(From 1 to 5)" value="<?=$row['num_stars']?>" class="form-control" id="num_stars" required="required">
                                  <span class="small text-warning" id="titleerr"></span>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="review_text" class="control-label col-sm-3">Review Text...</label>
                                <div class="col-sm-5">
                                  <input type="text" onchange="validText(this.value, this.name)" name="review_text" placeholder="Review Body" value="<?=$row['review_text']?>" class="form-control" id="review_text" required="required">
                                  <span class="small text-warning" id="titleerr"></span>
                                </div>
                              </div>

                              <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-info pull-left">
                              </div>


                            </form> 
                    </div>
                                     
               </section>

               <!-- Section -->               
               <section>
              
               </section>

            </div>
         </div>
         <!-- Sidebar -->
         <div id="sidebar">
            <div class="inner">
               <!-- logo -->
               <section>
                  <img src = "ischool_logo.png" width="260">
               </section>

               <!-- Login -->
               <section>
                  &ensp;&ensp;
                  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                  &ensp;
                  <button onclick="dark()" style="width:auto;">Night Mode</button>
                  <div id="id01" class="modal">
                    
                    <form class="modal-content animate" action="/action_page.php">
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="https://kooledge.com/assets/default_medium_avatar-57d58da4fc778fbd688dcbc4cbc47e14ac79839a9801187e42a796cbd6569847.png" alt="Avatar" class="avatar" >
                      </div>

                      <div class="container" style="width:50%;>
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                          
                        <button type="submit">Login</button>
                      </div>

                      <div class="container" style="background-color:#f1f1f1 width:50%;">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <a href="login.html">No Account? Create an Account</a></span>
                      </div>
                    </form>
                  </div>

                  <script>
                  // Get the modal
                  var modal = document.getElementById('id01');

                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }
                  </script>
               </section>

               </section>
               <!-- Menu -->
               <nav id="menu">
                  <header class="major">
                     <h2>Trending Links</h2>
                  </header>
                  <ul>
                     <li><a href="teacher_review.html">Dr. Strange</a></li>
                     <li><a href="https://ischool.umd.edu/calendar">2017 - 2018 Calendar</a></li>
                     <li><a href="https://ischool.umd.edu/calendar.html">Events</a></li>
                     <li>
                        <span class="opener">Prerequisites</span>
                        <ul>
                           <li><a href="https://app.testudo.umd.edu/soc/search?courseId=MATH115&sectionId=&termId=201808&_openSectionsOnly=on&creditCompare=&credits=&courseLevelFilter=ALL&instructor=&_facetoface=on&_blended=on&_online=on&courseStartCompare=&courseStartHour=&courseStartMin=&courseStartAM=&courseEndHour=&courseEndMin=&courseEndAM=&teachingCenter=ALL&_classDay1=on&_classDay2=on&_classDay3=on&_classDay4=on&_classDay5=on">MATH 115</a></li>
                           <li><a href="https://app.testudo.umd.edu/soc/search?courseId=INST201&sectionId=&termId=201808&_openSectionsOnly=on&creditCompare=&credits=&courseLevelFilter=ALL&instructor=&_facetoface=on&_blended=on&_online=on&courseStartCompare=&courseStartHour=&courseStartMin=&courseStartAM=&courseEndHour=&courseEndMin=&courseEndAM=&teachingCenter=ALL&_classDay1=on&_classDay2=on&_classDay3=on&_classDay4=on&_classDay5=on">INST 201</a></li>
                           <li><a href="https://app.testudo.umd.edu/soc/search?courseId=STAT100&sectionId=&termId=201808&_openSectionsOnly=on&creditCompare=&credits=&courseLevelFilter=ALL&instructor=&_facetoface=on&_blended=on&_online=on&courseStartCompare=&courseStartHour=&courseStartMin=&courseStartAM=&courseEndHour=&courseEndMin=&courseEndAM=&teachingCenter=ALL&_classDay1=on&_classDay2=on&_classDay3=on&_classDay4=on&_classDay5=on">STAT 100</a></li>
                           <li><a href="https://app.testudo.umd.edu/soc/search?courseId=INST326&sectionId=&termId=201808&_openSectionsOnly=on&creditCompare=&credits=&courseLevelFilter=ALL&instructor=&_facetoface=on&_blended=on&_online=on&courseStartCompare=&courseStartHour=&courseStartMin=&courseStartAM=&courseEndHour=&courseEndMin=&courseEndAM=&teachingCenter=ALL&_classDay1=on&_classDay2=on&_classDay3=on&_classDay4=on&_classDay5=on">INST 326</a></li>
                        </ul>
                     </li>
                     <li><a href="https://ischool.umd.edu/internship-career-resources">Intership Fair</a></li>
                     <li><a href="#">Academic Policies</a></li>
                     <li><a href="#">Contribute to Wiki</a></li>
                     <li><a href="#">Advising</a></li>
                     <li><a href="#">INST 490</a></li>
                  </ul>
               </nav>
               <!-- Footer -->
               <footer id="footer">
                  <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
               </footer>
            </div>
         </div>
      </div>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>
   </body>
</html>












