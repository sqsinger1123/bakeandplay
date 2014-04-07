<?php

$nav = array("Home" => "home");  
$nav["Menu"] = "menu";
$nav["Activities"] = "activities";
$nav["About"]   = "about";
$nav["Contact"] = "contact";

?>

<div class="nav">
	
<?php
foreach($nav as $key => $value) {
	$lowerkey = strtolower($key);
	echo "<a href='#$value' class='menulink $value" . "_link' title='$key: Trebella'>$key</a>";
}

?>
</div> <!-- end div menu -->