
<?php
/**
 * Setup environments
 *
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 *
 * You can define the current environment via:
 *     define('WP_ENV', 'production');
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */
/*
 * Set environment based on hostname
 *
 * If you just use localhost for your local test environment then in place of:
 *   case 'domain.dev':
 *
 * Just use:
 *   case 'localhost':
 *
 */
switch ($hostname) {
    case 'www.example.com':
        define('WP_ENV', 'production');
    break;

    case 'dev.example.com':
        define('WP_ENV', 'development');
    break;

    case 'example.local':
        define('WP_ENV', 'local');
    break;

    case 'localhost':
    default:
        define('WP_ENV', 'local');
}
