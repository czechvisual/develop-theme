<?php get_header(); ?>

    <?= component('hero', 'carousel', [
        'title' => __('WordPress Starter Theme'),
        'show_arrows' => true
    ], function() {
        return '<p>WordPress Starter Theme, jehož cílem je modernizovat, organizovat a zlepšit některé aspekty vývoje motivů WordPress.</p>';
    }) ?>

    <section class="container">
        <div class="row">
            <?php if (have_posts()) : ?>
                <div class="col-12 col-md-4 app-post">
                    <?php while (have_posts()) : the_post() ?>
                        <?= component('post/item', 'default') ?>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <?= component('post/content', 'default') ?>
            <?php endif; ?>
        </div>

        <?= component('button', 'default', [
            'label' => __('Zobrazit modal'),
            'button' => true,
            'color' => __('secondary'),
            'selector' => __('data-open-modal'),
        ]) ?>

        <?= component('modal', 'center', [], function() {
            return '<p>Obsah okna modalu.</p>';
        }) ?>
    </section>

    <?php if (apply_filters('theme/index/sidebar/visibility', false)) : ?>
        <?= component('post/sidebar', 'default') ?>
    <?php endif; ?>

<?php get_footer(); ?>
