<?php
/**
 * Configuration overrides for WP_ENV === 'preprod'
 */

ini_set('display_errors', 1);

if (defined('WP_CLI') && WP_CLI) {
    define('SAVEQUERIES', false);
} else {
    define('SAVEQUERIES', true);
}
