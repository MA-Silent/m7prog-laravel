cd ./m7prog-laravel/
./vendor/bin/sail stop
./vendor/bin/sail start &
npm run dev
trap "./vendor/bin/sail stop" EXIT
