
<div id = "slider_Accueil" class="slideshow-container">

<?php 
global $wpdb;
$results = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."slide_list");

foreach ($results as $slide): 
?>

<div class="mySlides fade">
  <a href="<?= $slide->slide_link;?>">
  <img src="<?= $slide->slide_image; ?>">
  </a>
</div>
<?php endforeach ?>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a> 

</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span>
</div>  


