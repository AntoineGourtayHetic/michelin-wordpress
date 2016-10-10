<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wordpress_first');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '%wrlY#SBw5TeGJyW])_.%:vSj3;dDQfK0iP?fhV@aamLo.3e4G58EPL=1<y_&$r9');
define('SECURE_AUTH_KEY',  'Ny[rMnUk$!ihgm40ek?&()Dx(}k[6+oLno.C}OucM|qTxgl#^DHO[haMHo-sKZEw');
define('LOGGED_IN_KEY',    ' e,`*io?*DgD tf( )X5nJ[qqbdGmLj`fPd,vw/QJK;sU_K,IDtD[w5;EJw XD5&');
define('NONCE_KEY',        'b:B_b[^hZ/@?e;-x^}4JakJII_G[MB1W1.tN][54oV^PxGc0xqIHgd4LPFNE1H_r');
define('AUTH_SALT',        'MlO6IxEqY={a3 Ui-_zqvq*<~ox1?`yql&n_p46PXd`nA<(/biJnYmKhF3>vwv+=');
define('SECURE_AUTH_SALT', '`0}bfKX| ]<Y%dh)nZ?TB~*_kiN/itVAgl-Y}p38|GW%41o[o,W@KG}F,kF!+hC+');
define('LOGGED_IN_SALT',   'bGjdgQ0I27h #hX~n|:$%bpzt,&Y*:+>R[v+M01WwCFFxq }DOm09<XO3?N)c0Ry');
define('NONCE_SALT',       'ZX?%a35mm6mIE,b-tEtNhc`3!Dd~=n|AV{eaauIu.3wvSRgT4~F+%Pt.gMH(4`5S');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wpyes_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');