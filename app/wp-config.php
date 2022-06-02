<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME',  $_ENV['WP_DB_NAME']);

/** Usuário do banco de dados MySQL */
define( 'DB_USER', $_ENV['WP_DB_USER']);

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', $_ENV['WP_DB_PASSWORD']);

/** Nome do host do MySQL */
define( 'DB_HOST',  $_ENV['WP_DB_HOST'] . ':3306');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

define('FORCE_SSL', true);
define('FORCE_SSL_ADMIN', true);
$_SERVER['HTTPS'] = 'on';

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']}E$2>$4^ J@SP|?.GNg6Gov3KA@c,0_b^xkz|OE4s$usT@Oe]I?Sg:K5RrlL%Z|' );
define( 'SECURE_AUTH_KEY',  '-/_QMDD Ai`)wK7ndqymFY(:%gec1<D0mw1NqUL;I8,&3]GUR$]p IyX|,J%t;iT' );
define( 'LOGGED_IN_KEY',    'vycn(j]x*FA4FW&6^H!<wg!?q2M/#+`sO*i-eM*E,Fk:~he<&GC-g][E_@,kjcyz' );
define( 'NONCE_KEY',        'F@{*3;+zMQFK[cI1xNWUrla`}Gl>`<jC@j+N0YScWE,*]78],ce%>>{z-yuO-8,#' );
define( 'AUTH_SALT',        '#ABk;5p1,J$ (;Nt;gd/|m5D>_KE$|q8jS3d&@)}F~vUuL:NfT&`WptpKqM %[WO' );
define( 'SECURE_AUTH_SALT', 'O:.*-d$z8fa?iU4#?2$+raLxih6[`X]xLElC+M*z2+KMgRuk(^o$;-*WmD4P1A,K' );
define( 'LOGGED_IN_SALT',   'i#JQW* g.N fE+;|(4e{dXk4jXfx|%`!vcXJkPd}oFIkyK%,kVJ>TWEHx CH8)>V' );
define( 'NONCE_SALT',       ';`h<(Nr~0*1XGvbBZ7?@isG>mznt<y./N2@iAE=e6M5-P7pmVVK5qk~ebc&5=r0#' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
