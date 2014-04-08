<?php

require_once("options.php");
require_once("activity_data.php");
?>

        <div id="activities" class="page">
          <div id="activities_main">
            <div id="activities_description">
             <?php
             	foreach($acts as $k => $act) {
	        		echo $act->output();
	        	}
             ?>
            </div>
          </div>
        </div>