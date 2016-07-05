<?php get_header(); ?>
 <?php affTemplate("taxonomy-taxo_produits.php"); ?>
 <div class="main-container">
    <div class="main wrapper clearfix">

            <article>
                    <header>
                       
                        <h1 id="titre"><?php //$cat = wp_get_object_terms(get_the_ID(),'taxo_produits'); echo $cat[0]->name; ?></h1>
                        <p>description catégorie</p>
                    </header>
                    <section class="clearfix">
                        <h2>sous cat</h2>
                         <?php if(have_posts()) :
                        while(have_posts()) : the_post(); ?>
                        <figure>
                        <?php $image = get_field("image"); //myPrint_r($image); ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
                            <figcaption><?php the_title(); ?></figcaption>
                        </figure>
                    <?php endwhile; endif; ?>
                    </section>
        </article>
    <?php get_sidebar(); ?>

</div> <!-- #main -->
</div> <!-- #main-container -->
<?php get_footer(); ?>