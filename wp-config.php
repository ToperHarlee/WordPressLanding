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
define( 'DB_NAME', 'timber-wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dEfz?fT3dk^[T,Un;0H>gD;h)qQ#>e1j.Kx}d|!PQ_5rE3ZE;NpFI$z&YY+>6e4d' );
define( 'SECURE_AUTH_KEY',  'U:yfUCuockQ}~iSO@z.64$HmLFAYO6gr_7-0u7t=P|s3j-JxtzLR:NgvS@_bT=P;' );
define( 'LOGGED_IN_KEY',    '-OF f{OE+R72@[>uU!|T~*1+(>Cq.%APKc@C6)JD.K]K8Pn$FOe|m63R5+BPC{.p' );
define( 'NONCE_KEY',        'UPSw5kbZ,lCgAeJBD5~7qI;QIAub-djd7-g!bbIDs}4; [D->{g{YNPyAT`=*:&w' );
define( 'AUTH_SALT',        '$|1)fa8L@sen3,i6,f7# E-RnV;WjFtTxp#,Y(VJ73xhdA6/6q_cX>b}IqJDo2sX' );
define( 'SECURE_AUTH_SALT', 'buu=xFv-@q6^ejG26aXgX|ygSYk_z@t6iE_wc^Dj1?lO{+=LR`-X}weDDMT01PD-' );
define( 'LOGGED_IN_SALT',   'evU]e$gE^fomI^/>0^kZQtOiacdSg:%?J4]:Y)b6!IGs:=pvN$4j!4f~/-ku8TN|' );
define( 'NONCE_SALT',       '%XGq,foud,(lXQxMCB&9;fEF<Kuc^Dy5QN`7XGrW~dc?LOzt=m$TOnI|=uGi#*4X' );

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
