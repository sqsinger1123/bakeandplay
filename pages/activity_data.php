<?php

class Activity {
	public $name;
	public $description;
	public function output() {
		return "<div class='activity'><h2 class='activity_title'>$this->name</h2><p class='activity_desc'>$this->description</p></div>";
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
		$ret = "<div class='baking_class'><h3 class='baking_class_title'>$this->name";
		if(Options::display_age) {
			$ret .= " (ages $this->age_min - $this->age_max)";
		}
		if(Options::display_price) {
			$ret .= " Price: \$$this->price";
		}
		$ret .= "</h3><p class='baking_class_desc'>$this->description</p></div>";
		return $ret;
	}
	public function __construct($name='Unnamed Baking Class', $age_min = 1, $age_max = 100, $price = 0,
								$description='Please inquire within; this activity will be lots of fun.') 
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
$desc1 = "Simple recipes using premeasured ingredients which allow 
			  your children to mix and blend together and scoop. Instructor/parents will 
			  handle oven work.";
$desc2 = "Simple to medium recipes. Children will be reading and following 
			  recipes, measuring, blending, and baking with assistance.";
$desc3 = "Medium to difficult recipes. Students will work independently 
			  to follow and prepare recipes with guidance from the instructor.";
$desc4 = "Decorating fun events are limited to 5 children per session. A parent or guardian is 
required to stay for all minor under 13. Most events will last 30-45 min. Events must be 
signed up for in advance. Please ask the store for a monthly event schedule.";
$desc5 = "Free play decorating geared for kids 12 and under; come decorate with various candies, 
frost and decorate cupcakes, cookies, and brownies.<br/>Includes your choice of cupcake, brownie 
or cookie, frosting, and candy decorations.";
$desc6 = "Geared for children 12 and older; learn how to prepare frostings from scratch and 
pipe frosting using pastry tips and bags and basic decorating skills. Events may include specific 
themes.<br/>Includes skill learning and decorated goodies to take home.";
$desc7 = "Toy and Activity Cart: Check out our small toys, games, and activities for sale. Each item 
is priced individually. Items range in price and are all $5 and below.";
$desc8 = "Chalk-board wall, where you are free to color on the wall.<br/>
Coloring station and color one of our bakery comic pages.<br/>
Board and card games always available.";

$baking = new Activity("Baking Classes",$desc);
$b1 = new Baking_Class("Little Mixers",4,7,15,$desc1);
$acts = array($baking,$b1,
			  new Baking_Class("Mini Bakers",8,12,18,$desc2),
			  new Baking_Class("Baking for Teens",13,18,22,$desc3),
			  new Activity("Decorating Fun",$desc4),
			  new Activity("For Play",$desc5),
			  new Activity("For Skill",$desc6),
			  new Activity("A la Carte Activites & Classes",$desc7),
			  new Activity("Free Activities",$desc8)
			  );

?>