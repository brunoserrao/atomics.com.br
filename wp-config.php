<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'atomics');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/** Aumentando o limite da memoria para o woocomerce */
define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N|E+I8D!2H!*Wcp|Al>XTrh}da~T&?>P)$px1E>mw8HIs!7Iw_t|-c;8n a3)s+Z');
define('SECURE_AUTH_KEY',  'CYB[p:EjL94-q/[TEpsKlOic1LM|`|nh)|?}]grWPEm!XngzC{,1]/)WzWzUvh-#');
define('LOGGED_IN_KEY',    'D4Ja1$gDO9(x=_B6D,yh;DTCh|Gd|8%pzNXB-I.?eH4Zh<{$4udp,aB2er_M+#pi');
define('NONCE_KEY',        '|IO0ZB*j:$u1|}p4Z;{}d5Q*k2r2349`&[6l<~YjoSCu:W|0(:1oM83A8X`Oj_D-');
define('AUTH_SALT',        'q&gN5U:+eZwrQ2hY[ H|$Y)]*~XT!!qf8`@R!zHL/O@&<;NSDy+,>DSrLtjq WEV');
define('SECURE_AUTH_SALT', 'J1`1G2%zrI~<M#::-Gb8^l1os_%xmgRe9-0%Z+HcCD&D&|C[a=M[|UK]!Itu^8N-');
define('LOGGED_IN_SALT',   'w/DwrfVupK$3Qv@1OCK-56-w6|U|Nc-|dg,mbWV5ptv[..>5i]s+ChCW<+hBfq0$');
define('NONCE_SALT',       'hA5#isgz}Rj!5D~y6Sy#{h#2^^?+5O/%BT~AHJ8#&Lf`V*zu-&+!{R=FOu^mq*bn');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'atm_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
