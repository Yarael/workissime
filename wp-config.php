<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'workissime');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'orj_V4=pZqBgY+SPHT-.wY|eu4}2|R`jSdDplTuD`;Gu#w2#UHpodKd4_-O? W78');
define('SECURE_AUTH_KEY',  'F-DvW`[+=7N.Q{aZBJ NxMF:f#7|:i }qJn2Y3Z?]NRqr1|8*ix(qS!&;`PcLQGe');
define('LOGGED_IN_KEY',    'ebP)h-C7TdzAg;;6#]Xgx?[]z=Q|P2uK9V/)+a lWv4j(V<!TwAH}us J/Ug}dRQ');
define('NONCE_KEY',        'vq9exD8o8r93Pex8M=Fp%E`IFn~bGN{uxG*$ZW|dJ!1Wu;L}dPqGK?u$(jEzzgSo');
define('AUTH_SALT',        '>Z-*U>s+j@Q!$`Jz,tS&qD AI]1Jd%X|/TwS#9L&RTEclK[=mVRb+>.NQh[ 9~>7');
define('SECURE_AUTH_SALT', '`V# {0+EXWbS[V(B[xSGW,(FO$G/v#--QKzAC|Gf8){J2Y4?{p_+i:=q^F7GStY>');
define('LOGGED_IN_SALT',   'kq0G)[)+On*vRj6^RitO3PL2,CHZ2$)# [Ow3Xqcd.}B[,Wi4+TB,+/VUY$H&pO?');
define('NONCE_SALT',       ' (@nm{Fq,ZRDm0g^h^1$WW^41(TQ6(8W%yURLKYAqzypU,Gr@y./byV_O{Mgnh6M');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');