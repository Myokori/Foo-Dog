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
define( 'DB_NAME', 'FooDog' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'myokori' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'zanpakto' );

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
define( 'AUTH_KEY',         '[W@53W#R6fV6Zu<e?Nkv} j]y^wDTDQMdvdeEQyT*W@Fp(Xsk5mS6L<cw({(s5MM' );
define( 'SECURE_AUTH_KEY',  'hSD;{K>%ZR_<zTE!D62VazG~|hQ,AqG%p-qhvSSsDO3B8-|z1%wmd hQ nq{oq!k' );
define( 'LOGGED_IN_KEY',    '?+Ch`=FBg:>bg,=1Gg~s,2d>X{V@4T,9`H}pv>uq5:^xW+@nB{xCXS|Icr%$l:Zv' );
define( 'NONCE_KEY',        'N[Vd=`Sysc7D9#*jiidR<g=vKai-_Y&IV_2Qq~.cOg8e_+jZ0+==fn/<>IX[LE5c' );
define( 'AUTH_SALT',        'TwHUqe5;ht/vEizNAz8s3q_.S{CV2W.:$yC:%RnZS3U p1:<7=hm{U:mKU9ik:)n' );
define( 'SECURE_AUTH_SALT', '12fd(x7v>w0*1ohy@Ro%(#.Si*H)6|r6`ZjjMTov[@742d%gT4E:>9_/mkYD`q#5' );
define( 'LOGGED_IN_SALT',   '1)@E4f_{jtA=ti4N|1<nn)hdtoZQD:KC;w_8<y1N@GW[X@;Fr`@=,#u3g]LK-<NS' );
define( 'NONCE_SALT',       'XJFnoa(&N6JF]#XS-izf(XcDDle{k5<Fnb,tL/<E!Q[B]aE))M)N-oakr%D<2QWx' );
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

/** Empêche WP de demander la connexion à un FTP pour l'upload en local */
define('FS_METHOD','direct');
