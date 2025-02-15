<?php
/**
* @file form.php
* Display form to edit existing entry or add a new one
* uses alpaca http://alpacajs.org
*/

// check of user is logged in
session_start();
$param = "";
if(!($_SESSION['login'] === true)){

  if(isset($_GET['sourceId'])){
    $param = "?sourceId=".$_GET['sourceId'];
  }
  header('Location: login.php'.$param); //redirect to login page
}

require_once("includes/header_alpaca.php");
?>

<!-- sceleton for the form -->
<form action="db/set-data.php" method="post">
    <div class="container">
        <div id="form"></div> <!-- alpace will fill in the form in this div -->
        <a href="javascript:history.back()">Cancel</a>
        <input type="submit" value="Save">
    </div>
</form>

<script type="text/javascript" src="js/form.js"></script>

<?php
  require_once("includes/footer.php");
?>
