<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Kebenaran');
define('_MD_A_MYMENU_MYPREFERENCES','Keutamaan');
// index.php
define('_AM_TH_DATETIME', 'Masa');
define('_AM_TH_USER', 'Pengguna');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Jenis');
define('_AM_TH_DESCRIPTION', 'Penerangan');
define('_AM_TH_BADIPS','IP Buruk<br><br><span style="font-weight:normal;">Tulis setiap IP satu baris<br>kosong bermakna semua IP dibenarkan</span>');
define('_AM_TH_GROUP1IPS','IP Dibenarkan untuk Kumpulan=1<br><br><span style="font-weight:normal;">Tulis setiap IP satu baris.<br>192.168. bermakna 192.168.*<br>kosong bermakna semua IP dibenarkan</span>');
define('_AM_LABEL_COMPACTLOG', 'Log padat');
define('_AM_BUTTON_COMPACTLOG', 'Padatkan!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Rekod pendua (IP,Jenis) akan dialih keluar');
define('_AM_LABEL_REMOVEALL', 'Buang semua rekod');
define('_AM_BUTTON_REMOVEALL', 'Buang semua!');
define('_AM_JS_REMOVEALLCONFIRM', 'Semua log dialih keluar sama sekali. Adakah anda benar-benar OK?');
define('_AM_LABEL_REMOVE', 'Alih keluar rekod yang disemak:');
define('_AM_BUTTON_REMOVE', 'Alih keluar!');
define('_AM_JS_REMOVECONFIRM', 'Alih keluar OK?');
define('_AM_MSG_IPFILESUPDATED', 'Fail untuk IP telah dikemas kini');
define('_AM_MSG_BADIPSCANTOPEN', 'Fail untuk bad IP tidak boleh dibuka');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Fail untuk membenarkan kumpulan=1 tidak boleh dibuka');
define('_AM_MSG_REMOVED', 'Rekod telah dibuang');
define('_AM_MSG_DELFAILED', 'Gagal memadamkan rekod');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Putar direktori konfigurasi boleh ditulis: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Pengurus Awalan');
define('_AM_MSG_DBUPDATED', 'Pangkalan data berjaya dikemas kini!');
define('_AM_CONFIRM_DELETE', 'Semua data akan digugurkan. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Jika anda ingin menukar awalan,<br> edit %s/data/secure.php secara manual.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Tidak selamat');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Jika anda boleh melihat imej -NG- atau pautan mengembalikan halaman biasa, XOOPS_TRUST_PATH anda tidak diletakkan dengan betul. Tempat terbaik untuk XOOPS_TRUST_PATH adalah di luar DocumentRoot. Jika anda tidak boleh berbuat demikian, anda perlu meletakkan .htaccess (NALAK DARI SEMUA) hanya di bawah XOOPS_TRUST_PATH sebagai cara kedua terbaik.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Semak bahawa PHP fail di dalam TRUST_PATH ditetapkan kepada baca sahaja (ia mestilah ralat 404,403 atau 500)');
define('_AM_ADV_REGISTERGLOBALS',"Jika 'HIDUP', tetapan ini mengundang pelbagai serangan suntikan. Jika anda boleh, tetapkan 'register_globals off' dalam php.ini, atau jika tidak boleh, buat atau edit .htaccess dalam direktori XOOPS anda:");
define('_AM_ADV_ALLOWURLFOPEN',"Jika 'HIDUP', tetapan ini membenarkan penyerang melaksanakan skrip arbitrari pada pelayan jauh.<br>Hanya pentadbir boleh menukar pilihan ini.<br>Jika anda seorang pentadbir, edit php.ini atau httpd.conf.<br><b>Contoh httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Lainnya, tuntut kepada pentadbir anda.");
define('_AM_ADV_USETRANSSID',"Jika 'HIDUP', ID Sesi anda akan dipaparkan dalam tag anchor dsb.<br>Untuk mengelakkan sesi hi-jack, tambahkan baris ke dalam .htaccess dalam XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Tetapan ini menjemput 'SQL Injections'.<br>Jangan lupa menghidupkan 'Force sanitizing *' ON dalam pilihan modul ini.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Pergi ke pengurus awalan');
define('_AM_ADV_MAINUNPATCHED', 'Anda harus mengedit mainfile.php anda seperti yang ditulis dalam README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Kilang pangkalan data anda sedia untuk DDBlayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Kilang pangkalan data anda belum bersedia untuk DBlayer Trapping anti-SQL-Injection. Beberapa tampalan diperlukan.');
define('_AM_ADV_SUBTITLECHECK', 'Semak sama ada Pelindung berfungsi dengan baik');
define('_AM_ADV_CHECKCONTAMI', 'Pencemaran');
define('_AM_ADV_CHECKISOCOM', 'Ulasan terpencil');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'dan letakkan di dalamnya baris di bawah:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Awalan');
define('_AM_PROTECTOR_TABLES', 'Jadual');
define('_AM_PROTECTOR_UPDATED', 'Dikemas kini');
define('_AM_PROTECTOR_COPY', 'Salin');
define('_AM_PROTECTOR_ACTIONS', 'Tindakan');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Larang IP pada rekod yang disemak:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Larangan!');
define('_AM_JS_BANCONFIRM', 'IP Larangan OK?');
define('_AM_MSG_BANNEDIP', 'IP telah diharamkan');
define('_AM_ADMINSTATS_TITLE', 'Ringkasan log Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Bulan Lepas');
define('_AM_ADMINSTATS_LAST_WEEK', 'Minggu Lepas');
define('_AM_ADMINSTATS_LAST_DAY', 'Hari Lepas');
define('_AM_ADMINSTATS_LAST_HOUR', 'Jam Terakhir');

//2.7.1 backfilled translations
