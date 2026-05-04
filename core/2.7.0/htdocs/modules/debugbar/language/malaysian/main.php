<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ms

define('_MD_DEBUGBAR_DEBUG', 'Nyahpepijat');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Fail disertakan');
define('_MD_DEBUGBAR_PHP_VERSION', 'Versi PHP');
define('_MD_DEBUGBAR_NONE', 'Tiada');
define('_MD_DEBUGBAR_ERRORS', 'Ralat');
define('_MD_DEBUGBAR_DEPRECATED', 'Ditamatkan');
define('_MD_DEBUGBAR_QUERIES', 'Pertanyaan');
define('_MD_DEBUGBAR_BLOCKS', 'Blok');
define('_MD_DEBUGBAR_EXTRA', 'Tambahan');
define('_MD_DEBUGBAR_TIMERS', 'Pemasa');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s mengambil masa %s saat untuk dimuatkan.');
define('_MD_DEBUGBAR_TOTAL', 'Jumlah');
define('_MD_DEBUGBAR_NOT_CACHED', 'Tidak dicache');
define('_MD_DEBUGBAR_CACHED', 'Dicache (dijana semula setiap %s saat)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(rentetan kosong)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool BENAR');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool SALAH');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Pertanyaan pangkalan data');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Penggunaan memori');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d pertanyaan');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d pendua)');
define('_MD_DEBUGBAR_BYTES', '%s bait');
define('_MD_DEBUGBAR_DB_VERSION', 'versi %s');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Nombor ralat: %s Mesej ralat: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Ralat #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Pengecualian');
define('_MD_DEBUGBAR_RAY_QUERY', 'Pertanyaan #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LAMBAT');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Sekat (dicache %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Sekat (bukan cache)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Buang');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Konteks templat');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(tiada pemboleh ubah templat)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Direktori "modul/debugbar/%s" tidak dibuat');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Gagal membuat direktori "%s" semasa salinan aset');
