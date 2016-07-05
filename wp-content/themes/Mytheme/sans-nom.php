<?php get_header(); ?>
 <?php affTemplate("taxonomy-taxo_produits.php"); ?>
 <div class="main-container">
    <div class="main wrapper clearfix">

            <article>
                    <header>
                        <h1>Eclairage</h1>
                    </header>
                    <section class="clearfix">
                        <h2 id="detail"><?php the_title(); ?></h2>
                        <figure>
                            <img src="<?php echo bloginfo('template_directory'); ?>/produits/lampe1.jpg">
                        </figure>
                        <p><strong>Prix :</strong> 120 €</p>
                        <p><strong>Description :</strong><br>
                            Lampe de bureau de type phare Harley
                        </p>
                    </section>
        </article>
    <?php get_sidebar(); ?>

</div> <!-- #main -->
</div> <!-- #main-container -->
<?php get_footer(); ?>