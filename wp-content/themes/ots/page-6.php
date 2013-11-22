<?php get_header(); ?>

<div class="faq-list">
<?php

    $args = array(
		'post_type' => 'faq'
	);
	$faqs = new WP_Query( $args );
	if( $faqs->have_posts() ) {
		while( $faqs->have_posts() ) {
			$faqs->the_post();
			$permalink = get_permalink( $id );
			?>
				<div class="item">
				    <h3 class="question"><a href=""><?php the_title() ?></a></h3>
				    <div class="answer white-block">
				        <?php the_content(); ?>
                        <a href="" class="close"><span class="close-x x-1"></span><span class="close-x x-2"></span></a>
				    </div>
				</div>
			<?php
		}
	}

?>
</div>

<?php if ( is_active_sidebar( 'sidebar-faqs' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-faqs' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
