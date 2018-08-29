<?php
/*
Template Name: What we are doing Page
*/
?>

<?php get_header(); ?>
<div class="section" id="what">
    <div class="what-we-are-doing">
        <div class="h1-wrapper">
            <h1>WHAT WE ARE DOING</h1>
        </div>
    </div>
    <?php
    $circles = get_field('what_circles');
    if (!empty($circles)) : ?>
        <div class="experts hidden-xs">
            <?php $curr = 0; foreach($circles as $circle) : $curr++; ?>
                        <div class="quarter-block">
                            <?php if($circle['what_partner_website_url']) : ?>
                            <a href="<?php echo $circle['what_partner_website_url']; ?>" target="_blank" title="<?php echo $circle['what_text_in_cirlcle'];?>">
                            <?php endif; ?>
                                <div class="image">
                                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/circle.svg" />
                                    <div class="bg-text"><?php echo $circle['what_text_in_cirlcle'];?></div>
                                </div>
                            <?php if($circle['what_partner_website_url']) : ?>
                            </a>
                            <?php endif; ?>
                            <div class="text">
                                <div class="title"><?php echo $circle['what_circle_block_title'];?></div>
                                <?php echo $circle['what_circle_block_description'];?>
                            </div>
                        </div>
                <?php if($curr % 3 == 0): ?>
                    <div class="clearfix"></div>
                <?php endif; ?>
            <?php endforeach;?>
            <div class="clearfix"></div>
        </div>
    <?php endif; ?>

    <?php if (!empty($circles)) : ?>
        <div class="experts visible-xs">
            <?php $curr = 0; foreach($circles as $circle) : $curr++; ?>
                        <div class="quarter-block">
                            <?php if($circle['what_partner_website_url']) : ?>
                                <a href="<?php echo $circle['what_partner_website_url']; ?>" target="_blank" title="<?php echo $circle['what_text_in_cirlcle'];?>">
                            <?php endif; ?>
                                <div class="image">
                                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/circle.svg" />
                                    <div class="bg-text"><?php echo $circle['what_text_in_cirlcle'];?></div>
                                </div>
                            <?php if($circle['what_partner_website_url']) : ?>
                            </a>
                            <?php endif; ?>
                            <div class="text">
                                <div class="title"><?php echo $circle['what_circle_block_title'];?></div>
                                <?php echo $circle['what_circle_block_description'];?>
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
