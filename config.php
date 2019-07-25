<?php
/**
 * Barcode Buddy for Grocy
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.0 of the GNU General
 * Public License v3.0 that is attached to this project.
 *
 * @author     Marc Ole Bulling
 * @copyright  2019 Marc Ole Bulling
 * @license    https://www.gnu.org/licenses/gpl-3.0.en.html  GNU GPL v3.0
 * @since      File available since Release 1.0
 */


/**
 * Config file
 *
 * @author     Marc Ole Bulling
 * @copyright  2019 Marc Ole Bulling
 * @license    https://www.gnu.org/licenses/gpl-3.0.en.html  GNU GPL v3.0
 * @since      File available since Release 1.0
 */

// Configure API details. This script requires php-sqlite3 and php-curl

const API_URL                     = 'https://your.grocy.site/api/';
const APIKEY                      = 'YOUR_API_KEY';

// It highly recommended to disallow downloads of this file
const DATABASE_PATH               = __DIR__ .'/barcodebuddy.db';


//Set to true if you want to use a websocket. You need to start the file "wsserver.php"
//manually from the command line to start the websocket server.
const USE_WEBSOCKET               = false;
// the port to use for the server
const WEBSOCKET_SERVER_PORT       = 47631;
// if you want to use a different port, eg. because you are using an SSL proxy for the WS
const WEBSOCKET_PUBLIC_PORT       = WEBSOCKET_SERVER_PORT;
// if you are using an SSL HTTP proxy (eg. with NGINX), change this to true and adjust the URL below
const USE_SSL_PROXY		  = false;
// this URL will be used instead for the websocket address
@$WEBSOCKET_PROXY_URL              = "wss://".$_SERVER["SERVER_NAME"]."/screen";


//Value of the barcodes that are used for changing the mode
//Eg. when a barcode with the value set in "BARCODE_SET_PURCHASE" is scanned,
//the next items will be processed as a purchase. Once a time specified in
//RESET_STATE_AFTER_MINUTES is passed or another mode is scanned,
//the mode reverts back to "Consume"
const BARCODE_SET_CONSUME         = "BBUDDY_C";
const BARCODE_SET_CONSUME_SPOILED = "BBUDDY_CS";
const BARCODE_SET_PURCHASE        = "BBUDDY_P";
const BARCODE_SET_OPEN            = "BBUDDY_O";

const RESET_STATE_AFTER_MINUTES   = 10;

//Show scans for the special barcodes in log as well
const MORE_VERBOSE_LOG            = true;

//Mode reverts back to "Consume" after processing a single spoiled
//item or opening an item. If false, it reverts back after the same
//amount of time as the Purchase mode, set by RESET_STATE_AFTER_MINUTES
const REVERT_TO_CONSUME           = true;

?>
