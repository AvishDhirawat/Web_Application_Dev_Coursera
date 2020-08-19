<html>
<head>
  <title>Guessing Game for Charles Severance</title>
</head>
<body>
  <h1>Welcome to my Guessing Game</h1>
  <p>
    <?php
    if(! isset ($_GET['guess'])) {
      echo ("Missing guess parameter");
    }
    elseif (strlen ($_GET['guess']) < 1 ) {
      echo ("Your guess is too short");
    }
    elseif (! is_numeric($_GET['guess'])) {
      echo ("Guess is not a number");
    }
    else if ($_GET['guess'] < 42) {
      echo ("Your guess is too low");
    }
    elseif ($_GET['guess'] > 42) {
      echo ("Your guess is too high");
    }
    else {
      echo ("Congratulations - You are right");
    }
       ?>

  </p>
</body>
