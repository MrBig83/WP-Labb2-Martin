<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'labb2-martin' );

/** Databasens användarnamn */
define( 'DB_USER', 'medie-admin' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'medie-admin' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PF>:b $JsILm=W))O+v&ZgnUfCf#_EI@Jg}}{cNw&fsk}=!u<|b $79vw>.>+kS$' );
define( 'SECURE_AUTH_KEY',  'Mw9&rfSu~Q)ufm>{`ChK*!;grB[T-O&k).E[Z7}aad!S.hh_vhkBTgg:akMO%#f{' );
define( 'LOGGED_IN_KEY',    '/$J~78/<qs3]8W9yW1}ZTuPBOBkxc5CP;GHmN?Ws(|U*l.~zW@~:cKwP=q|6^y5w' );
define( 'NONCE_KEY',        '%aDS4YA@ga]C,EH+QQ%0&tFIRd&#:%4n1Cy$By;KXdi4LG06X&DXNCVWT7xzR6pY' );
define( 'AUTH_SALT',        '(1>8WdP+aM/gX!_v?/K)*7r[qav~PH^7DZ4zw-H^r<hS5Xv+Xakvw;.lL;|0WZ{<' );
define( 'SECURE_AUTH_SALT', 'o]Lj(OF|=yQe.hs!w9FdCvH&3<.:RR|zN:,ZxQSrt7/M|q(o_?4A.uo%}~Ld[>S]' );
define( 'LOGGED_IN_SALT',   '*/wD2P6jIGk(K%4?GzCVOV8>BLF)/{+*z#pnC0>0jc0&u62,wa~Q%5#3K2G0NhM|' );
define( 'NONCE_SALT',       ':y]p/G~~/ k/`[` 1!*_^rOwEz,X=RY8a4zIKPbq1N(ETWm4.gBLh,%b7@r/b[Ib' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');