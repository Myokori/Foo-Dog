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
define( 'DB_USER', 'myokori' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Zanpakto5892' );

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
define( 'AUTH_KEY',         ';`F$,A1c9+u;w*Z.{!a%>64QmW %1`Xd8*mRbEr0`!JZl^=>=|Vr^YLprJ /#PNI' );
define( 'SECURE_AUTH_KEY',  'yE!,TavFs57>+-b+uzt@.,r/LpwF_ZLoUR;Oxr^FRnL>]Pe(Aq+P)+IYbIMOiF^?' );
define( 'LOGGED_IN_KEY',    'y8e*st}]Q{M4pS>Uek,%z,X*Mi9cPQLhs<{WN&!SapJz*^rS2$_2[2m[:a:L*/`[' );
define( 'NONCE_KEY',        'P[sZK$2}o;[;q1:$2z(0t<V=t00,64<kV8<p.r:OSr2B,P2)N4$v@!eTP[KA[nlU' );
define( 'AUTH_SALT',        'vbyg+U.i,+M-?:o |{vhKo04<,0zG2[_410=HaAQU:de:PILD-gm%=x6g+Y#-9gK' );
define( 'SECURE_AUTH_SALT', 'qJa0>w9)pys,W8PA(P~6$O+S ,_:q1~g=;gkL&4/R8NQ~oktWhQ`u9RjhkP] *G_' );
define( 'LOGGED_IN_SALT',   '^SF<8A/!%1QJ48^]vMPC(,gw1VtHR7kJ^|mnk<kUKclyBt(=?<au~O<1K~MD03aD' );
define( 'NONCE_SALT',       'mh6upPG3;V1|W[vG{~OS:`Xc9Qn/<Q#/GJ}:YB-X_t_Jakc@/JsR*O`kA18)I_ u' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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


define('FS_METHOD','direct');
