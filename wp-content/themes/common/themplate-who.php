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
            <span class="top">WE ARE A GROUP OF CHANGEMAKERS</span>
            <span class="bottom">WE CREATE A DIVERSE EFFECT WITH <br />A STRONG EXECUTION TEAM</span>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="experts">
        <div class="quarter-block">
            <div class="image">
                <div class="bg-over"><div class="bg-text">Experts: <br />Europe</div></div>

            </div>
            <div class="text">
                <div class="title">PLACEHOLDER TEXT!</div>
                When Enviu was founded in 2004, their belief was the same as it is today: An inclusive economy that serves people and planet. Enviu is a venture building studio that builds multinationals that address social and environmental issues, and drive market development. Companies with high impact in the domains of financial inclusion, circular economy, and food systems. World changing companies.
            </div>
        </div>
        <div class="quarter-block">
            <div class="image">

                <div class="bg-over"><div class="bg-text">Experts: <br />India</div></div>
            </div>
            <div class="text">
                <div class="title">PLACEHOLDER TEXT!</div>
                When Enviu was founded in 2004, their belief was the same as it is today: An inclusive economy that serves people and planet. Enviu is a venture building studio that builds multinationals that address social and environmental issues, and drive market development. Companies with high impact in the domains of financial inclusion, circular economy, and food systems. World changing companies.
            </div>
        </div>
        <div class="quarter-block">
            <div class="image">

                <div class="bg-over"><div class="bg-text">NGO</div></div>
            </div>
            <div class="text">
                <div class="title">PLACEHOLDER TEXT!</div>
                When Enviu was founded in 2004, their belief was the same as it is today: An inclusive economy that serves people and planet. Enviu is a venture building studio that builds multinationals that address social and environmental issues, and drive market development. Companies with high impact in the domains of financial inclusion, circular economy, and food systems. World changing companies.</div>
        </div>
        <div class="quarter-block">
            <div class="image">

                <div class="bg-over"><div class="bg-text">ENVIU</div></div>
            </div>
            <div class="text">
                <div class="title">PLACEHOLDER TEXT!</div>
                When Enviu was founded in 2004, their belief was the same as it is today: An inclusive economy that serves people and planet. Enviu is a venture building studio that builds multinationals that address social and environmental issues, and drive market development. Companies with high impact in the domains of financial inclusion, circular economy, and food systems. World changing companies.</div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="lines">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/lines_page_4.svg" />
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<?php get_footer(); ?>
