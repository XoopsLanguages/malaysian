<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Langkah kedua');
define('_US_2FA_PROMPT', 'Masukkan kod daripada aplikasi pengesahan anda');
define('_US_2FA_CODE', 'Kod pengesahan');
define('_US_2FA_PROMPT_EMAIL', 'Kami telah menghantar kod enam digit ke %s. Masukkan di bawah.');
define('_US_2FA_CODE_EMAIL', 'Kod daripada e-mel anda');
define('_US_2FA_SEND', 'Hantar kod baharu');
define('_US_2FA_SENT', 'Kod baharu telah dihantar ke %s. Sah selama sepuluh minit.');
define('_US_2FA_SEND_WAIT', 'Kod telah dihantar kurang daripada seminit lalu. Semak peti masuk dan folder spam anda sebelum meminta kod lain.');
define('_US_2FA_SEND_FAILED', 'Kod tidak dapat dihantar sekarang. Cuba lagi sebentar lagi, atau gunakan kod pemulihan.');
define('_US_2FA_EMAIL_SUBJECT', '%s: kod log masuk anda');
define('_US_2FA_EMAIL_BODY', 'Kod log masuk anda untuk %s ialah:

%s

Sah selama %d minit dan berfungsi sekali sahaja. Jika anda tidak memintanya, abaikan mesej ini dan pertimbangkan untuk menukar kata laluan anda.');
define('_US_2FA_RECOVERY', 'Gunakan kod pemulihan sebagai gantinya');
define('_US_2FA_RECOVERY_HINT', 'Setiap kod pemulihan berfungsi sekali sahaja. Menggunakan satu akan menghantar e-mel kepada anda.');
define('_US_2FA_SUBMIT', 'Teruskan');
define('_US_2FA_STARTAGAIN', 'Log masuk ini telah tamat tempoh atau terganggu. Sila mula semula.');
define('_US_2FA_BACKTOLOGIN', 'Kembali ke borang log masuk');
define('_US_2FA_BADCODE', 'Kod itu tidak diterima.');
define('_US_2FA_LOCKED', 'Terlalu banyak percubaan. Langkah kedua dikunci selama lima belas minit; kod pemulihan masih berfungsi.');
define('_US_2FA_UNAVAILABLE', 'Langkah kedua tidak tersedia sekarang. Kod pemulihan masih berfungsi, atau hubungi pentadbir laman.');
define('_US_2FA_REQUIRED', 'Akaun ini telah mengaktifkan pengesahan dua faktor. Sila log masuk melalui halaman log masuk laman.');
define('_US_2FA_HTTP_LOGIN', 'Tetingkap timbul ini tidak dapat melengkapkan log masuk dua faktor melalui HTTP kerana kata laluan anda akan dihantar tanpa penyulitan. Gunakan log masuk laman sebagai gantinya, atau minta pentadbir mendayakan HTTPS untuk laman.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: langkah kedua dikunci');
define('_US_2FA_LOCKED_MAIL_BODY', 'Lima kod langkah kedua yang salah telah dimasukkan untuk akaun anda di %s daripada %s. Langkah kedua dikunci selama lima belas minit. Jika ini bukan anda, tukar kata laluan anda.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: kod pemulihan telah digunakan');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Kod pemulihan telah digunakan untuk log masuk ke akaun anda di %s daripada %s. Kod itu tidak lagi berfungsi. Jika ini bukan anda, tukar kata laluan anda dan set semula kod pemulihan anda.');
