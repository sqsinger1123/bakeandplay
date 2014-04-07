<?php header("Content-type: text/css"); ?>

<?php
	// Theme colors
	$highlight_color = "#A00";

	
?>

/****************************************************************************
 * Trebella and Samuel Q Singer present:
 * styles.php
 *
 * Inspired by the article on PHP for dynamic stylesheets:
 *   	http://www.barelyfitz.com/projects/csscolor/
 *
 *
 * Dynamic global stylesheet by Sam Singer, for use on his website and others.
 * This is a CSS stylesheet generated with PHP code.
 * The developer may routinely "re-compile" the stylesheet, as it were. 
 ***************************************************************************/


/* ----------------------------------------------------- RESET, GLOBALS, CUSTOMS, & Misc. */
* {
  -o-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
body,
html {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: "Asap", "Optima" Helvetica, Arial, Verdana, sans-serif;
  font-size: 18px;
  font-weight: 300;
  color: #333333;
}
a,
a:visited {
  text-decoration: none;
  color: #333333;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}
::selection {
  background: #C84;
  color: #FFF;
}
a:hover {
  text-decoration:none;
}
a.orange-hover:hover {
  color:orange;
}
img.grayedout,
a.grayedout img {
  filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
  /* Firefox 10+ */

  filter: gray;
  -webkit-filter: grayscale(100%);
  -webkit-backface-visibility: hidden;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  opacity: 0.9;
}
img.grayedout:hover,
a.grayedout:hover img {
  filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
  -webkit-filter: grayscale(0%);
  opacity: 1;
}

/* Image half-grayscaling 
*  from http://jsfiddle.net/KDtAX/487/
*
***************************************/
img.grayscale {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+ */
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */
    -webkit-transition: all .6s ease; /* Fade to color for Chrome and Safari */
    -webkit-backface-visibility: hidden; /* Fix for transition flickering */
}

img.grayscale:hover {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
    -webkit-filter: grayscale(0%);
}

svg {
    background:url(http://4.bp.blogspot.com/-IzPWLqY4gJ0/T01CPzNb1KI/AAAAAAAACgA/_8uyj68QhFE/s400/a2cf7051-5952-4b39-aca3-4481976cb242.jpg);
}

svg image {
    transition: all .6s ease;
}

svg image:hover {
    opacity: 0;
}

div.half-grayscale-container {
    background: url(http://4.bp.blogspot.com/-IzPWLqY4gJ0/T01CPzNb1KI/AAAAAAAACgA/_8uyj68QhFE/s1600/a2cf7051-5952-4b39-aca3-4481976cb242.jpg) no-repeat; /* IE6-9 */
}

img.half-grayscale {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'saturate\' values=\'0.5\'/></filter></svg>#grayscale"); /* Firefox 10+ */
    filter: gray alpha(opacity=50); /* IE6-9 */
    -webkit-filter: grayscale(50%); /* Chrome 19+ & Safari 6+ */
    -webkit-transition: all .6s ease; /* Fade to color for Chrome and Safari */
    -webkit-backface-visibility: hidden; /* Fix for transition flickering */
}

img.half-grayscale:hover {
    filter: none;
    -webkit-filter: grayscale(0%);
}


/* For sticky header, adapted from http://jsfiddle.net/WDnyb/2/ */

.header {
    background-color: rgba(230,230,230,.5);
    width: 100%;
    position: fixed;
    top: 0;
    bottom: auto;
}
.outer {
    background-color: #fff;
    position: relative;
    z-index:200;
}


.outer .header {
    position: absolute;
    bottom: 0;
    z-index: 2;
    top: auto;
}
.content {
    color: blue;
    background-color: #fff;
    margin-top: 300px;
}





/* from http://jsfiddle.net/KDtAX/487/ 
*
*
*
*
*
*
***************************************/
img.grayscale {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+ */
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */
    -webkit-transition: all .6s ease; /* Fade to color for Chrome and Safari */
    -webkit-backface-visibility: hidden; /* Fix for transition flickering */
}

img.grayscale:hover {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
    -webkit-filter: grayscale(0%);
}

svg {
    background:url(http://4.bp.blogspot.com/-IzPWLqY4gJ0/T01CPzNb1KI/AAAAAAAACgA/_8uyj68QhFE/s400/a2cf7051-5952-4b39-aca3-4481976cb242.jpg);
}

svg image {
    transition: all .6s ease;
}

svg image:hover {
    opacity: 0;
}

div.half-grayscale-container {
    background: url(http://4.bp.blogspot.com/-IzPWLqY4gJ0/T01CPzNb1KI/AAAAAAAACgA/_8uyj68QhFE/s1600/a2cf7051-5952-4b39-aca3-4481976cb242.jpg) no-repeat; /* IE6-9 */
}

img.half-grayscale {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'saturate\' values=\'0.5\'/></filter></svg>#grayscale"); /* Firefox 10+ */
    filter: gray alpha(opacity=50); /* IE6-9 */
    -webkit-filter: grayscale(50%); /* Chrome 19+ & Safari 6+ */
    -webkit-transition: all .6s ease; /* Fade to color for Chrome and Safari */
    -webkit-backface-visibility: hidden; /* Fix for transition flickering */
}

img.half-grayscale:hover {
    filter: none;
    -webkit-filter: grayscale(0%);
}


/* Custom Master classes */

/* Margin and Padding Master Classes... */
<?php
	$types = array("m"=>"margin", "p"=>"padding");
	
	// Outputs pattern: .m0 {margin:0px} \n .m5 {margin:5px;} etc.
	foreach($types as $k => $v) {
		for($i=0; $i<=100; $i+=5) {
			echo ".{$k}$i { {$v}:{$i}px; }\n";
		}
		echo "\n";
	}
?>

/* Height and Width Master % Classes... */
<?php
	$types = array("w"=>"width", "h"=>"height", "maxw" => "max-width", "minw" => "min-width", );
	
	foreach($types as $k => $v) {
		for($i=0; $i<=100; $i+=5) {
			echo ".{$k}$i% { {$v}:{$i}%; }\n";
		}
		echo "\n";
	}
?>



