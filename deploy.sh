#!/bin/bash
cd /var/www/people-access-new

echo "⏳ Pulling latest changes..."
git pull origin main

echo "⏳ Installing dependencies..."
composer install --no-interaction --no-dev --optimize-autoloader

echo "⏳ Clearing caches..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Deployment complete!"
