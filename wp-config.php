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
define( 'DB_NAME', 'cp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'g+vf?&bZH#%pkgGGI/o{`2@z}b[q:j}rNxxF{!Z#E8RAqr4Dz`!7g8aK0O[s<<sQ' );
define( 'SECURE_AUTH_KEY',  'DjzfXv:Xku=hZ07?$d88*cD^]tcqPcT/5^YFl;Xt m 0aN24YWie#<67fy0p(Q9V' );
define( 'LOGGED_IN_KEY',    'Y=c{>#6Ic~OO()fa_vIW=j58*)xY^.%KD6,;xo?nUKt<UlEF196w-(gqd1DC4QtY' );
define( 'NONCE_KEY',        'byaMc`]%Qn{a-=hCcxk<xlUe,bOtdizLsl:z$d=Kh63ti3_y)`*(2[F.$u8eR1T3' );
define( 'AUTH_SALT',        '<ML[d?DEA9MbCPk]@jAhWNB)]tW8a=^,%uz#E;aq;|6}g&.)wiQOaEe|mp4!1Mnr' );
define( 'SECURE_AUTH_SALT', 'Y8{I.NPVSZPUHR$^]h*3vVdYX470TA/JSh7sK6H_epi;Ey5?S2dE3k`+-AlI,dH3' );
define( 'LOGGED_IN_SALT',   'vwC(7BAc:(zUi#)8M;9u&GAEoA`]N!=^L1ChBgRX;wik~E/-8 p}@=(t{_D:Y:}h' );
define( 'NONCE_SALT',       '(I{>qV)k+ij]*woBJ6(aK8@x~@YS3nX?GBVU1u{+v(kUJ;TgfX_[iaS+t#3I6r~?' );

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
