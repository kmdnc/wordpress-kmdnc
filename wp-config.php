<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'heroku_e0a95b9a6fe1acd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'bbc0871be78451' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'dc019df7' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'eu-cdbr-west-03.cleardb.net' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j3*x](INQl.cIh_%+.;gA ;+GvW7Klc[NwkhaxfOG2`aOC}8+,~T>(2aTjz7]-4j');
define('SECURE_AUTH_KEY',  'smY*B0k<e%#Hhyigp{IVH^N~JfFJ@|qcvB*3OR_~[8#74<L{37*<p?MeV?|H=Bh2');
define('LOGGED_IN_KEY',    'HO/}Ex49[=m:jC-]zWEC(tv1[f^0sAH4J])nuX`^;,ZZNEh;S]N9kg9/(pVMLO=|');
define('NONCE_KEY',        'K/y,8~,sZ)Q: x54]k5vH6w 6]E+@D3j,(Jq2i1vZ3ps.Q+&/;1s8lpTH*oTRj0|');
define('AUTH_SALT',        '?/2Z$ftk:bn,5SXjmO7OCQv3Om}N0]JRX=<,%~!gB-zeq/##_5k{<M2qM<2c.d`X');
define('SECURE_AUTH_SALT', '&,OKB~A]IWZYH-vIy}1LXUZF`dDQj-2E)|O=pBLlXszKDDSlGedbD=2m=0A hy)C');
define('LOGGED_IN_SALT',   'Y9%=4a,<XUijeLaL-^w^Vg#Rn 4GOl(a#sz3jER/w=WiO|5Zprl07.kWK-46=L61');
define('NONCE_SALT',       '{Dro66z&[jS| SlTyY{# Z7xYL[A^|Z?6Xgvy-V.=;ej3-705:aKA PiiwousJ=j');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
