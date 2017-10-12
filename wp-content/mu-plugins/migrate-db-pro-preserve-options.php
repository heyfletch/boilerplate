<?php
/*
Based on    https://gist.github.com/daltonrooney/470619cca87a6c29cb84f92d856b9ec1
and         http://github.com/deliciousbrains/wp-migrate-db-pro-tweaks
*/

class ACF_WP_Migrate_DB_Pro_Tweaks {
    function __construct() {
        add_filter( 'wpmdb_preserved_options', array( $this, 'preserved_options' ) );
    }

    /**
     * By default, 'wpmdb_settings' and 'wpmdb_error_log' are preserved when the database is overwritten in a migration.
     * This filter allows you to define additional options (from wp_options) to preserve during a migration.
     * The example below preserves the 'acf_pro_license' value though any number of additional options may be added.
     */

    function preserved_options( $options ) {
        $options[] = 'acf_pro_license';
        return $options;
    }
}
new ACF_WP_Migrate_DB_Pro_Tweaks();
