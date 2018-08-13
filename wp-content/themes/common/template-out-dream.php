<?php
/*
Template Name: Our dream Page
*/
?>

<?php get_header(); ?>
<div class="section" id="dream">
    <div class="hidden-xs">
        <div class="dream">
            <div class="h1-wrapper">
                <h1>OUR DREAM</h1>
            </div>
            <span>
                <?php the_field('our_dream'); ?>
            </span>
        </div>
        <div class="reweave">
            <div class="bg-under">
                <img src="<?php echo get_stylesheet_directory_uri()?>/img/lines_page_6.svg" />
            </div>
            <div class="bg-over">
                <img src="<?php echo get_stylesheet_directory_uri()?>/img/logo.svg" />
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="visible-xs">
            <div class="h1-wrapper">
                <h1>OUR DREAM</h1>
            </div>
            <span>
                <?php the_field('our_dream'); ?>
            </span>
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/logo.svg" />
        </div>
    </div>
</div>
<?php get_footer(); ?>
