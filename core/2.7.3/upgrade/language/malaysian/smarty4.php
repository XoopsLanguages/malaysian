<?php

// _LANGCODE: ms
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 Migrasi');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Keputusan Pengimbas');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Jalankan Imbasan');
define('_XOOPS_SMARTY4_SCANNER_END', 'Pengimbas Keluar');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Peraturan');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Perlawanan');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Fail');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Kiraan Betulkan');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Semakan manual diperlukan');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Boleh dibetulkan secara automatik: setiap pembolehubah item akan dinamakan semula dengan menambahkan "_item" (mis. "foo" menjadi "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Tidak Boleh Ditulis');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Pilihan Imbas Semula');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Klik kotak pilihan "Ya" di bawah dan kemudian klik butang Jalankan Imbas untuk cuba membetulkan sebarang isu yang ditemui secara automatik.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Tandakan Selesai');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Direktori Templat (pilihan)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Sambungan Templat (pilihan)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 memperkenalkan perubahan ketara: Smarty 4</h3>

<p>Malangnya, perubahan ini berpotensi mengganggu beberapa tema lama. Oleh itu, sebelum meneruskan dengan naik taraf, sila pastikan anda mengikuti langkah berikut:

<li>Jalankan preflight.php untuk menyemak sebarang tema atau templat modul yang sudah lapuk.</li>
<li>Jika sebarang isu dikenal pasti, rujuk dokumen ini untuk memahami pengubahsuaian yang diperlukan sebelum meneruskan peningkatan.</li>
<li>Selepas membuat perubahan yang diperlukan, jalankan preflight.php sekali lagi.</li>
<li>Jika tiada lagi isu, anda boleh memulakan proses naik taraf.</li>
</p>
EOT,
);
