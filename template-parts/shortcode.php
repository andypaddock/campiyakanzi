<section class="container section-products <?php the_sub_field('bg_main'); ?>"
    <?php if (get_sub_field('section_id')) : ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row <?php the_sub_field('column_size'); ?> shop-wrapper">
        <div class="shop-wrapper">
            <?php
                if (get_sub_field('shortcode')) {
                    echo do_shortcode(get_sub_field('shortcode'));
                }
                ?>
        </div>
    </div>

</section>