<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

/**
 * Database-Settings
 * Load environmental-related DB-Settings (ENV-Constant)
 */
if(!defined('WP_ENV')){
	require('wp-env/wp_env.php');
}
require('wp-env/env.' . WP_ENV . '.php');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f+SirrI+107D1bKz0-VU]ET s{6ay/67_<|4_ANUFtL<CQ6W<EJ&`5NhB2T[$eNF');
define('SECURE_AUTH_KEY',  'Zi[G@~wqISS{f$dlJ^/99R-{&m[dT2)Tr(MK6;<M5E4;yv[^9NT[B_jRrap/Fuag');
define('LOGGED_IN_KEY',    ';N4rMM[r4ot&JBEi<SuSo+<J/,^,CPrc:^ncVA/nv&rD2!u@$RW,>p#s`ESIJp0Z');
define('NONCE_KEY',        'jY~C7;yQAu6_4lnes`Jc4uz=@C*x4?N+p03jV^*[L4u1=_PPbO;3,GEJTAhl.!oy');
define('AUTH_SALT',        'Pv[^^,wx72tZ3kuGT;2re toVDJo8#h_A-1=5J|K/{(dq0$S2HTW!:,CgoOe48,T');
define('SECURE_AUTH_SALT', 'I.T[W7$Kq~-sX+p6qc7luzv|CH[`eRJ~bbOTuF1Md0P};B5Sw@)^S_UYjcg6O`Fk');
define('LOGGED_IN_SALT',   'y!}&d,nO2_pxKi<4gV*R3(CsE@!@WdZ/.]5i&9ms/jvWP>:/HrVIGo[8{s<9_<X;');
define('NONCE_SALT',       'be@zp8jjWw0l7)&t*M1:nn3i5g*|zZu:9?`noha?:iPQjqt M]ZQ&Z85S3j,`>xy');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'cwo_suoWP_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_SENTRY_DSN', 'https://059b37d864154f8cab3fdf40bdcfced0@sentry.io/1292820' );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
