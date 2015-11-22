<?php
/** 
 * Les configuracions bàsiques del WordPress.
 *
 * Aquest fitxer té les següents configuracions: configuració de MySQL, prefix de taules,
 * claus secretes, idioma del WordPress i ABSPATH. Trobaràs més informació 
 * al Còdex (en anglès): {@link http://codex.wordpress.org/Editing_wp-config.php Editant
 * el wp-config.php}. Les dades per a configurar MySQL les pots obtenir del
 * teu proveïdor d'hostatjament de web.
 *
 * Aquest fitxer és usat per l'script de creació de wp-config.php durant la
 * instal·lació. No cal que usis el web, pots simplement copiar aquest fitxer
 * sota el nom "wp-config.php" i omplir-lo amb els teus valors.
 *
 * @package WordPress
 */

// ** Configuració de MySQL - Pots obtenir aquestes informacions del teu proveïdor de web ** //
/** El nom de la base de dades per al WordPress */
define('DB_NAME', 'u689905944_tid');

/** El teu nom d'usuari a MySQL */
define('DB_USER', 'u689905944_tid');

/** La teva contrasenya a MySQL */
define('DB_PASSWORD', '3axmhDv0Tt');

/** Nom del host de MySQL */
define('DB_HOST', 'mysql.hostinger.es');

/** Joc de caràcters usat en crear taules a la base de dades. */
define('DB_CHARSET', 'utf8');

/** Tipus d'ordenació en la base de dades. No ho canvïis si tens cap dubte. */
define('DB_COLLATE', '');

/**#@+
 * Claus úniques d'autentificació.
 *
 * Canvia-les per frases úniques diferents!
 * Les pots generar usant el {@link http://api.wordpress.org/secret-key/1.1/ servei de claus secretes de WordPress.org}
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '-HS<vbdH%l+;iT,n[#z2U~|0 }@~Q;m2BcNSHbmr8Z=6mUY6PbALnkV-u|u@C7zJ');
define('SECURE_AUTH_KEY', 'L6(g+@ZnKxr^SjG2-dPP(Q9?w`L+NvTtwQH+uwC/5XQs4f|DNKr/S&M&h$gi:]|N');
define('LOGGED_IN_KEY', 'FI+m&a. T{ p13%=|z|]]{CTQuM0P:b:M8H=5O(g(v  3T|dG7h?M8!eFt}RcBy?');
define('NONCE_KEY', '+b[gB2Z~*)H }7&/YV# Y+TBek}pkoVPfM!j51?dM7jlJ%ohP(.hYsL&!NhrHVJQ');
define('AUTH_SALT',        'meyuA&-8,8X-16DF_+[`uTz-HC:B80QBTLAJ%Yf;p6dvBH*`W6tva8SE9;L_%xW-');
define('SECURE_AUTH_SALT', 'd|a??l[{UJ!m`zu1Re/vw!6DuZ:d ,.mgpdjqe~(dAA.}) :`!WJiZ*f-$DLl9Ht');
define('LOGGED_IN_SALT',   'L?,|f<Jk3.m#vKK4@veJwWn9AM,<vo7}Gz?v^]:]gmg2{H9N?f~uvZL2gW-;mC8S');
define('NONCE_SALT',       'wL^|n<|>nqG>B6&MdX&o2a&`7uJ[BD9G+Oi{d26yprI* ppc7itc1sH_|+Y26gkH');
/**#@-*/

/**
 * Prefix de taules per a la base de dades del WordPress.
 *
 * Pots tenir múltiples instal·lacions en una única base de dades usant prefixos
 * diferents. Només xifres, lletres i subratllats!
 */
$table_prefix  = 'wp_';


/**
 * Per a desenvolupadors: WordPress en mode depuració.
 *
 * Canvieu això si voleu que es mostren els avisos durant el desenvolupament.
 * És molt recomanable que les extensions i el desenvolupadors de temes facien servir WP_DEBUG
 * al seus entorns de desenvolupament.
 */
define('WP_DEBUG', false);

// Això és tot, prou d'editar - que bloguis de gust!

/** Ruta absoluta del directori del Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Assigna les variables del WordPress vars i fitxers inclosos. */
require_once(ABSPATH . 'wp-settings.php');