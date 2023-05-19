<div class="app-error">
    <?=get_header()?>

    <div class="container">
        <div class="error-type">
            404
        </div>

        <h1>
            <?= __('Tato stránka neexistuje', app()['textdomain']) ?>
        </h1>

        <p class="font-size-p-large">
            <?= __('Omlouváme se. Vypadá to, že tato stránka neexistuje nebo již byla smazána.', app()['textdomain']) ?>
        </p>

        <?= component('button', 'default', [
            'label' => __('Vrátit se zpět', app()['textdomain']),
            'url' => 'javascript:history.go(-1)',
            'color' => 'secondary'
        ]) ?>

        <?= component('button', 'default', [
            'label' => __('Na úvodní stranu', app()['textdomain']),
            'url' => get_home_url(),
            'color' => 'light'
        ]) ?>
    </div>

    <?=get_footer()?>
</div>
