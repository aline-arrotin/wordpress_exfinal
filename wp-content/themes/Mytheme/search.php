<?php get_header();?>
<?php affTemplate("search.php"); ?>

<article>
  <h1>Résultats de recherche</h1>

  <?php $search_query = get_search_query(); ?>
  <?php if(have_posts($search_query)):
  while(have_posts($search_query)) : the_post($search_query); ?>
  <section class="clearfix">
    <h2 id="detail"><?php the_title(); ?></h2>
    <figure>
      <img src="produits/lampe1.jpg">
    </figure>
    <p><strong>Prix :</strong> 120 €</p>
    <p><strong>Description :</strong><br>
      Lampe de bureau de type phare Harley
    </p>
  </section>
  <?php get_template_part( 'logo' ); ?>

  <?php get_sidebar();?>
  <?php get_footer(); ?>