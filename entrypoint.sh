#!/bin/sh -l

chmod -R 775 "/var/www/html/storage" && chown -R www-data "/var/www/html/storage"
chmod -R 775 "/var/www/html/bootstrap/cache" && chown -R www-data "/var/www/html/bootstrap/cache"

find /var/www/html/ -type d -exec chmod 755 {} \;
find /var/www/html/ -type f -exec chmod 644 {} \;

apache2-foreground
