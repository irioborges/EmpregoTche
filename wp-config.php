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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bage3921_devnet');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'bage3921_root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'q8s46ZdgT4');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '5o@=?/yWPM$@)cXT<q,N::oZa-@:*M[H2MK|>ly&PnTgq?87X)hM%KZ>/),[])dD');
define('SECURE_AUTH_KEY',  '*Sqo|pJ=>*#jtcz7x.+!HaicGCF/sejF_%!*4].,qX,`CO<_PX+f:23UG[l|UEvK');
define('LOGGED_IN_KEY',    '*Sd?c]_+M+BlCgw-Xdww{@}7z=^/k1k{pyjDRRbrXrCd~g[zamMryE;0aDt01SO!');
define('NONCE_KEY',        ' Ajpvq4o=UaB{)4i-[f:V7n{cJWX}PS;T 5v-zm5NDwV`cq(pzm49iUM.8+1u]59');
define('AUTH_SALT',        '`PQk>Gn[HV<S>R?DZCi921m4#jPu$5z+9Pz~&8]8%8,,AHcXNyb*mRk_a*#-Bq=v');
define('SECURE_AUTH_SALT', 'NpX6Vn!x0fWosoy>w]EJkx/klnxbMCX6Ms1Odpy(Y=2<^<%;Q.fGm2z {85f&}6*');
define('LOGGED_IN_SALT',   '>$4$?`[F(:D0_r`*eEZZV|*L!$6Pw]q(Q;U7E5-v;9uI3(L)ov`.jt0F%W8HYCi(');
define('NONCE_SALT',       'uO>s#6?#xf7:QP7Xa+g2uC}sQ#*H7MOF2&y})#kv8^6cOQRG3M2@kBTu~]03s;/o');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
