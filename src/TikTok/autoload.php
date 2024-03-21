<?php

spl_autoload_register( function ( $class ) {
    $prefix = 'TikTok\\';
    require str_replace( '\\', '/', substr( $class, strlen( $prefix ) )) . '.php';
} );
?>
