<?php
include("config.php");
$sql=$conn->prepare("SELECT * FROM messages");
$sql->execute();
while($r=$sql->fetch()){
 if ($r['name'] == $_SESSION['user']) {
  echo '<div class="message-box-holder">
            <div class="message-box">
                '.$r['msg'].'
            </div>
        </div>';
 } else {
  echo '<div class="message-box-holder">
            <div class="message-sender">
                '.$r['name'].'
            </div>
            <div class="message-box message-partner">
                '.$r['msg'].'
            </div>
        </div>';
 }
}
if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 echo "<script>window.location.reload()</script>";
}
?>
