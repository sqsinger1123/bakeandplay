<?php
// Scott/Barb: This document includes owner-defined settings for the site.
// Some global variables for owner's preferences

$display_price = false; // Should the site display class prices? Answer with ("true" or "false") as ("yes" or "no") 	
$display_age = true; // Should the site display class age ranges? Answer with ("true" or "false") as ("yes" or "no")


	class Activity {
		public $name;
		public $description;
		public function output() {
			return "<h2 class='activity_title'>$this->name</h2><p class='activity_desc'>$this->description</p>";
		}
		public function __construct($name='Unnamed Activity',$description='Please inquire within; this activity will be lots of fun.') {
			$this->name = $name;
			$this->description = $description;
		}
	}
	class Baking_Class extends Activity {
		public $price;
		public $age_min;
		public $age_max;
		public function output() {
			$ret = "<h3 class='activity_title'>$this->name";
			if($display_age)
				$ret .= " (ages $age_min - $age_max)";
			if($display_price)
				$ret .= " Price: \$$price";
			$ret .= "</h3><p class='activity_desc'>$this->description</p>";
			return $ret;
		}
		public function __construct($name='Unnamed Baking Class',
									$description='Please inquire within; this activity will be lots of fun.',
									$price = 0,
									$age_min = 1,
									$age_max = 100) 
		{
			$this->name = $name;
			$this->description = $description;
			$this->price = $price;
			$this->age_min = $age_min;
			$this->age_max = $age_max;
		}
	}
	
	$desc = "Baking classes are limited to 5 children per session. A parent 
			or guardian is required to stay for the class for all minor under 13. Most classes will 
			last approximately 45-60 min. All classes must be signed up for in advance. Please ask 
			the store for a monthly event schedule. All goodies baked are yours to take home.";
	$baking = new Activity("Baking Classes",$desc);
	$unnamed = new Activity();
	$b1 = new Baking_Class("Little Mixers",$desc,4,7,15);
	$acts = array($baking,$unnamed,$b1);

	$activities = array(
		"Little Mixers" =>
			array("ages" => "4-7", 
				  "price" => 15,
				  "description" => "Simple recipes using premeasured ingredients which allow 
				  your children to mix and blend together and scoop. Instructor/parents will 
				  handle oven work."
			),
		"Mini Bakers" =>
			array("ages" => "8-12", 
				  "price" => 18,
				  "description" => "Simple to medium recipes. Children will be reading and following 
				  recipes, measuring, blending, and baking with assistance."
			),
		"Baking for Teens" =>
			array("ages" => "13-18", 
				  "price" => 22,
				  "description" => "Medium to difficult recipes. Students will work independently 
				  to follow and prepare recipes with guidance from the instructor."
			)
	);
?>

        <div id="activities" class="page">
          <div id="activities_main">
            <div id="activities_description">
             <?php
             	echo "Activities:<br/>";

             	foreach($acts as $k => $act) {
	        		echo $act->output();
	        	}
             ?>
            </div>
          </div>
        </div>