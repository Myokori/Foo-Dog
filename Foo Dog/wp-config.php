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
define( 'DB_NAME', 'foodog' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QU?d[S USW^[_g([iYT&WzU#!Q.~+-sdbUE_I&?UWd@3+^NS]l`wn>5el[8oZ2fn' );
define( 'SECURE_AUTH_KEY',  '*4&$A%!V5.$j{ckVI:)iy=-b{0}[Hp8KEIyHI.;7rK+EPE1ri^L*vEVitLz1d^pq' );
define( 'LOGGED_IN_KEY',    '|f2]yWxX}(YCe+<Dn5]3|oMw$eK^e{%7s:KJ-o>K~EWAg9l`5M$vN#L*FBU}wJ.K' );
define( 'NONCE_KEY',        '/S+40#i2+o1;iyX^d=cu_eM|@,K ~`i)wv_/JH_rn1f<5S-<;nekjV)Xl,s/A_*.' );
define( 'AUTH_SALT',        'Df5[pepmM-d4PD.aQeF<Nuf1R{)K*>=(S9H#> 3R;$.A_l}>]Wf8kAr;#ASWSlwh' );
define( 'SECURE_AUTH_SALT', 'MmDvGBRSw}(5pX:Qq2dH?rMVncKvQIu<_`n-m>8AVfOBz}$%*{;A-G+n(TB;[^`&' );
define( 'LOGGED_IN_SALT',   'y}bn3<}Z5B-&Nrr0!}G!A?mg?CF&*-VP^re[|!-p}}<T`hRXU!W!@R,Se%yZpEs}' );
define( 'NONCE_SALT',       '@Eu<.xYgv0J/QZWi`x >f6}}hY|xBgg=?b:eNY_yCbGw7mH=BS+dJ3b*z1C%WP)K' );
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

/* Skip la demande de FTP en local */
define('FS_METHOD', 'direct');
