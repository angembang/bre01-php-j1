<?php
$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];
/*for($i = 0; $i < count($users); $i++) {
    $user = $users[$i];
        echo $user["firstName"]." ".$user["lastName"]."<br>";
  
};*/
foreach($users as $user) {
     echo "{$user["firstName"]} {$user["lastName"]}<br>";
};
?>