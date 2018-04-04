<?php

require_once ('connect.php');
$portfolioID = $_POST['portfolioID'];


$query = "SELECT * FROM `portfolio-pics` WHERE portfolioID = ".$portfolioID;


$matrix = getMatrix($query);

$first = true;
$htmlID = "portfolioCarousel".$portfolioID;


echo '<div id="'.$htmlID.'" class="carousel slide" data-ride="carousel">


  <div class="carousel-inner" role="listbox">';
  	
  		foreach($matrix as $row){
  			if ($first){
  				echo '<div class="item active img-responsive center-block"><img src="'.$row["path"].'"></div>';
				$first = false;
  			} else{
  				echo '<div class="item img-responsive center-block"><img src="'.$row["path"].'"></div>';
  			}
  		}
  echo '</div>';

  echo '<a class="left carousel-control" href="#portfolioCarousel'.$portfolioID.'" role="button" data-slide="prev">'; ?>
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
 <? echo '<a class="right carousel-control" href="#portfolioCarousel'.$portfolioID.'" role="button" data-slide="next">'; ?>
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
