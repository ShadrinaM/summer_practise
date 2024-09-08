# Проект Happy House: Учёт сделок с недвижимостью

## Описание

Проект Happy House - это сетевое веб-приложение, построенное на основе клиент-серверной архитектуры с базой данных для учёта сделок, связанных с недвижимостью компании "Happy House". Приложение позволяет добавлять записи в каждую таблицу базы данных и выполнять запросы для визуализации данных.

## Функциональные возможности

- **Добавление записей**: Добавление записей в каждую таблицу базы данных через формы в разделе "ДОБАВИТЬ ЗАПИСИ"
- **Базовые запросы**: Визуализация данных каждой таблицы базы данных через базовые запросы в разделе "ЗАПРОСЫ К БД"
- **Шаблонные запросы**: Выполнение шаблонных запросов, описанных в индивидуальном задании, в разделе "ЗАПРОСЫ К БД"
- **Тема оформления**: Переключение между светлой и тёмной темой оформления с помощью кнопки "☼" в правом верхнем углу страницы

## Установка и запуск

1. Клонировать репозиторий:
git clone https://github.com/ShadrinaM/summer_practise_second_year.git
2. Установить и запустить локальный сервер, такой как XAMPP или WAMP, чтобы запустить проект.
3. Скопировать файлы проекта в директорию вашего локального сервера (например, в `C:\xampp\htdocs\`).
4. Открыть браузер и перейти по адресу `http://localhost/название-проекта`, чтобы увидеть работающее веб-приложение.

## Использование

### Добавление записей

Чтобы добавить запись в каждую таблицу базы данных, заполните соответствующую форму в разделе "ДОБАВИТЬ ЗАПИСИ" и нажмите кнопку "Добавить запись".

### Запросы к базе данных

Чтобы выполнить базовый запрос к базе данных и визуализировать данные каждой таблицы, выберите пункт "Базовые запросы к базе данных" в разделе "ЗАПРОСЫ К БД" для соответствующей таблицы.

Чтобы выполнить шаблонный запрос, описанный в индивидуальном задании, выберите пункт "Шаблонные запросы к базе данных" в разделе "ЗАПРОСЫ К БД" и нажмите кнопку "Выполнить запрос" для соответствующего запроса.

## Комментарии по назначению файлов репозитория

Файл styles.css содержит стили оформления. 

Файл index.php обрабатывает формы сайта. 

Файлы base_query_AllRealtors.php, base_query_AllApartments.php, base_query_AllBuyers.php и base_query_AllDeals.php обрабатывают запросы для отображения данных таблиц целиком.

Файлы specific_query_1.php, specific_query_2.php, specific_query_3.php, specific_query_4.php, specific_query_5.php, specific_query_6.php, specific_query_7.php, specific_query_8.php обрабатывают запросы, описанные в индивидуальном задании.

Файл letnyaya_praktika .sql содержит код создания и заполнения таблиц как для тестовой версии sqldeveloper так и для основной версии созданной на учебном сервере с помощью MySql.

Файл "Отчёт о летней практике Шадрина Марина Михайловна 24гр" содержит в себе полный отчёт о проделанной работе.

## Автор

- [ShadrinaM]([https://github.com/ваш-аккаунт](https://github.com/ShadrinaM))