#!/bin/sh
set -e

# Ensure vendor is installed
if [ -z "$(ls -A 'vendor/' 2>/dev/null)" ]; then
    echo "Installing dependencies..."
    composer install --prefer-dist --no-progress --no-interaction
fi

# Display Symfony version
php bin/console -V

echo 'PHP app ready!'

# Debug: Check if static files exist
echo "=== Checking for static files ==="
if [ -f "public/assets/styles/portfolio.css" ]; then
    echo "✓ CSS file found: public/assets/styles/portfolio.css"
else
    echo "✗ CSS file NOT found: public/assets/styles/portfolio.css"
fi

if [ -d "public/assets" ]; then
    echo "✓ Static files directory exists"
    find public/assets -type f | head -10
else
    echo "✗ Static files directory NOT found"
fi
echo "================================"

# Get the port (Render provides PORT env variable)
PORT=${PORT:-10000}

# Start PHP built-in server
echo "Starting PHP server on 0.0.0.0:$PORT"
exec php -S 0.0.0.0:$PORT -t public -r router.php
