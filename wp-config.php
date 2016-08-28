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
define('DB_NAME', 'db575067857');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo575067857');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '00000000');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'db575067857.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ':2L3+ -CN?a|m !fA=C!+~!q q3rR^K-@|.a{Vy,+6>tGGu!Zzk{NLb[C+L8 /B/');
define('SECURE_AUTH_KEY',  'Rp6(!%zS[0~FFmZ4dh+$/gK6r);sa&etfPe)FFq$S4Q 4})X1<gg^^~){ ^`|bZ ');
define('LOGGED_IN_KEY',    '9Nt?b4i|xURhQ=I4WhPk-K`U>p*#rw8H@KjF+Y=x,_7c1)56oO|KA#T43I$y9}Fa');
define('NONCE_KEY',        'g`&v`sE;UiB=erfu|v5n0hV!9JjFFc,D{Z4,ySaXxWy,MV~cUm(8}Qp)G|rJ~3vT');
define('AUTH_SALT',        '^|KK*SxW/)[nS1vqa>q?FcnG8p}/Tti1uYvb1D^-Gn>7FC{}U:O%=uxDmI75}75f');
define('SECURE_AUTH_SALT', 'I9}(a2b+LLkXVhE%3A}+%AERK&e 9C8|Wt=m-i()xAV(6MCTy!@#n+UiiD`?-jij');
define('LOGGED_IN_SALT',   '+||<3?oWPysVwLbb#GjV-;uj+`M}BuOt<Dy?v9CGtz1xhtwD!;P0|51 %OlZmEI)');
define('NONCE_SALT',       '?OI/?]@/1Kgd>CDCh5w5`7b14F+sz1I~8H!oizF2ll-*zCk@_$Ib~p ClZR>|h^G');
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
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
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