<?php  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
if (!$database) {
require_once( 'configuration.php' );
require_once( 'database.php' );
require_once ( 'validator.inc.php' );
$database = new database( $mosConfig_host, $mosConfig_user, $mosConfig_password, $mosConfig_db, $mosConfig_dbprefix );
$database->debug( $mosConfig_debug );
}
 ?>