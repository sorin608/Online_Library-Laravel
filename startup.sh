#!/bin/bash

cd /librarie

composer create-project

php artisan migrate

php artisan db:seed

npm install vite --save-dev

npm run build
