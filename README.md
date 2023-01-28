# Step installasi project

1. setelah download file project. lakukan cmd pada file project laravel kami (Recycon) 
2. ketik composer update, lalu composer install (biasanya sudah auto install)
3. lalu run pada visual code atau ketik "code ." di cmd
4. nyalakan XAMPP
5. buat database "book" pada phpmyadmin/localhost lalu import file sql book kami
6. setelah itu balik ke vsc dan masuk pada file env. lalu ubah db coonection menjadi book 
7. kemudian buka terminal lalu ketik php artisan key:generate
8. lalu ketik php artisan migrate
9. Pastikan sudah punya node.js dan npm terinstall, apabila belum bisa di cek disini https://www.webdevtutor.net/error-solutions/npm-the-term-npm-is-not-recognized-as-the-name-of-a-cmdlet-function-script-file-or-operable-program
10. Ketik npm run dev kemudian buat terminal baru
11. lalu ketik php artisan serve
