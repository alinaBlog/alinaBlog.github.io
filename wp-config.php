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
define('DB_NAME', 'alinaBlog');

/** Имя пользователя MySQL */
define('DB_USER', 'missing');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '352700');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ':I-X/*2i+Dj7O,c!?-E0CN)}DiV@UwtB<=!wEo@m`iQ.Nhxg0[yS&RG&d{R(X|UK');
define('SECURE_AUTH_KEY',  'I12IRjSal?m.KQYC-RkTjci]|s}0]o{|={2[A=rWYzy|jptp_W]V/h[G7Qp]yNLv');
define('LOGGED_IN_KEY',    '!M,(TG7i(L&`14oY2YK.Dj&H178]Hjpz)G2ANm`?]R^Q@/o+6k0]&k5VbAhH^?:[');
define('NONCE_KEY',        ',b,*o/^~n?k]URAwM}T6[p7ff75~@g$)hi-7H,6Q<o:&505N&n-e+:.8J;t<Uc?p');
define('AUTH_SALT',        'OQm(Jvp$MS5#]EBHXBUn+5r X{iHkrShyC|7{i*%{q0z)W1RvpMdv3R 0d8}~kC%');
define('SECURE_AUTH_SALT', '=JD6zn<1O}!zw6u?/L@iE~GK/BQPYrP&nbcAouHD8MrJIOE2oM)dY.Qy]?F3sEh$');
define('LOGGED_IN_SALT',   'l] F?|dE=w +]R ^h.8n,#P;BAxS^77:[8@(L?;*3H.t%BX!pk!QJb?01VB%1-20');
define('NONCE_SALT',       'ae.|W!G=pj|+hYY?6`a^n1Z~u]#[%l-TnJ2Tcw0j|k.WuT,{3U-{2$JD`c]kZbPG');

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
