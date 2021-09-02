<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Amsterdam" );
define( "DB_DSN", "mysql:host=localhost;dbname=articles" );
define( "DB_USERNAME", "s616702" );
define( "DB_PASSWORD", "1BDSXKlO" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "s616702" );
define( "ADMIN_PASSWORD", "1BDSXKlO" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
