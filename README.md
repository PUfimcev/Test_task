
Для установки проекта необходимо выполнить следующие шаги:

1. Установить  Docker и DockerHub.

2. Создать нужную папку, открыть ее в терминале.

Далее все команды осуществляются в терминале!

3. Запустить команду  git init, клонировать в нее проект с GitHub через команду git clone https://github.com/PUfimcev/Test_task.git my_test

4. Перейти в папку my_testl через команду  cd my_test

5. В папке my_test выпонить команду composer install

6. Скопировать файл env.example в env через команду cp .env.example в .env

7. Осуществить сборку контейнера Docker-compose через команду sail up -d

8. Сгенерировать уникальный ключ проект через команду sail artisan key:generate 

9. Cоздать символическую ссылку через команду sail artisan storage:link

10. Установить пакетный менеджер Node через sail npm install && pm run build

11. Открыть файл .env в корне проекта Laravel и настроить следующие параметры:
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=test_task
DB_USERNAME=sail
DB_PASSWORD=password

12. Создать таблицы в базе данных, используя команду sail artisan migrate

13. Запустить проект на локальном сервере командой sail npm run dev.

