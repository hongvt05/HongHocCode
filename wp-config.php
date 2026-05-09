<?php
/**
 * The base configuration for WordPress
 */

/** ================= DATABASE ================= */
define('DB_NAME', 'btl');      // Database đã tạo trong phpMyAdmin
define('DB_USER', 'root');     // XAMPP mặc định
define('DB_PASSWORD', '');     // XAMPP thường để trống
define('DB_HOST', 'localhost');

/** Charset */
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');


/** ================= SECURITY KEYS ================= */
/* WordPress yêu cầu có key */
define('AUTH_KEY',         'btl-auth-key-123456');
define('SECURE_AUTH_KEY',  'btl-secure-auth-key-123456');
define('LOGGED_IN_KEY',    'btl-logged-in-key-123456');
define('NONCE_KEY',        'btl-nonce-key-123456');
define('AUTH_SALT',        'btl-auth-salt-123456');
define('SECURE_AUTH_SALT', 'btl-secure-auth-salt-123456');
define('LOGGED_IN_SALT',   'btl-logged-in-salt-123456');
define('NONCE_SALT',       'btl-nonce-salt-123456');


/** ================= TABLE PREFIX ================= */
$table_prefix = 'wp_';


/** ================= DEBUG ================= */
define('WP_DEBUG', false);


/** ================= URL LOCALHOST ================= */
/* QUAN TRỌNG: port 8888 */
define('WP_HOME', 'http://localhost:8888/BTL');
define('WP_SITEURL', 'http://localhost:8888/BTL');

define('FORCE_SSL_ADMIN', false);


/** ================= ABS PATH ================= */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';