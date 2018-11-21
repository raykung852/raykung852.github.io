<?php
   // Initialize the session
   session_start();

   // Check if the user is logged in, if not then redirect him to login page
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
       header("location: login.php");
       exit;
   }
   ?>
<!DOCTYPE html>
<html lang="zh">
   <head>
      <meta charset="UTF-8">
      <title>Welcome</title>
      <link href="css/welcome.css" rel="stylesheet">
      <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/earlyaccess/notosanstc.css" rel='stylesheet'>
   </head>
   <body>
      <header>
         <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">再創世紀</span>

             <a class="btn btn-sm btn-outline-warning" href="logout.php">Sign Out</a>

         </nav>
      </header>
      <div class="container">
         <div class="row justify-content-md-center pt-5">
            <div class="page-header text-center">
               <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["userid"]); ?></b>. Welcome to our site.</h1>
            </div>
         </div>
         <div class="row justify-content-md-center pt-5">
            <div class="col-sm-2">
               <img src="test2.jpg" class="rounded-circle img-thumbnail " alt="...">
            </div>
         </div>
         <div class="row justify-content-md-center pt-5">
            <canvas id="myChart" ></canvas>
            <script src="vendor/nnnick/chartjs/samples/utils.js"></script>
            <script src="vendor/nnnick/chartjs/dist/Chart.js"></script>
            <script>
               var presets = window.chartColors;
               var utils = Samples.utils;
               var color = Chart.helpers.color;
               var ctx = document.getElementById('myChart').getContext('2d');
               var myRadarChart = new Chart(ctx, {
                   type: 'radar',

                   data: {
                 labels: ['語言智能', '邏輯數學智能', '音樂智能', '空間智能' ,'人際關係智能','自省智能','身體動覺智能','自然辨識智能'],
                 datasets: [{
                     backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
               		borderColor: presets.red,

                     data: [70, 54, 11, 65, 12, 22, 84, 48 ],
                     pointHoverRadius:10

                 }]
               },
                   options: {
                     maintainAspectRatio: true,
                     legend: {
                 display: false
               } ,scale: {
                     pointLabels: {
                       fontSize: 15
                     },
                     ticks: {
                         beginAtZero: true,
                         max: 100
                     }
               },
               layout: {
                   padding: {
                       left: 00,
                       right: 0,
                       top: 0,
                       bottom: 5
                   }

                   }
                 }
               });
            </script>
         </div>
         <div class="row justify-content-md-center pt-5">
            <div class="col-8">
               <table class="table table-striped">
                  <thead>
                     <tr  class="table-primary">
                        <th  colspan="3">最近30天活動</th>
                     </tr>
                     <tr>
                        <th>總時數</th>
                        <th>能力發展</th>
                        <th>建議發展</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>30</td>
                        <td>xxxx</td>
                        <td>xxxx</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         <div class="row justify-content-md-center pt-5">
            <p>
               <a href="reset-password.php" class="btn btn-danger">Reset Your Password</a>

            </p>
         </div>
      </div>
   </body>
</html>
