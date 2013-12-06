<?php get_header(); ?>	

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="content">
		<?php the_content(); ?>
	</section>
<?php endwhile; endif; ?>

    <div class="phone">
        <h3 class="title">Watch the Video</h3>
        <a href="#" class="btn btn-video"></a>
    </div>

<div class="modal">
	<div class="modal-bg"></div>
	<div class="wrapper">
		<a href="" class="close"><span class="close-x x-1"></span><span class="close-x x-2"></span></a>
		<div class="flex-video"><iframe width="853" height="480" src="//www.youtube.com/embed/lL3oY993_kc?rel=0" frameborder="0" allowfullscreen></iframe></div>
	</div>
</div>

<?php get_footer(); ?>
