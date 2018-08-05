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
        <div class="experts">
            <?php $curr = 0; foreach($circles as $circle) : $curr++; ?>
                <div class="quarter-block">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/img/circle.svg" />
                        <div class="bg-text"><?php echo $circle['what_text_in_cirlcle'];?></div>
                    </div>
                    <div class="text">
                        <div class="title"><?php echo $circle['what_circle_block_title'];?></div>
                        <?php echo $circle['what_circle_block_description'];?>
                    </div>
                </div>
                <?php if($curr % 4 == 0): ?>
                    <div class="clearfix"></div>
                <?php endif; ?>
            <?php endforeach;?>
        </div>
    <?php endif; ?>
    <!--div class="experts">
        <div class="quarter-block">
            <div class="image">
                <div class="bg-over"><div class="bg-text">KHALOOM</div></div>

            </div>
            <div class="text">
                <div class="title">PLACEHOLDER TEXT!</div>
                When Enviu was founded in 2004, their belief was the same as it is today: An inclusive economy that serves people and planet. Enviu is a venture building studio that builds multinationals that address social and environmental issues, and drive market development. Companies with high impact in the domains of financial inclusion, circular economy, and food systems. World changing companies.
            </div>
        </div>
        <div class="quarter-block">
            <div class="image">

                <div class="bg-over"><div class="bg-text">IMPACT <br />INVESTMENT <br />FUND</div></div>
            </div>
            <div class="text">
                <div class="title">PLACEHOLDER TEXT!</div>
                When Enviu was founded in 2004, their belief was the same as it is today: An inclusive economy that serves people and planet. Enviu is a venture building studio that builds multinationals that address social and environmental issues, and drive market development. Companies with high impact in the domains of financial inclusion, circular economy, and food systems. World changing companies.
            </div>
        </div>
        <div class="quarter-block">
            <div class="image">

                <div class="bg-over"><div class="bg-text">UPSET <br />TEXTILES</div></div>
            </div>
            <div class="text">
                <div class="title">PLACEHOLDER TEXT!</div>
                When Enviu was founded in 2004, their belief was the same as it is today: An inclusive economy that serves people and planet. Enviu is a venture building studio that builds multinationals that address social and environmental issues, and drive market development. Companies with high impact in the domains of financial inclusion, circular economy, and food systems. World changing companies.</div>
        </div>
        <div class="quarter-block">
            <div class="image">

                <div class="bg-over"><div class="bg-text">NETWORK <br />FOR SYSTEM <br />CHANGE</div></div>
            </div>
            <div class="text">
                <div class="title">PLACEHOLDER TEXT!</div>
                When Enviu was founded in 2004, their belief was the same as it is today: An inclusive economy that serves people and planet. Enviu is a venture building studio that builds multinationals that address social and environmental issues, and drive market development. Companies with high impact in the domains of financial inclusion, circular economy, and food systems. World changing companies.</div>
        </div>
        <div class="clearfix"></div>
    </div-->
    <div class="lines">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/lines_page_4.svg" />
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>
