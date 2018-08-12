<?php
/*
Template Name: Who we are Page
*/
?>

<?php get_header(); ?>
<div class="section" id="who">
    <div class="who-we-are">
        <div class="h1-wrapper">
            <h1>WHO WE ARE</h1>
        </div>
        <span>
            <?php the_field('who_we_are'); ?>
        </span>
    </div>
    <div class="group-of-chengemakers">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/lines_page_2.svg" />
        </div>
        <div class="text-wrapper">
            <span class="top"><?php the_field('who_right_text_top');?></span>
            <span class="bottom"><?php the_field('who_right_text_bottom');?></span>
        </div>
        <div class="clearfix"></div>
    </div>
        <?php
        $circles = get_field('who_circles');
        if (!empty($circles)) : ?>
            <div class="experts hidden-xs">
                <?php $curr = 0; foreach($circles as $circle) : $curr++; ?>
                    <div class="quarter-block">
                        <div class="image">
                            <img src="<?php echo get_stylesheet_directory_uri()?>/img/circle.svg" />
                            <?php if($circle['who_text_in_cirlcle']): ?>
                                <div class="bg-over">
                                    <div class="bg-text"><?php echo $circle['who_text_in_cirlcle'];?></div>
                                </div>
                            <?php endif; ?>
                            <?php if($circle['who_bg_image']): ?>
                                <div class="bg-image"><img src="<?php echo $circle['who_bg_image']?>" /></div>
                            <?php endif; ?>
                        </div>
                        <div class="text">
                            <div class="title"><?php echo $circle['who_circle_block_title'];?></div>
                            <?php echo $circle['who_circle_block_description'];?>
                        </div>
                    </div>
                    <?php if($curr % 4 == 0): ?>
                        <div class="clearfix"></div>
                    <?php endif; ?>
                <?php endforeach;?>
            </div>
        <?php endif; ?>
    <?php
    $circles = get_field('who_circles');
    if (!empty($circles)) : ?>
        <div class="experts visible-xs">
            <?php $curr = 0; foreach($circles as $circle) : $curr++; ?>
                <div class="quarter-block">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/img/circle.svg" />
                        <?php if($circle['who_text_in_cirlcle']): ?>
                            <div class="bg-over">
                                <div class="bg-text"><?php echo $circle['who_text_in_cirlcle'];?></div>
                            </div>
                        <?php endif; ?>
                        <?php if($circle['who_bg_image']): ?>
                            <div class="bg-image"><img src="<?php echo $circle['who_bg_image']?>" /></div>
                        <?php endif; ?>
                    </div>
                    <div class="text">
                        <div class="title"><?php echo $circle['who_circle_block_title'];?></div>
                        <?php echo $circle['who_circle_block_description'];?>
                    </div>
                </div>
                <?php if($curr % 2 == 0): ?>
                    <div class="clearfix"></div>
                <?php endif; ?>
            <?php endforeach;?>
        </div>
    <?php endif; ?>
    <div class="lines">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/lines_page_4.svg" />
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<?php get_footer(); ?>
