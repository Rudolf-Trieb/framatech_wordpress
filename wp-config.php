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

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'framatech');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'wkkvwnkhsvms@777');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '2+P?kQv&4cY!RAJf<;S35%4V}q;+r^DWf{$FK>xV}ecyHS:^UN>n.uVM*g?WE pA');
define('SECURE_AUTH_KEY',  '[u-LkB*3Q0NEuDqeR`U7Jp&n17]!$zc2|0-igD7|x.24@]~eJ9iAcX++(p~rKNkx');
define('LOGGED_IN_KEY',    'a_xRQUiWa<SY48lVeI+K~v{M}yK<uL!zQgmvEWqa3#Wt@H;;e_7)egc$1S#`O7{8');
define('NONCE_KEY',        'RE(bZNT/u`r;65s/r${I{p)/j>wxy.SV `BdGzqLKX@!$qtduzbNG[OSNU`^ yc[');
define('AUTH_SALT',        '@ 7;>#fnw|`j$lp-ot6;r)ObH_}cgD1h0s=t1NzM^CD^o`I<a7S?&%U{^`2xlh(f');
define('SECURE_AUTH_SALT', '?Mk:BAu&,`::/eF=zMK8xY4IIBrDb-zsFO`~w[F3a{TI|[{?;r(D.i9w~)g39ig#');
define('LOGGED_IN_SALT',   '4/WLK90?W?G)mb$MOW<I7jY>:o4Y>V$ArdCBclGR8!tD8if4RXnT,<L&Ekavl+jx');
define('NONCE_SALT',       'ewL81tYSU&>;5Nw+tXBFpqnArEvvy|;rhf12auO=W1].+3`tjGJ/8<c1+OwyK^#[');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'ft_';

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

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');

//** UPLOAD PLUGINS WITHOUT FTP
define('FS_METHOD' , 'direct');
