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
define( 'DB_NAME', 'photographe_mota' );

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
define( 'AUTH_KEY',         'qPa:)FsWv> {${jtb79$C1m%%Y):Q!,JH[X)7<EMUd$!84I;vXElXCKf!N@df6] ' );
define( 'SECURE_AUTH_KEY',  '^uJ.~[n.jj(x.o~|GVnV;:]p*!Ve-B<;.:#ELl!q9ddd3|]^QZCz/_F`+CFau^G&' );
define( 'LOGGED_IN_KEY',    '>#dTq9qVKt=zW`G`b=*E,<yx4R,3~qFL,OlnlX6+wXf?`7XL-I.1IktpIDLA&5R}' );
define( 'NONCE_KEY',        '(.oDV$[vAl<25.7GWp}/tb90PpU%#/{3Rg/p^[0S]=%~S ]l(DhHLR>}oW#n~rLR' );
define( 'AUTH_SALT',        ';.d)<tEilO_Q$%6Jj$K14x=0A^RNYK2Qd7PQ4Q@Uqt.] }$@BxXj-W wxYvh|iEC' );
define( 'SECURE_AUTH_SALT', '(e}*V:3W3>sf>^ioC8y[Z)Z_&Lqlx@9k3pr6sdX5[t$ypyl*p$L=sq~Hh4o9|N=R' );
define( 'LOGGED_IN_SALT',   'm}Dp/XPMS,PyOcNl+2ahW ~Z6mHFWB4f@69@/yE2]AdcmCu4m&8Q~Ed;:1x$UwCa' );
define( 'NONCE_SALT',       'vb3:N3p:0$Lg~PrS[>1WNS$r6h}q=))_$8F|J#J9D)HSB<-UXORH8 Z_O;Hwbz%>' );
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
