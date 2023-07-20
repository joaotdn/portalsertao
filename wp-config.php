<?php
// Begin AIOWPSEC Firewall
if (file_exists('/home/vol18_2/infinityfree.com/if0_34408553/htdocs/aios-bootstrap.php')) {
	include_once('/home/vol18_2/infinityfree.com/if0_34408553/htdocs/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
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
define('DB_NAME', 'if0_34408553_portalsertao');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'if0_34408553');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'RnMS98wxaAz');

/** Nome do host do MySQL */
define('DB_HOST', 'sql212.infinityfree.com');

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
define('AUTH_KEY',         'zlDbBe!f1}V`3d 0Qqz;Gd,R?N*.Wg? ,&F14wG)0|D3Y=s$5}Yf%~16EnvfK7D7');
define('SECURE_AUTH_KEY',  'wWcX<d/Y={x`WI*?:LDn ui@gye.DEYiE@,VixP.6C[f?4`npL*OAx%!T5N&b6e|');
define('LOGGED_IN_KEY',    '#kcKP{yS+54m2PFN6#~kT ^fCG-<heBoQ8|hsr/|pasQla0uB==[JMW1z,esiMlg');
define('NONCE_KEY',        'VnZ^zSi9z*07wHV!KM@&=VJ9{31!};w?V.Cz2:ODI>TdZFThToJ|W)=B5z]qnA=5');
define('AUTH_SALT',        'z_ zwLE!o|ZF-I[<4hSqTXOKdW[w^^}cp>|biy#cDt,O!A>V~(II/v]OP/p]jmh:');
define('SECURE_AUTH_SALT', 'F+u~O>zWi,>S#,2!lC,01%5{aM_@/g+yPh3@:c6u]>euM%QFx+*=,}hZ;ELjb@rv');
define('LOGGED_IN_SALT',   'y1gdUn(+Co>8Ttd.tv3XdW$5H#+!xlod5A43a!s}Tt` |;XKjE{h:jlZUZEuHdV[');
define('NONCE_SALT',       'uge+RePfKIn]z9P.YnVe:ylme5UGQI%M61:Yb %Jn1C*7?SU4b#77g}6u/,Cj4$m');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ps_';

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
define('WP_DEBUG', false);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */

define('WP_MEMORY_LIMIT', '2536M');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
