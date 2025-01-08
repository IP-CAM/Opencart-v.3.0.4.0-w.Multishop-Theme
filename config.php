<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8888/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:8888/');

// DIR
define('DIR_APPLICATION', '/Users/aleksei/Desktop/Opencart/catalog/');
define('DIR_SYSTEM', '/Users/aleksei/Desktop/Opencart/system/');
define('DIR_IMAGE', '/Users/aleksei/Desktop/Opencart/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '8889');
define('DB_PREFIX', 'oc_');