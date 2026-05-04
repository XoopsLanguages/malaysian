<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: ms
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Tunjuk/sembunyikan teks bantuan');
// License
//define('LICENSE_NOT_WRITEABLE', 'Fail lesen "%s" TIDAK boleh ditulis!');
//define('LICENSE_IS_WRITEABLE', '%s Lesen boleh ditulis.');
// Configuration check page
define('SERVER_API', 'API Pelayan');
define('PHP_EXTENSION', 'sambungan %s');
define('CHAR_ENCODING', 'Pengekodan aksara');
define('XML_PARSING', 'Penghuraian XML');
define('REQUIREMENTS', 'Keperluan');
define('_PHP_VERSION', 'Versi PHP');
define('RECOMMENDED_SETTINGS', 'Tetapan yang disyorkan');
define('RECOMMENDED_EXTENSIONS', 'Sambungan yang disyorkan');
define('SETTING_NAME', 'Nama tetapan');
define('RECOMMENDED', 'Disyorkan');
define('CURRENT', 'Semasa');
define('RECOMMENDED_EXTENSIONS_MSG', 'Sambungan ini tidak diperlukan untuk kegunaan biasa, tetapi mungkin diperlukan untuk meneroka
 beberapa ciri khusus (seperti sokongan berbilang bahasa atau RSS). Oleh itu, adalah disyorkan untuk memasangnya.');
define('NONE', 'Tiada');
define('SUCCESS', 'Berjaya');
define('WARNING', 'Amaran');
define('FAILED', 'Gagal');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Wizard Pemasangan XOOPS');
define('LANGUAGE_SELECTION', 'Pemilihan bahasa');
define('LANGUAGE_SELECTION_TITLE', 'Pilih bahasa anda');        // L128
define('INTRODUCTION', 'Pengenalan');
define('INTRODUCTION_TITLE', 'Selamat datang ke Wizard Pemasangan XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Semakan konfigurasi');
define('CONFIGURATION_CHECK_TITLE', 'Menyemak konfigurasi pelayan anda');
define('PATHS_SETTINGS', 'Tetapan Laluan');
define('PATHS_SETTINGS_TITLE', 'Tetapan Laluan');
define('DATABASE_CONNECTION', 'Sambungan Pangkalan Data');
define('DATABASE_CONNECTION_TITLE', 'Sambungan Pangkalan Data');
define('DATABASE_CONFIG', 'Konfigurasi Pangkalan Data');
define('DATABASE_CONFIG_TITLE', 'Konfigurasi Pangkalan Data');
define('CONFIG_SAVE', 'Simpan Konfigurasi');
define('CONFIG_SAVE_TITLE', 'Menyimpan konfigurasi sistem anda');
define('TABLES_CREATION', 'Penciptaan jadual');
define('TABLES_CREATION_TITLE', 'Penciptaan jadual pangkalan data');
define('INITIAL_SETTINGS', 'Tetapan awal');
define('INITIAL_SETTINGS_TITLE', 'Sila masukkan tetapan awal anda');
define('DATA_INSERTION', 'Pemasukan data');
define('DATA_INSERTION_TITLE', 'Menyimpan tetapan anda ke pangkalan data');
define('WELCOME', 'Selamat datang');
define('WELCOME_TITLE', 'Selamat datang ke tapak XOOPS anda');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Laluan fizikal XOOPS');
define('XOOPS_URLS', 'Lokasi web');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS mendokumenkan laluan fizikal akar');
define('XOOPS_ROOT_PATH_HELP', 'Laluan fizikal ke direktori XOOPS dokumen (disediakan) TANPA garis miring mengekor');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS direktori perpustakaan');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS direktori fail data');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Lokasi tapak web (URL)'); // L56
define('XOOPS_URL_HELP', 'Utama URL yang akan digunakan untuk mengakses pemasangan XOOPS anda'); // L58
define('LEGEND_CONNECTION', 'Sambungan pelayan');
define('LEGEND_DATABASE', 'Pangkalan Data'); // L51
define('DB_HOST_LABEL', 'Nama hos pelayan');    // L27
define('DB_HOST_HELP', 'Nama hos pelayan pangkalan data. Jika anda tidak pasti, <em>localhost</em> berfungsi dalam kebanyakan kes'); // L67
define('DB_USER_LABEL', 'Nama pengguna');    // L28
define('DB_USER_HELP', 'Nama akaun pengguna yang akan digunakan untuk menyambung ke pelayan pangkalan data'); // L65
define('DB_PASS_LABEL', 'Kata Laluan');    // L52
define('DB_PASS_HELP', 'Kata laluan akaun pengguna pangkalan data anda'); // L68
define('DB_NAME_LABEL', 'Nama pangkalan data');    // L29
define('DB_NAME_HELP', 'Nama pangkalan data pada hos. Pemasang akan cuba mencipta pangkalan data jika tidak wujud'); // L64
define('DB_CHARSET_LABEL', 'Set aksara pangkalan data');
define('DB_CHARSET_HELP', 'MySQL termasuk sokongan set aksara yang membolehkan anda menyimpan data menggunakan pelbagai set aksara dan melakukan perbandingan mengikut pelbagai koleksi.');
define('DB_COLLATION_LABEL', 'Kolasi pangkalan data');
define('DB_COLLATION_HELP', 'Pengumpulan ialah satu set peraturan untuk membandingkan aksara dalam set aksara.');
define('DB_PREFIX_LABEL', 'Awalan jadual');    // L30
define('DB_PREFIX_HELP', 'Awalan ini akan ditambahkan pada semua jadual baharu yang dibuat untuk mengelakkan konflik nama dalam pangkalan data. Jika anda tidak pasti, hanya kekalkan lalai'); // L63
define('DB_PCONNECT_LABEL', 'Gunakan sambungan berterusan');    // L54
define('DB_PCONNECT_HELP', "Lalai ialah 'Tidak'. Biarkan kosong jika anda tidak pasti"); // L69
define('DB_DATABASE_LABEL', 'Pangkalan Data');
define('LEGEND_ADMIN_ACCOUNT', 'Akaun pentadbir');
define('ADMIN_LOGIN_LABEL', 'Log masuk admin'); // L37
define('ADMIN_EMAIL_LABEL', 'E-mel admin'); // L38
define('ADMIN_PASS_LABEL', 'Kata laluan admin'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Sahkan kata laluan'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Sebelumnya'); // L42
define('BUTTON_NEXT', 'Teruskan'); // L47
// Messages
define('XOOPS_FOUND', '%s ditemui');
define('CHECKING_PERMISSIONS', 'Menyemak kebenaran fail dan direktori...'); // L82
define('IS_NOT_WRITABLE', '%s TIDAK boleh ditulis.'); // L83
define('IS_WRITABLE', '%s boleh ditulis.'); // L84
define('XOOPS_PATH_FOUND', 'Laluan ditemui.');
//define('READY_CREATE_TABLES', 'Tiada XOOPS jadual dikesan.<br>Pemasang kini bersedia untuk mencipta XOOPS jadual sistem.');
define('XOOPS_TABLES_FOUND', 'Jadual sistem XOOPS sudah wujud dalam pangkalan data anda.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS jadual sistem telah dibuat.');
//define('READY_INSERT_DATA', 'Pemasang kini bersedia untuk memasukkan data awal ke dalam pangkalan data anda.');
//define('READY_SAVE_MAINFILE', 'Pemasang kini bersedia untuk menyimpan tetapan yang ditentukan ke <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Tetapan disimpan');
define('SAVED_MAINFILE_MSG', 'Pemasang telah menyimpan tetapan yang ditentukan ke <em>mainfile.php</em> dan <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS data ditemui dalam pangkalan data.');
define('DATA_INSERTED', 'Data awal telah dimasukkan ke dalam pangkalan data.');
// %s is database name
define('DATABASE_CREATED', 'Pangkalan data %s dibuat!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Tidak dapat mencipta jadual %s'); // L118
define('TABLE_CREATED', 'Jadual %s dibuat.'); // L45
define('ROWS_INSERTED', '%d entri dimasukkan ke jadual %s.'); // L119
define('ROWS_FAILED', 'Gagal memasukkan %d entri ke jadual %s.'); // L120
define('TABLE_ALTERED', 'Jadual %s dikemas kini.'); // L133
define('TABLE_NOT_ALTERED', 'Gagal mengemas kini jadual %s.'); // L134
define('TABLE_DROPPED', 'Jadual %s jatuh.'); // L163
define('TABLE_NOT_DROPPED', 'Gagal memadamkan jadual %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Tidak dapat mengakses folder yang ditentukan. Sila sahkan bahawa ia wujud dan boleh dibaca oleh pelayan.');
define('ERR_NO_XOOPS_FOUND', 'Tiada pemasangan XOOPS boleh ditemui dalam folder yang ditentukan.');
define('ERR_INVALID_EMAIL', 'E-mel tidak sah'); // L73
define('ERR_REQUIRED', 'Maklumat diperlukan.'); // L41
define('ERR_PASSWORD_MATCH', 'Kedua-dua kata laluan tidak sepadan');
define('ERR_NEED_WRITE_ACCESS', 'Pelayan mesti diberi akses tulis kepada fail dan folder berikut<br>(iaitu <em>chmod 775 directory_name</em> pada pelayan UNIX/LINUX)<br>Jika ia tidak tersedia atau tidak dibuat dengan betul, sila buat secara manual dan tetapkan kebenaran yang betul.');
define('ERR_NO_DATABASE', 'Tidak dapat mencipta pangkalan data. Hubungi pentadbir pelayan untuk mendapatkan butiran.'); // L31
define('ERR_NO_DBCONNECTION', 'Tidak dapat menyambung ke pelayan pangkalan data.'); // L106
define('ERR_WRITING_CONSTANT', 'Gagal menulis pemalar %s.'); // L122
define('ERR_COPY_MAINFILE', 'Tidak dapat menyalin fail pengedaran ke %s');
define('ERR_WRITE_MAINFILE', 'Tidak dapat menulis ke dalam %s. Sila semak kebenaran fail dan cuba lagi.');
define('ERR_READ_MAINFILE', 'Tidak dapat membuka %s untuk membaca');
define('ERR_INVALID_DBCHARSET', "Set aksara '%s' tidak disokong.");
define('ERR_INVALID_DBCOLLATION', "Pengumpulan '%s' tidak disokong.");
define('ERR_CHARSET_NOT_SET', 'Set aksara lalai tidak ditetapkan untuk pangkalan data XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Sokongan');
define('LOGIN', 'Pengesahan');
define('LOGIN_TITLE', 'Pengesahan');
define('USER_LOGIN', 'Log masuk pentadbir');
define('USERNAME', 'Nama pengguna :');
define('PASSWORD', 'Kata laluan :');
define('ICONV_CONVERSION', 'Penukaran set aksara');
define('ZLIB_COMPRESSION', 'Mampatan Zlib');
define('IMAGE_FUNCTIONS', 'Fungsi imej');
define('IMAGE_METAS', 'Data meta imej (exif)');
define('FILTER_FUNCTIONS', 'Fungsi penapis');
define('ADMIN_EXIST', 'Akaun pentadbir sudah wujud.');
define('CONFIG_SITE', 'Konfigurasi laman');
define('CONFIG_SITE_TITLE', 'Konfigurasi laman');
define('MODULES', 'Pemasangan modul');
define('MODULES_TITLE', 'Pemasangan modul');
define('THEME', 'Pilih tema');
define('THEME_TITLE', 'Pilih tema lalai');
define('INSTALLED_MODULES', 'Modul-modul berikut telah dipasang.');
define('NO_MODULES_FOUND', 'Tiada modul ditemui.');
define('NO_INSTALLED_MODULES', 'Tiada modul dipasang.');
define('THEME_NO_SCREENSHOT', 'Tiada tangkapan skrin ditemui');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Kekuatan kata laluan');
define('PASSWORD_DESC', 'Kata laluan tidak dimasukkan');
define('PASSWORD_GENERATOR', 'Penjana kata laluan');
define('PASSWORD_GENERATE', 'Jana');
define('PASSWORD_COPY', 'Salin');
define('PASSWORD_VERY_WEAK', 'Sangat lemah');
define('PASSWORD_WEAK', 'Lemah');
define('PASSWORD_BETTER', 'Lebih baik');
define('PASSWORD_MEDIUM', 'Sederhana');
define('PASSWORD_STRONG', 'Kuat');
define('PASSWORD_STRONGEST', 'Paling kuat');
//2.5.7
define('WRITTEN_LICENSE', 'Menulis XOOPS %s Kunci Lesen: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Cuba semula');
define('CHMOD_CHGRP_IGNORE', 'Guna juga');
define('CHMOD_CHGRP_ERROR', 'Pemasang mungkin tidak dapat menulis fail konfigurasi %1$s.<p>PHP sedang menulis fail di bawah pengguna %2$s dan kumpulan %3$s.<p>Direktori %4$s/ mempunyai pengguna %5$s dan kumpulan %6$s');
//2.5.9
define("CURL_HTTP", "Perpustakaan URL Pelanggan (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Domain Kuki untuk Tapak Web');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domain untuk menetapkan kuki. Mungkin kosong, hos penuh daripada URL (www.example.com) atau domain berdaftar tanpa subdomain (example.com) untuk dikongsi merentas subdomain (www.example.com dan blog.example.com.)');
define('INTL_SUPPORT', 'Fungsi pengantarabangsaan');
define('XOOPS_SOURCE_CODE', "XOOPS pada GitHub");
define('XOOPS_INSTALLING', 'Memasang');
define('XOOPS_ERROR_ENCOUNTERED', 'Ralat');
define('XOOPS_ERROR_SEE_BELOW', 'Lihat di bawah untuk mesej.');
define('MODULES_AVAILABLE', 'Modul tersedia');
define('INSTALL_THIS_MODULE', 'Tambah %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Tidak dapat menyalin fail konfigurasi %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Tapak');
define('_WEBSITE_SLOGAN', 'Hanya gunakannya!');
define('_WEBSITE_META_KEYWORDS', 'xoops, rangka kerja aplikasi web, cms, sistem pengurusan kandungan');
define('_WEBSITE_FOOTER', "Dikuasakan oleh XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>Projek XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'Hak Cipta © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS ialah skrip portal sumber terbuka berasaskan Berorientasikan Objek dinamik yang ditulis dalam PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'OOPS');
