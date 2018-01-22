<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo "PHP assignment by: Arend-Jan (fix PHP syntax errors)";//miste een ';' ?></title>
  </head>

  <body>
      <?php
        $ages = array(10,50,39,40,67,99,7,2,10,88); //miste een ; , "50" had geen nul , was geen array
        $sum = 0;

        function getAverageAge($input) { //miste een $ voor 'input'
            global $sum; //'sum' was global gedeclareerd
          for($i=0; $i<count($input); $i++) { //$i moest '0' inhouden
            $sum += $input[$i];
          }

          return $sum / $i; //moest nog delen door aantal values van het array
        }

        echo getAverageAge($ages);
        //miste het afsluiten van php stukje
        ?>

  </body>
</html>
