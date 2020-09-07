LANGKAH MELAKUKAN CLONE FILE :

buka cmd, cd ke folder project
composer install
buat db dengan nama startUpSepatuBaru
cp .env.example .env (untuk linux dan windows diatas 10)
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
KALAU SETELAH MEMBUAT ROUTE TAPI ROUTE "ERROR" DENGAN KETERANGAN ROUTE TIDAK ADA

LAKUKAN PERINTAH : php artisan optimaze


