#!/bin/bash

# Change directory to your Laravel project
cd /librarie

# Run composer create-project
composer create-project

# Run Laravel migrations
php artisan migrate

# Seed the database
php artisan db:seed

# Install Vite as a development dependency
npm install vite --save-dev

# Build your assets with Vite
npm run build
