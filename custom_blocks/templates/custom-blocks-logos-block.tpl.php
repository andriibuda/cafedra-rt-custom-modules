<?php
// Generate an url for footer pictures.
$path = file_create_url(drupal_get_path('theme', 'cafedra_rt') . '/img/tntu-logo.png');
$path2 = file_create_url(drupal_get_path('theme', 'cafedra_rt') . '/img/cafedra-logo.png');
?>
<div id="footer_logos" class="columns is-multiline is-mobile">
    <div class="column is-6-desktop is-6-tablet is-6-mobile">
        <a href="http://tntu.edu.ua" target="_blank">
            <figure class="image tntu-logo">
                <img src="<?php print $path;?>">
            </figure>
        </a>
    </div>
    <div class="column is-6-desktop is-6-tablet is-6-mobile">
        <a href="/">
            <figure class="image">
                <img src="<?php print $path2;?>">
            </figure>
        </a>
    </div>
    <div class="column is-12-desktop is-12-tablet is-12-mobile footer-address">
        <p>
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <?php print t("46001, Ternopil city
             street Tekstyl'na, 28");?>
        </p>
        <p>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <?php print t('tel. 25-24-77');?>
        </p>
        <p>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            e-mail: <a href="mailto:kaf_av@tu.edu.te.ua">kaf_av@tu.edu.te.ua</a>
        </p>

    </div>
</div>

