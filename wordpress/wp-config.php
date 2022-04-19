<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'urotec' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'urotec' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'YYWtOc5B]4[y]RCQ' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8U9Zt=)2)V0uw2(;8XSVz_z!(~nGg5EWToqZj?p` (i4BH*x1~0??^BB7y.7XjF4' );
define( 'SECURE_AUTH_KEY',  '@;Yrq=6[5^sysvWG=<%+p>f:,T<V~bW+9ovy#l$Q!28|Hwh0C9HPG0(<^10g8gYF' );
define( 'LOGGED_IN_KEY',    '!DbvtV>%-Ht+#: fs3yo3r=ONx[k0[HB@mE=*jNu)x<+B<&FnJL&fN+-:R-!c~Jv' );
define( 'NONCE_KEY',        '/%XcKmzBA)fAQ`c=|3_`agZGG^au@ik>HA<fUP;/l 3VT}Bye.|@15< 9(K3 oR%' );
define( 'AUTH_SALT',        'W&JnMhco7ZfHI ~853x/gEsA;30*,9g18AvRlDa|Kxl`Ol/bc<pI7&0tFbY4@y#8' );
define( 'SECURE_AUTH_SALT', ')J/N=NSGpRi_V0o; iil5DFZN6M<4ixS+X3loQL jMapp>U~gk-*+z~;2 s;A3/P' );
define( 'LOGGED_IN_SALT',   'Ake~pXWDg7yv {&l_Lk^f=*/RH(1du*yp7}slER=.rsoc`Jc+g`VPOIj4otW~Cqb' );
define( 'NONCE_SALT',       'YrlSoZM@ i0WwygwuUE5$9`eIVlm>n-[Yy|~(fC8X2[faVimgU621NB_>c.p`YlV' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'urotec_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
