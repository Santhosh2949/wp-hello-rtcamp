<?php
/**
 * Plugin Name: Hello rtCamp
 * Description: A simple custom WordPress plugin created as part of learning WordPress plugin development.
 * Version: 1.0
 * Author: Santhosh Kumar
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'admin_notices', function () {
    echo '<div class="notice notice-success is-dismissible">
            <p>Hello rtCamp! Custom plugin is active.</p>
          </div>';
});
