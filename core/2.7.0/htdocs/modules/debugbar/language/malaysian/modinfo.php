<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ms

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Pelaporan ralat dan analisis prestasi menggunakan PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Paparkan DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Aktifkan Debug Smarty');
define('_MI_DEBUGBAR_FILESDEBUG', 'Aktifkan tab fail disertakan');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Tunjukkan semua fail PHP yang dimuatkan semasa permintaan');
define('_MI_DEBUGBAR_SLOWQUERY', 'Ambang pertanyaan perlahan (saat)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Pertanyaan yang lebih perlahan daripada ini diserlahkan dengan merah (cth. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Pengelogan pertanyaan');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Semua pertanyaan atau hanya yang perlahan dan ralat');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Semua pertanyaan');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Hanya perlahan dan ralat');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Aktifkan integrasi Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Hantar data debug ke aplikasi Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Utama');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Tentang');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Kembali ke pentadbiran ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Gambaran keseluruhan');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Penafian');
\define('_MI_DEBUGBAR_LICENSE', 'Lesen');
\define('_MI_DEBUGBAR_SUPPORT', 'Sokongan');
