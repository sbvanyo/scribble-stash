<?php get_header() ?>

<h1>testin' shit</h1>
<h2>testin' smaller shit</h2>
<h3>testin' even smaller shit</h3>
<h4>keeps gettin' smoler</h4>
<h5>can u read me</h5>
<h6>never gonna give you up</h6>
<p>never gonna let you down</p>

<br>
<hr>
<br>

<?php

while(have_posts()) {
  the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php the_content(); ?>
  <hr>
<?php }

?>

<?php get_footer() ?>
