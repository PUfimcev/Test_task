
Для установки проекта необходимо выполнить следующие шаги:
1. Настроить локальный сервер и БД MySQL.

2. Создать нужную папку, запустить команду  git init, залить в нее проект с GitHub через команду git pull.

3. Переименовать в проекте env.example в .env.

4. Выполнить команды в папке проекта: 
- Run composer install или composer install
- Run php artisan key:generate или php artisan key:generate
- npm run i. 

5. Создать базу данных MySQL и настроить доступ к ней.

6. Открыть файл .env в корне проекта Laravel и настроить следующие параметры:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=имя_базы_данных
DB_USERNAME=имя_пользователя_базы_данных
DB_PASSWORD=пароль_пользователя_базы_данных

7. Создать таблицы в базе данных, используя команду "php artisan migrate".

8. Запустить проект на локальном сервере командой "npm run dev".

