<footer>
 <h1><?php get_the_title(); ?></h1>
 
 <?php if(have_posts()) :
 while(have_posts()) : the_post(); ?>
      <?php $image = get_field("logo"); myPrint_r($image); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
<?php endwhile; ?>
<?php endif; ?>
</footer>