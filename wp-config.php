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
define( 'DB_NAME', 'NewYorkTimesCompany' );

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
define( 'AUTH_KEY',         'f%Jhg9.Sr@v#;#Kg@U[J;.kqHw-_=9-;wdg;viPL[:|9t8V`2fdqO;}Ay^ny_ Q*' );
define( 'SECURE_AUTH_KEY',  'Un&DKT~f,Ee7,+g)ir(h?4Fvtmh{LgzL=O&(X!5t.8ifq^mzg_4}.[(|%Z,Y^2IM' );
define( 'LOGGED_IN_KEY',    'hX75T;G+^nwR[/ZZ}y]aW+YH-[Y4u:<^7Uf|X|$j:_9Q0]<rHnpZ-]51>dex+Esd' );
define( 'NONCE_KEY',        'TvJ/)>@V%H0zCN22]$WfI^VVoF+=RtBDSEB)5tA)gD}S:Y0uw?]?T!=M$-s4ha/8' );
define( 'AUTH_SALT',        'blfF]0~Fx18Xe1UdSoMDC^l5usjo$-IKt#ob+EUHE?e:W-b]!sU:g]@B9$b.9SLR' );
define( 'SECURE_AUTH_SALT', 'b4,aRcdt+YUQbOv=074d<V*(+hL5PJO,XXhr~?K#co|Ypqd:n#m.rZB!3>32}l)(' );
define( 'LOGGED_IN_SALT',   'aC,(PT`_MHj&(zDUwQZbuKzRCJVAMv|+;`&Zx@5|kVlKkiXtAb)A&7[9v2ithe16' );
define( 'NONCE_SALT',       '(ycvoR#g$$rT^hyPT.rdmrWW=C{| L>^e!!3Ui$j`0VtA+;w/r;$+{--P82tE ^J' );
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
