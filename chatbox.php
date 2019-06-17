<?php
include("config.php");
?>
<h2>Chat Messages</h2>
<a style="right: 20px;top: 20px;position: absolute;cursor: pointer;" class="logout_button" href="logout.php">Log Out</a>
<div class='msgs'>
    <?php include("msgs.php"); ?>
</div>
<form id="msg_form">
    <input name="msg" size="30" type="text" style="height: 30px; width: 78%;"/>
    <button class="send_button">Send</button>
</form>