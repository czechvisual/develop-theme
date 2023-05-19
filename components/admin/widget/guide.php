<h2>
    <?= __('WordPress šablona na míru', app()['textdomain']) ?>
</h2>

<hr>

<h3>
    <b>
        <?= __('Média', app()['textdomain']) ?>
    </b>
</h3>

<p>
    <?= __('Nahrání médií jako jsou obrázky či videa, je velmi snadné a lze provést v sekci', app()['textdomain']) ?> <a href="/wp-admin/upload.php"><?= __('Media', app()['textdomain']) ?></a>.
    <br>
    <?= __('Pro zachování dostatečné rychlosti načítání webu a zajištění tak správného uživatelského zážitku na vašem webu, doporučujeme veškerá média předem formátovat a optimalizovat tak, aby vše odpovídalo požadovaným stadartům.', app()['textdomain']) ?>
    <br><br>
    <b>
        <?= __('Doporučené parametry obrázků:', app()['textdomain']) ?>
    </b>
    <br>
    <ul>
        <li>
            <b><?= __('Formát:', app()['textdomain']) ?></b> .webp, .jpg, .svg, .png
        </li>
        <li>
            <b><?= __('Maximální velikost:', app()['textdomain']) ?></b> 1 Mb
        </li>
    </ul>
    <br>
    <b>
        <?= __('Jak obrázky optimalizovat?', app()['textdomain']) ?>
    </b>
    <br>

    <a href="https://imagecompressor.com/">
      Image Compressor</a>
    <br>
    <a href="https://tinypng.com/">Tiny PNG</a>
    <br><br>
    <?= __('Pokud ani jeden z online nástrojů nezmenšil obrázek dostatečně, kontaktujte správce vašeho webu, který vám pomůže dosáhnout dostatetečné komprimace obrázku.', app()['textdomain']) ?>
</p>
