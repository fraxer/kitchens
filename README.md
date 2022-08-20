# Kitchens
Тестовая работа

## Установить зависимости

```
composer install
```

### Инициализировать пространство в режиме разработки

```
php init
```

В файле `common/config/main-local.php` указать доступы к базе данных

### Выполнить миграции

```
php yii migrate
```

### Настроить конфигурация веб-сервера apache

```
<VirtualHost *:80>
    ServerName frontend.test
    DocumentRoot "/path/to/yii-application/frontend/web/"
    
    <Directory "/path/to/yii-application/frontend/web/">
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php

        # use index.php as index file
        DirectoryIndex index.php

        # ...other settings...
        # Apache 2.4
        Require all granted
        
        ## Apache 2.2
        # Order allow,deny
        # Allow from all
    </Directory>
</VirtualHost>

<VirtualHost *:80>
    ServerName backend.test
    DocumentRoot "/path/to/yii-application/backend/web/"
    
    <Directory "/path/to/yii-application/backend/web/">
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php

        # use index.php as index file
        DirectoryIndex index.php

        # ...other settings...
        # Apache 2.4
        Require all granted
        
        ## Apache 2.2
        # Order allow,deny
        # Allow from all
    </Directory>
</VirtualHost>
```

### Задание

1) Поднять на своём пк yii2-advanced: https://www.yiiframework.com/extension/yiisoft/yii2-app-advanced/doc/guide/2.0/en/start-installation 
2) Запрограммировать модуль "Задачи", имеющий базовый CRUD функционал:
    а) Создание задачи
    б) Просмотр задачи
    в) Обновление задачи
    г) Удаление задачи
3) Задача должна иметь следующий список полей:
    а) Название задачи
    б) Описание задачи
    в) Статус задачи (создана, в работе, выполнена)
    г) Приоритет задачи (цифра от 1 до 5)
    д) Дата создания задачи
4) Весь список задач должен быть отображен в виде таблицы
5) Реализовать сортировку по приоритету и дате создания задачи
5) Над списком задач реализовать простой поиск по названию задачи
6) Внешний вид не важен