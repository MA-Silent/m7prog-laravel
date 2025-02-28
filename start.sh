cd ./m7prog-laravel/
./vendor/bin/sail restart
npm run dev
trap "./vendor/bin/sail stop" EXIT
