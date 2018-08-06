<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>
<div class="section" id="home">
    <div class="lines">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/mainpagelines.svg" />
            <div class="who-text">
                <span><?php the_field('main_text'); ?></span>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
