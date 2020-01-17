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
define( 'DB_NAME', 'projec4' );

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
define( 'AUTH_KEY',         '5YbP*$aAKp>Op*T?/zxiZ{/{HeXB]U1XE}J6lyrBI3f~5EuJV^8R>Jnoxen6TH|x' );
define( 'SECURE_AUTH_KEY',  'WF_l/fH9LBVcqBEFI4y-^_M4>1H;R:m@>FCSLkd9dN0W{hRaP*6{Rx!!m*5*<?w*' );
define( 'LOGGED_IN_KEY',    'g.XWB;:H/W8>SO!IL9(*6|<;*(&g(i-}P`wJLTgY~IH7Yym*^~2zCBKC,Xy[#/Of' );
define( 'NONCE_KEY',        'qyDVRu9z^;nL65&zuSw+e%1sin(@`j1GSMl2jm376VAyN#EF|3RJ`<$a-Vq)}E`R' );
define( 'AUTH_SALT',        '+uVMrl]KhTm%T7#yR,8$]tIoCQNf91,;ceUu:E`,fz1N8#o?3EyQ-Ef=ri=j^xIk' );
define( 'SECURE_AUTH_SALT', '#4nlG0).M:_:j~-f<^J%)nz)WPW56iuRsyQ*OU{J*7usQN;7Ht{@1_e<#S&?$q3U' );
define( 'LOGGED_IN_SALT',   'FoPRkUewBw `3).nVf)~:l]th3@zW6Y?[Rix-w<Zs?8 E3_J{+VqT|g~9V`]S?We' );
define( 'NONCE_SALT',       'j$v{f}WOZ|T;TH:9N)tmE-YUZG3O/KKULzjEx1C]0A-|z:nCxQd6It3rrxn)ycA5' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wpLoft_';

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
