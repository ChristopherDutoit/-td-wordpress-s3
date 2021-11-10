<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'tdwordpresss3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'KaF<qi``*]z42OfATNF~u7P2^$kB< aliNtmFMNtOpbBfIX{@#<!tvYt+;pSN|J%' );
define( 'SECURE_AUTH_KEY',  '<Tg>y,dl+l*^V;Q*c>eb8Kda~M9Uc^$hOb&r70e*g$vSw&}) Aov$4]43STjcAW$' );
define( 'LOGGED_IN_KEY',    'Q6Drj_l+FM6KC)v-wk(SU.D0gJ{Sa!y5@z:IvB9#jsS6~{j*9G~|L?eo^c[P&IN9' );
define( 'NONCE_KEY',        'jVX)eB#(^3/Vaj]!G6HWu*y{I)3f)m?jOT:D>Gldk*Il,fgb/8sC}=Je^.rMArH(' );
define( 'AUTH_SALT',        'S T-UwJ>8!>WXv.8}}9sDru@beA.7@o2$_V2P9{BOr?DogvSa+eIT>K`9<l2/<4s' );
define( 'SECURE_AUTH_SALT', ' Ek}A?y=jd.});zTB(O8MT`<F_sDp05!lnn#`WRbzhrUR9dy$C|qY9{r9y_19#zG' );
define( 'LOGGED_IN_SALT',   'a/v$EIeoQ0mjkz2$HpX{cktkq<<BuM<Ui!tK*^{6=di@ia|?HMDUikr&[AXIvxgK' );
define( 'NONCE_SALT',       'ezzMevA0oQ>ivx|QZy1@0{4m(l$WB^.{.j1l#z<o5H6py^NO2~HeeBLps=#WV4_d' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
