<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2 class="sub-title"><?php echo get_post_meta( 8, 'sub-title', true ); ?></h2>

<section class="content  white-block cf">
    <div class="info left">
	    <?php the_content(); ?>
    </div>
	<?php echo do_shortcode( '[contact-form-7 id="26" title="Help Form"]' ); ?>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
