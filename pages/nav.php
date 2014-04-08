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
	echo "<a href='#$value' class='menulink $value" . "_link' title='$key: Bake and Play'>$key</a>";
}

?>
	<div id="navlogo">
		<img src="img/logo_and_text_scaled.png" alt="Bake and Play" />
		<span id="phone">484-461-7529<br/>3721 Garrett Rd Drexel Hill, PA 19026</span>
	</div>
</div> <!-- end div menu -->