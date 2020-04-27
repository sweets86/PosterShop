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
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'postershop' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'root' );

/** MySQL-server */
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
define( 'AUTH_KEY',         '[f319Mv=(_M*7a%4ocHsg<V]1~08#3]5xhQ>]XEj#2f5Gu:`ulvNWXuoxZUZu7!2' );
define( 'SECURE_AUTH_KEY',  '<0~6V{+J`<[N.%Bu}x[Aoij?F$~IYQNW.?4#To iG<qzo%;@}z@VrNR~WprLa<pN' );
define( 'LOGGED_IN_KEY',    'Bb7U=]~pKx1g}C9!H|Kk:,TDG8?cuRL/D5+ui;@7;gU6t3T10w)n%u9S#jyIH9w^' );
define( 'NONCE_KEY',        '6g?:][fmc_=TddIHdEO~-;*tP+U&%bm,rpBxKM[PEz;YZ|,S(35jU7+9;NW-vJ[x' );
define( 'AUTH_SALT',        'jbq-V;U%PK[Hnc }32dTosNqcOC,P0^OXjl`sv8S3-vfM 1 KR#Bpv^<ITAS|9w-' );
define( 'SECURE_AUTH_SALT', 'gA8t3F_t:zcMVDO75ht?0/_ n&x=?T:@/h~,tK[[xwSgv`GATYPCJ8(dFn0#l%ro' );
define( 'LOGGED_IN_SALT',   ';nM*Mmr0`=02_MQG;w>cCp>+8Tzq.,gs> Mn9stts+]E3t @vb~T@3:k|LVO$wZZ' );
define( 'NONCE_SALT',       'd= 7=l{8t]9RsMTr#Tu{0DAr.EZD0X3}wE$%ce|@)*M*7t3TXE)thc_}Vtv0%1$V' );

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

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');