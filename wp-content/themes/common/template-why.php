<?php
/*
Template Name: Why is this needed Page
*/
?>

<?php get_header(); ?>
<div class="section" id="why">
    <div class="h1-wrapper">
        <h1>WHY IS THIS NEEDED</h1>
    </div>

    <div class="with-mobile visible-xs">
        <div class="lines">
            <div class="image-wrapper">
                <img src="<?php echo get_stylesheet_directory_uri()?>/img/mainpagelines.svg" />
                <div class="who-text">
                    <span><?php the_field('why_top_text'); ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="with hidden-xs">
        <div class="half-block">
            <span><?php the_field('why_top_text'); ?></span>
        </div>
        <div class="half-block hidden-xs">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/lines_page_5.svg" />
        </div>
        <div class="clearfix"></div>
    </div>

    <?php
    $ei_whys = get_field('whys_ei');
    if (!empty($ei_whys)) : ?>
    <div class="hidden-xs">
        <div class="h1-wrapper">
            <h1>ENVIRONMENTAL ISSUES</h1>
        </div>
        <div class="experts">
            <?php $curr = 0; foreach($ei_whys as $why) : $curr++; ?>
                <div class="tetra-block">
                    <div class="wrapper">
                        <div class="image">
                            <?php if($why['why_ei_bg_image']): ?>
                                <img src="<?php echo $why['why_ei_bg_image']?>" />
                            <?php endif; ?>
                        </div>
                        <div class="text">
                            <div class="title"><?php echo $why['why_ei_text_title'];?></div>
                            <?php echo $why['why_ei_text']; ?>
                        </div>
                    </div>
                </div>
                <?php if($curr % 5 == 0): ?>
                    <div class="clearfix"></div>
                <?php endif; ?>
            <?php endforeach;?>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php endif; ?>

    <?php if (!empty($ei_whys)) : ?>
    <div class="visible-xs">
        <div class="h1-wrapper">
            <h1>ENVIRONMENTAL ISSUES</h1>
        </div>
        <div class="experts">
            <?php $curr = 0; foreach($ei_whys as $why) : $curr++; ?>
                <div class="tetra-block">
                    <div class="wrapper">
                        <div class="image">
                            <?php if($why['why_ei_bg_image']): ?>
                                <img src="<?php echo $why['why_ei_bg_image']?>" />
                            <?php endif; ?>
                        </div>
                        <div class="text">
                            <div class="title"><?php echo $why['why_ei_text_title'];?></div>
                        </div>
                    </div>
                </div>
                <?php if($curr % 2 == 0): ?>
                    <div class="clearfix"></div>
                <?php endif; ?>
            <?php endforeach;?>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php endif; ?>
    <?php
    $si_whys = get_field('whys_si');
    if (!empty($si_whys)) : ?>
    <div class="hidden-xs">
        <div class="h1-wrapper">
            <h1>SOCIAL ISSUES</h1>
        </div>
        <div class="experts">
            <?php $curr = 0; foreach($si_whys as $why) : $curr++; ?>
                <div class="tetra-block">
                    <div class="wrapper">
                        <div class="image">
                            <?php if($why['why_si_bg_image']): ?>
                                <img src="<?php echo $why['why_si_bg_image']?>" />
                            <?php endif; ?>
                        </div>
                        <div class="text">
                            <div class="title"><?php echo $why['why_si_text_title'];?></div>
                            <?php echo $why['why_si_text']; ?>
                        </div>
                    </div>
                </div>
                <?php if($curr % 5 == 0): ?>
                    <div class="clearfix"></div>
                <?php endif; ?>
            <?php endforeach;?>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($si_whys)) : ?>
    <div class="visible-xs">
        <div class="h1-wrapper">
            <h1>SOCIAL ISSUES</h1>
        </div>
        <div class="experts">
            <?php $curr = 0; foreach($si_whys as $why) : $curr++; ?>
                <div class="tetra-block">
                    <div class="wrapper">
                        <div class="image">
                            <?php if($why['why_si_bg_image']): ?>
                                <img src="<?php echo $why['why_si_bg_image']?>" />
                            <?php endif; ?>
                        </div>
                        <div class="text">
                            <div class="title"><?php echo $why['why_si_text_title'];?></div>
                        </div>
                    </div>
                </div>
                <?php if($curr % 2 == 0): ?>
                    <div class="clearfix"></div>
                <?php endif; ?>
            <?php endforeach;?>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
