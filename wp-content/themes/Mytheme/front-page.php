 <?php get_header(); ?>
 <?php affTemplate("front-page.php"); ?>
 <div class="main-container">
    <div class="main wrapper clearfix">


        <article>
            <?php if(have_posts()) :
            while(have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </article>
    <?php endwhile;
    endif; ?>

    <?php get_template_part( 'logo' ); ?>
    <?php get_sidebar(); ?>

</div> <!-- #main -->
</div> <!-- #main-container -->
<?php get_footer(); ?>