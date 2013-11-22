<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2 class="sub-title"><?php echo get_post_meta( 8, 'sub-title', true ); ?></h2>

<div class="steps cf">

    <div class="connector"></div>
    
    <div class="step step-1">
        <div class="circle"></div>
        <div class="number">1</div>
        <div class="info">
            <p><a href="">Click here</a> to answer some questions about yourself</p>
        </div>
    </div>

    <div class="step step-2">
        <div class="circle"></div>
        <div class="number">2</div>
        <div class="info">
            <p>We'll  notify you of upcoming projects you may qualify for</p>
        </div>
    </div>

    <div class="step step-3">
        <div class="circle"></div>
        <div class="number">3</div>
        <div class="info">
            <p>Download the Over the Shoulder app and get ready show us your world!</p>
        </div>
    </div>

</div><!-- .steps -->

<div class="cta">
    <a href="" class="btn">Sign Me Up</a>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
