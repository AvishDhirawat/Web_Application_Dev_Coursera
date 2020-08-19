<?php
$oldguess = '';
$message = false;

if(isset ($_POST['guess'])) {
  // Trick for integer / numeric parameters
  $oldguess = $_POST['guess'] + 0;
  if( $oldguess == 42 ) {
    $message = "Great Job!";
  }
  else if ($oldguess < 42) {
    $message = "Too Low....";
  }
  else
  {
    $message = "Too High....";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>A Guessing Game</title>
  </head>
  <body style="font-family : sans-serif;">
<p>Guessing Game</p>
<?php
  if($message != false) {
    echo ("<p>$message<p>\n");
  }
 ?>
<form method="post">
  <p><label for="guess"> Input Guess </label>
    <input type="text" name="guess" id="guess" size = "40" value="<? htmlentities($oldguess) ?>"/>
  </p>
  <input type="submit">
</form>
  </body>
</html>
