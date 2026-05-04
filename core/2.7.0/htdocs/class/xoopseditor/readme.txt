xoopseditor menyediakan kolektif editor untuk XOOPS

panduan pengguna:

1 semak fail xoops_version.php di bawah /xoopseditor/ untuk memastikan ia lebih baharu daripada fail semasa anda

2 muat naik /xoopseditor/ ke /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/kelas/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 konfigurasikan keutamaan jika berkenaan
3.1 ./dhtmlext(semua editor)/language/: buat fail bahasa tempatan anda berdasarkan english.php
3.3 ./dhtmlext(semua editor)/editor_registry.php: tetapkan konfigurasi untuk editor: pesanan - paparkan tertib sekiranya pemilihan editor digunakan, 0 untuk dilumpuhkan; nohtml - berfungsi untuk sintaks bukan html
3.3 ./FCKeditor/modul/: salin fail ke folder modul sekiranya kebenaran muat naik modul khusus, storan dan pilihan editor diperlukan
3.3.1 ./FCKeditor/module/fckeditor.config.js: untuk pilihan editor, anda biasanya tidak perlu mengubahnya
3.3.2 ./FCKeditor/module/fckeditor.connector.php: untuk menentukan folder untuk menyemak imbas fail (dan memuat naik storan) => XOOPS/uploads/XOOPS_FCK_FOLDER/, folder diperlukan untuk mencipta secara manual
3.3.3 ./FCKeditor/module/fckeditor.upload.php: tentukan kebenaran muat naik dan storan muat naik
3.4 XOOPS/uploads/fckeditor/: untuk mencipta folder jika FCKeditor didayakan, digunakan untuk muat naik dari mana folder muat naik tidak dinyatakan
3.5 ./tinymce/tinymce/jscripts/: muat turun fail bahasa tempatan anda daripada http://tinymce.moxiecode.com/language.php

4 semak nama fail: untuk sistem sensitif huruf besar nama fail, pastikan anda mempunyai nama fail betul-betul betul, iaitu, "FCKeditor" tidak sama dengan "fckeditor"

5 semak /xoopseditor/sampleform.inc.php untuk panduan pembangunan
