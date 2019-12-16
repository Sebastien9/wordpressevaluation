<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projetevaluation' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CmEuJ46@*!3$,F!Z}va;n9{LOHaQKk-|{86Q2!}Z/-~`e~*exDou&9%PM]KqM@x2' );
define( 'SECURE_AUTH_KEY',  '+}_|c10S(K{l#b(a(kl-r=3-r%)C*3}L87[0sigq8d>E8sb^[*xRX<C{j2Yb|Kih' );
define( 'LOGGED_IN_KEY',    'PZSH|4{aR&wHhOheN;YHERLYv!r{KJa(xQZQ[icZUM^EoJ#m3erz}vz|E]{u0fPR' );
define( 'NONCE_KEY',        '+H*`d`^Q4N2Ne,o`O7}:2-y3TkdZ#1g(g]4%#FJ~y6XR7!Q@?J580L&,if}UBPob' );
define( 'AUTH_SALT',        '%Mu8-Pe6?k5Z{[%4[3pXW7f!5G9U#~VPN%=bE*qeRVo*#O~AQvA xo&KwP3?q(wU' );
define( 'SECURE_AUTH_SALT', '7)xM@!Nzn3.E7Xd./ J[k#NIqDGg^`>ErIgdTimwMn].vm8uUad~dzCzR>>zLDyK' );
define( 'LOGGED_IN_SALT',   'IVSm~s~X)t:|5TytARa  y~ee+kZ[F,}0[E_b&3nLhPH#nHiCi[6fet?GWre8Z@r' );
define( 'NONCE_SALT',       'TJ4+;$TX.L)t2G PfLdMfSE e{!?Yi]&W<jBw:f>h?wG]fEE63]JsoS/$ EvTJ5}' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpeval_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
