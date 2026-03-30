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

# Get the port (Render provides PORT env variable)
PORT=${PORT:-10000}

# Start PHP built-in server
echo "Starting PHP server on 0.0.0.0:$PORT"
exec php -S 0.0.0.0:$PORT -t public -r router.php
