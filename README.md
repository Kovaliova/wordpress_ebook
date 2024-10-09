# wordpress_ebook

база данных (находится в github slasti_book_uweb.sql, название таблицы: slasti_book_uweb)

ссылка на готовый сайт: http://book.uweb.by/

Креды в admin panel:
http://book.uweb.by/wp-admin
username: admin
password: 123Kate

Название темы: twentytwentyone-child
В админ панели (в плагинах) посмотреть, чтобы были установлены (Smart Slider 3, WooCommerce, Fluent Forms)

Установка стандартная

1. Установите необходимые компоненты (APACHE, PHP, MySQL)

2. Скопируйте файлы проекта в корневую директорию веб-сервера:
WAMP/XAMPP: поместите файлы в C:\wamp\www\папка\ или C:\xampp\htdocs\папка\.
Linux: переместите файлы в /var/www/html/папка/.

3.mysql -u root -p
CREATE DATABASE wordpress_db(например);
CREATE USER 'wp_user'@'localhost' IDENTIFIED BY 'your_password';
GRANT ALL PRIVILEGES ON wordpress_db.* TO 'wp_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;

4. Импортируйте данные из SQL-файла
mysql -u wp_user -p wordpress_db < slasti_book_uweb.sql

5. Настройте wp-config.php

