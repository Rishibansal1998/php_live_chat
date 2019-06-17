<?php include("config.php");?>
<!DOCTYPE html>
<html>
 <head>
  <script src="//code.jquery.com/jquery-latest.js"></script>
  <script src="chat.js"></script>
  <link href="chat.css" rel="stylesheet"/>
  <title>PHP Web Chat</title>
 </head>
 <body>
  <div id="content" style="margin-top:10px;height:100%;">
   <h1>Start Chat</h1>
   <div class="chat">
    <div class="chatbox">
     <?php
     if(isset($_SESSION['user'])){
      include("chatbox.php");
     }else{
      $display_case=true;
      header("location: ./login.php");
     }
     ?>
    </div>
   </div>
  </div>
 </body>
</html>
