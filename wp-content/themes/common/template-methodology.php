<?php
/*
Template Name: Methodology Page
*/
?>

<?php get_header(); ?>
<div class="section" id="methodology">
    <div class="h1-wrapper">
        <h1>OUR METHODOLOGY</h1>
    </div>
    <div class="wrapper">
        <div class="left-block">
            <div class="top">
                <div class="half-block">
                    <div class="title">
                        <h1>BUILDING <br />VENTURES</h1>
                    </div>
                    <div class="text">
                        <?php the_field('methodology_bulding_ventures_text'); ?>
                    </div>
                </div>
                <div class="half-block">
                    <div class="title">
                        <h1>IMPACT <br />INVESTMENT FUND</h1>
                    </div>
                    <div class="text">
                        <?php the_field('methodology_impact_investment_fund_text'); ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bottom">
                <div class="half-block">
                    <div class="title">
                        <h1>SYSTEM <br />CHANGE</h1>
                    </div>
                    <div class="text">
                        <?php the_field('methodology_system_change_text'); ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="right-block">
            <div class="flower">
                <img src="<?php echo get_stylesheet_directory_uri()?>/img/methodology.svg" />
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php get_footer(); ?>
