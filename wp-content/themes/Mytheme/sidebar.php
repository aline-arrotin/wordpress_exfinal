<?php if(is_front_page()) :
	$args = array(
		"category_name" => "News",
		"showposts" => 1);


	$myNews = new WP_Query($args);
	if($myNews -> have_posts()) : ?>
	<aside>
		<?php while($myNews -> have_posts()) : $myNews -> the_post(); ?>
			<!-- 			<?php //print_r($post); ?> -->
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</aside>
<?php endif; ?>

<?php

else:
	echo "<aside>";
	$args = array(
		'taxonomy' => 'taxo_produits',
		'hierarchical' => 0,
		'parent' => 0,
		'hide_empty' => 0);
$terms = get_terms($args); //myPrint_r($terms);
foreach($terms as $term) :
	$args2 = array(
		'taxonomy' => 'taxo_produits',
		'hierarchical' => 0,
		'parent' => $term->term_id,
		'hide_empty' => 0,
		'order' => 'desc');
echo $term->name;
$ss_terms = get_terms($args2); //my_Print_r($args2);
foreach($ss_terms as $ss_term) :
	$link = get_term_link($ss_term);?>
	<li><a href="<?php echo $link;?>"><?php echo $ss_term->name;?></a></li>
	<?php endforeach;
endforeach;
echo "</aside>";
endif;
	?>