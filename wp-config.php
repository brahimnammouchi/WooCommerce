<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',]#I8669n8YcHVX0U(i T 32n^L:{4pPsiGQFlPe9Iz[Jo_(Y+At8JU+rkiy@g81' );
define( 'SECURE_AUTH_KEY',  ']3>pgkFi5.3J|&$@=4PJ,oMR6iAGE1E)i; P=^ELdthMW)(/ T36y56EBzC.40R1' );
define( 'LOGGED_IN_KEY',    'Pa8p^ qpges,jIdz:DMT`MsLB}FQ,.@Novc$b%cEm}ld^O_m7k]@Oo() dU-J;&&' );
define( 'NONCE_KEY',        'X@6#n,Fw|=PWZiJD*jVlGYq{$@I>)Kwf&Y&2zqQ0` 8- X5Z6V]{/kc!I3?YDz{[' );
define( 'AUTH_SALT',        '](pqX[DD;Ip}^_b}I|4p}/Z3~xIU*zg`M0EB`loVAoK$lNv<I6=+m# 8FO>ppN79' );
define( 'SECURE_AUTH_SALT', 'U(7(S3<LhG%a&2}^([J33ic6SvaP$0#g<gDpLgO8{AxXSG[d_t@Rnt0@CK.;.yl$' );
define( 'LOGGED_IN_SALT',   '}aR(IWpNvue61=0Bp$Ym9fJoW5p]/:#z^]1Le)LM^H]8*IWz1t? IsD6V& ~Y#Dy' );
define( 'NONCE_SALT',       ':5~XiK-jpK&N/G}{4rj)7:?O-VjL=YSa[<`avT;ZgsMwuXzSUViXcXg~|0I]SXgY' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
