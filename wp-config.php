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
 * * Настройки базы данных
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
define( 'DB_NAME', 'Cleantruck' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '76{19/ESy#`P1aZ&oN9~Qvsr|I;xbdk?z#fi~puH`Ir{>j<1py/^l/t-iO7-R/<v' );
define( 'SECURE_AUTH_KEY',  '&Zvc42SSzIqsGUe=+%9ga)%3~K@4AU1v+5u*VuQXW -SkdY0<O-K-DVJlm#VAeLo' );
define( 'LOGGED_IN_KEY',    'nSlZZ}1Epw&CHoI(93bgzRaQuYcaI_U;#)nNlJF)Tt*mgnA+QON$Wg5]Pe;Zp.H#' );
define( 'NONCE_KEY',        'D8F!~>W<CWy@ecQa4|W~mZ_1,&:<bpH#jr@=:h*V*!;@>g[vpNpPwkT``/~C8nc-' );
define( 'AUTH_SALT',        'kMY|+Tqo@fI]|E;>:EI/4etl|yHjk7O&PzuU{]k}I9|=g=9?O,d[eNn{F@,cVzcy' );
define( 'SECURE_AUTH_SALT', '*}Hm!AWNi=]yj/03mmBY2Bot*AlBxq[S!#Aqxzi?L rfI-ay7Ga(UJ%_gPgG.4$)' );
define( 'LOGGED_IN_SALT',   '[A,p`fJk{4:eV+JYrF?/N*!k1O%n^0BSJb^do~zJ?`R IXr{P9eun__SEYBl;mkb' );
define( 'NONCE_SALT',       't63)0l:mt.%_{:h_%I]37`~nJktq{lJ+oKUTBmD(&v{L&yF91zknA4-7yo#;8s{I' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
