// THIS IS A TEST COMMIT FOR STAGING USING PUPPET
<?php

define('DB_SERVER', 'anz-go-testdb-rds.aws.cambridge.edu.au');
define('DB_USERNAME', 'anzrds');
define('DB_PASSWORD', '7saN8jgetm');
define('DB_DATABASE', 'tngdb');

#define('SESSION_HANDLER', 'mysql'); // modified by Paul Balila, compatibility issue

// so we use mysqli
define('SESSION_DB_TABLE', 'CupGoPhpSession');
define('SESSION_MAX_LIFETIME', 3600);

// this disables the checking of updates
define('ENABLE_NEWSFLOW_OVERLAY', false);

define('URL_REWRITING_ALL', true);
define('REDIRECT_TO_BASE_URL', false);

//check if the domain is in staginf
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url,'staging') !== false) {
    define('BASE_URL','https://www.staging.cf.cambridge.edu.au');
    define('ASSETS_FOLDER','https://www.staging.cf.cambridge.edu.au');

    define('COOKIE_URL_EPUB', 'http://www.staging.cf.cambridge.edu.au/go/epub/sso/setCookie.php');
    define('COOKIE_URL_ITB', 'http://www.staging.cf.cambridge.edu.au/go/interactive_book/sso/setCookie.php');
    define('COOKIE_URL_TH', 'http://testhub-testdeploy.cambridge.edu.au/setCookie.php');
    define('COOKIE_URL_THS', 'https://testhub-testdeploy.cambridge.edu.au/setCookie.php');
}else{
    if ($_SERVER['HTTP_X_FORWARDED_PORT'] == 80 ) {
            define('BASE_URL','http://www.testdeploy.aws.cambridge.edu.au');
            define('ASSETS_FOLDER','http://www.testdeploy.aws.cambridge.edu.au/');
    } else {
            define('BASE_URL','https://www.testdeploy.cf.cambridge.edu.au');
            define('ASSETS_FOLDER','https://www.testdeploy.cf.cambridge.edu.au');
    }

    define('COOKIE_URL_EPUB', 'http://www.testdeploy.cf.cambridge.edu.au/go/epub/sso/setCookie.php');
    define('COOKIE_URL_ITB', 'http://www.testdeploy.cf.cambridge.edu.au/go/interactive_book/sso/setCookie.php');
    define('COOKIE_URL_TH', 'http://testhub-testdeploy.cambridge.edu.au/setCookie.php');
    define('COOKIE_URL_THS', 'https://testhub-testdeploy.cambridge.edu.au/setCookie.php');    
}

//var_dump(BASE_URL);
//die('here');

//define('BASE_URL','https://anz-testdeploy.aws.cambridge.edu.au');
//define('ASSETS_FOLDER', 'https://anz-testdeploy.aws.cambridge.edu.au/');

define('LOCAL_ASSETS_FOLDER', '/mnt/data/www/assets.cambridge.edu.au/go/');

define('HM_TEST_API', "https://api-test.edjin.com");
define('HM_PROD_API', "https://api.edjin.com");

define('HM_TEST_API_PORTAL', "https://testportal.edjin.com");
define('HM_PROD_API_PORTAL', "https://hotmaths.cambridge.edu.au");

// FOR DEV
define('HOTMATHS_CONNECT', 'testportal.edjin.com');
// FOR PROD
//define('HOTMATHS_CONNECT', 'hotmaths.cambridge.edu.au');
define('PRODUCTION_MODE', false);
define('CAMBRIDGE_MATHS_SUPPORT_EMAIL', 'go@cambridge.edu.au');
define('ANALYTICS_PUBLIC_KEY', '6354wWfv3e3sd');
define('ANALYTICS_SECRET_KEY', '32te59KJkfdw');
define('ELEVATE_SECRET_KEY', 'V8iyo9OGIXu1JfjS');
define('EPUB_KEY', 'IH5tO8U2');
define('TESTHUB_KEY', '59touy7g8');
define('USER_CHANGE_PASSWORD_URL_LIFETIME', 86400);
define('ITB_SECRET_KEY', 'iagh32dL1VtZ2jCaML1jh7QofWg4C7nW');
define('API_SECRET_KEY', 'DpNNug3k9vYW2138ry');
?>

<?php define('DIRNAME_APP_UPDATED', 'concrete5.6.3.3');?>
