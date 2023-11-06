<section class="committee py-5">
    <div class="container-xl">
        <h2>Meet the Committtee</h2>
        <div class="committee__grid">
            <?php
    $q = new WP_Query(array(
        'post_type' => 'people',
        'posts_per_page' => -1
    ));
            while ($q->have_posts()) {
                $q->the_post();
                ?>
            <div class="committee__card">
                <div class="committee__card_left">
                    <img src="<?=wp_get_attachment_image_url(get_field('photo', get_the_ID()), 'full')?>"
                        alt="<?=get_the_title()?>"
                        class="committee__photo">
                    <h3 class="committee__name">
                        <?=get_the_title()?>
                    </h3>
                    <div class="committee__role">
                        <?=get_field('role', get_the_ID())?>
                    </div>
                </div>
                <div class="committee__card_right">
                    <div class="close"><i class="fa-solid fa-times"></i></div>
                    <div class="committee__bio">
                        <?=get_field('bio', get_the_ID())?>
                    </div>
                    <?php
                    if (get_field('email', get_the_ID())) {
                        ?>
                    <div class="committee__email">
                        <a
                            href="mailto:<?=get_field('email', get_the_ID())?>"><i
                                class="fa-solid fa-envelope"></i></a>
                    </div>
                    <?php
                    }
                ?>
                </div>
            </div>
            <?php
            }

            ?>
        </div>
    </div>
</section>