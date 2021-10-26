<?php

// phpinfo(); permet de consulter la version de php et apache


 $testing = array('Skill' => "php" , 'System' => "Linux", 'Browser' => "Firefox" );


foreach ($testing as $select ) {
  echo $select."<br>";
}

foreach ($testing as $item => $value) {
  echo "$item = $value<br>"; // code...
}


?>
