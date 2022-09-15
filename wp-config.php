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
define( 'DB_NAME', 'energia-solar' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '3ieODbK%Hb!@2&CBot-ac|C9%Sd2ZK#_fI=i^XW766<k>*`ocYI^2l5wc&Z<&dq5' );
define( 'SECURE_AUTH_KEY',  ':Q=irPf>66RT+%M3gyb8pqkpxsvJNiETxNo}`utX<](B`6rP|yiw*H?d <C|}-~l' );
define( 'LOGGED_IN_KEY',    '0aD?IYcH]USx?rTPpX9rM{dXZ)P{.y);et(*diy$/pW+4CDupyQ!39oWpPW^fDsZ' );
define( 'NONCE_KEY',        'Za$UmyBbL8x>R0/)=3=a>Q?f$Ep7@{D!0`F=Z=Qn0QwYj440RV83uL5eNPd&m2!}' );
define( 'AUTH_SALT',        'Kn:1LQCmzLsrTfeZ-cBPl(?[%y=ds;wmjt,lI1^5nt?u*r46Kj;nLnh|FTK;[nCE' );
define( 'SECURE_AUTH_SALT', '|:L0wO@Chn#%M,9z`B(9=g.Igzk9/[Z+scGy&&!Y+R_Q0H6f9o-Cp-P&&_u M8T/' );
define( 'LOGGED_IN_SALT',   'BtkRO#~=Fo9*=sjoCY:dL3SR!vBQQz5%z$`Z[.aJ]1cnI>w04otulK9[;zy2+7C?' );
define( 'NONCE_SALT',       'B)h35>+:1/U=Lp59+];zhlp,>U(6<Qx.gKkhf-OeO#Io%.zG/#AIn ;;[s<e&#3Y' );

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
