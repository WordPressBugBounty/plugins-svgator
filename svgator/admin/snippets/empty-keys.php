<?php
(function(){
    $svgator_configUrl = menu_page_url( 'svgator_config', false );
    ?>
    Before you can use the plugin, you first need to finish the <a
            href="<?php
            echo esc_url( htmlentities( $svgator_configUrl ) ) ?>"
    >configuration</a>.

<?php
})();
