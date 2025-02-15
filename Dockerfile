# Use the official PHP-Apache image
FROM php:8.0-apache

# Copy project files into the Apache root directory
COPY . /var/www/html/

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
