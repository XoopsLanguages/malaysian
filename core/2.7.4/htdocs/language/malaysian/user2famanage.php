<?php
/**
 * Two-factor management strings.
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

define('_US_2FAM_TITLE', 'Pengesahan dua faktor');
define('_US_2FAM_PASSWORD', 'Kata laluan semasa anda');
define('_US_2FAM_ENABLE', 'Sediakan pengesah');
define('_US_2FAM_CONFIRM', 'Sahkan pengesah');
define('_US_2FAM_CHOOSE', 'Pilih cara anda mahu menerima langkah kedua: aplikasi pengesahan, atau kod melalui e-mel.');
define('_US_2FAM_ENABLE_EMAIL', 'Gunakan kod e-mel');
define('_US_2FAM_EMAIL_HELP', 'Kod e-mel: kod enam digit dihantar ke %s setiap kali anda log masuk. Kurang selamat berbanding aplikasi pengesahan, kerana sesiapa sahaja yang boleh membaca e-mel anda boleh melepasi langkah ini.');
define('_US_2FAM_EMAIL_STEP', 'Kami telah menghantar kod enam digit ke %s. Masukkan di bawah untuk mengesahkan. Sah selama sepuluh minit.');
define('_US_2FAM_CONFIRM_EMAIL', 'Sahkan kod e-mel');
define('_US_2FAM_CODE_HELP_EMAIL', 'Kod enam digit daripada e-mel yang baru sahaja kami hantar kepada anda.');
define('_US_2FAM_ENABLED_EMAIL', 'Kod e-mel telah didaftarkan. Untuk membuat perubahan, masukkan kata laluan semasa anda dan kod yang kami e-mel kepada anda, atau kod pemulihan. Gunakan butang di bawah untuk meminta kod.');
define('_US_2FAM_SEND', 'Hantar kod kepada saya');
define('_US_2FAM_MANUAL', 'Kunci persediaan manual');
define('_US_2FAM_SCAN', 'Kod QR untuk aplikasi pengesahan anda');
define('_US_2FAM_STEP_APP', 'Anda memerlukan pengesah: mana-mana aplikasi atau pengurus kata laluan yang menjana kod sekali guna berasaskan masa (TOTP) akan berfungsi, pada telefon atau komputer anda. Jika anda belum mempunyainya lagi, pasang dahulu pilihan anda (cth. Google Authenticator, Microsoft Authenticator, Aegis atau FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Dalam aplikasi, tambah akaun: imbas kod QR ini, atau pilih kemasukan manual dan taip kunci persediaan yang ditunjukkan di bawah.');
define('_US_2FAM_STEP_CODE', 'Aplikasi kini menunjukkan kod enam digit yang berubah setiap 30 saat. Taip kod yang ditunjukkan sekarang ke dalam medan di bawah dan sahkan.');
define('_US_2FAM_CODE_HELP', 'Kod enam digit yang ditunjukkan oleh aplikasi pengesahan anda sekarang.');
define('_US_2FAM_HTTP', 'Sambungan ini menggunakan HTTP biasa. Kata laluan, sesi, kunci persediaan pengesah dan kod pemulihan anda boleh dipintas. Gunakan HTTPS apabila boleh.');
define('_US_2FAM_CODES', 'Simpan kod pemulihan ini sekarang');
define('_US_2FAM_CODES_HELP', 'Setiap kod berfungsi sekali sahaja. Kod ini tidak akan dipaparkan lagi. Simpan di tempat yang selamat, berasingan daripada akaun ini.');
define('_US_2FAM_DISABLE', 'Lumpuhkan pengesahan dua faktor');
define('_US_2FAM_REGENERATE', 'Gantikan kod pemulihan');
define('_US_2FAM_ENABLED', 'Pengesah telah didaftarkan. Masukkan kata laluan semasa anda dan kod pengesahan atau pemulihan untuk membuat perubahan.');
define('_US_2FAM_DISABLED', 'Pengesahan dua faktor dilumpuhkan.');
define('_US_2FAM_PAUSED', 'Laman telah menjeda cabaran dua faktor. Faktor anda dikekalkan, dan "ingat saya" masih tidak tersedia untuk akaun yang didaftarkan.');
define('_US_2FAM_UNAVAILABLE', 'Persediaan atau pengurusan dua faktor tidak tersedia. Sila hubungi pentadbir laman.');
define('_US_2FAM_STARTAGAIN', 'Persediaan telah tamat tempoh atau akaun telah berubah. Masukkan kata laluan anda untuk memulakan semula persediaan.');
define('_US_2FAM_BADPASSWORD', 'Kata laluan semasa anda tidak diterima.');
define('_US_2FAM_RESET', 'Set semula pengesahan dua faktor pengguna ini');
define('_US_2FAM_STATUS_NONE', 'Tidak didaftarkan');
define('_US_2FAM_STATUS_TOTP', 'Aplikasi pengesahan didaftarkan');
define('_US_2FAM_STATUS_EMAIL', 'Kod e-mel didaftarkan');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Status tidak tersedia');
define('_US_2FAM_RESET_HELP', 'Ini melumpuhkan faktor kedua pengguna, walau apa pun kaedah yang didaftarkan, dan membatalkan kod pemulihan serta kuki "ingat saya" mereka. Sesi yang telah log masuk sedia ada kekal aktif. Masukkan kata laluan pentadbir anda sendiri untuk mengesahkan.');
define('_US_2FAM_RESET_DONE', 'Pengesahan dua faktor pengguna telah ditetapkan semula.');
define('_US_2FAM_BACK', 'Kembali ke akaun');
define('_US_2FAM_DONE', 'Pengesahan dua faktor didayakan.');
define('_US_2FAM_REPLACED', 'Kod pemulihan sebelumnya telah dibatalkan.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: pengesahan dua faktor telah berubah');
define('_US_2FAM_NOTICE_BODY', 'Pengesahan dua faktor atau kod pemulihan untuk akaun anda di %s telah diubah daripada %s. Jika ini bukan anda, hubungi pentadbir laman.');
define('_US_2FAM_RESET_SUBJECT', '%s: pentadbir telah menetapkan semula pengesahan dua faktor anda');
define('_US_2FAM_RESET_BODY', 'Pentadbir telah melumpuhkan faktor kedua anda dan membatalkan kod pemulihannya di %s daripada %s. Sesi yang telah log masuk sedia ada kekal aktif. Log masuk dan sediakan semula pengesahan dua faktor. Hubungi pentadbir laman jika ini tidak dijangka.');
