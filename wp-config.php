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
define('DB_NAME', 'wp-fr-test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@i_;TR9[yFT.jV(8#q9S.=q+QU(h3srJkbdU1L1I{D1?X wE( @&Zkm~ExAD#{% ');
define('SECURE_AUTH_KEY',  '/`q_5..a+E)(Na(7!@X,jLCz=aPndo4Lhl~wwk>i{,rmv-y!X. V+$P^IDnW~1}|');
define('LOGGED_IN_KEY',    'y[PC8upP=bIg1,t4*6_yBlA%7)&rqm81?uc)j-/7=jLbqFfj6al$iQ}MBvd]c;;U');
define('NONCE_KEY',        '[PFZCMkB2oL0fKU^nmFa6{Tg2YG]+|P.%Zcn{z{*;!@6Z*Wc01oP+(V5<HaLv{{e');
define('AUTH_SALT',        'V9/b?Kx?nBl)lcMAo#)+*v1y - 5FOBQ[.`!zeB4k4/Et~]trYrTI#~4ptx7q=|.');
define('SECURE_AUTH_SALT', '(FMbSws!YxM!tFV(Ms],OYVNENQ~KwirBzZf8( f4uqX0B8^G6[tuvwL=X<-tgAk');
define('LOGGED_IN_SALT',   ' @AJwwoJG?`a$48xKE?P}r<5BE$ @5w>m*|4!.t~kij6ltPq&cTE.sKL6YR!_g6u');
define('NONCE_SALT',       '<>5jzSPMqR+3LeP!NsS=Z+4A?jh3!e6`(P^]mwpr`upzV9uph|bs8w8se$|r)UOb');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
