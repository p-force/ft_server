-- Удаляем пользователя, если он существует
DROP USER IF EXISTS 'bember'@'localhost';

-- Удаляем базу данных, если она существует
DROP DATABASE IF EXISTS aloha;

-- Создаем новую базу данных
CREATE DATABASE aloha;

-- Создаем нового пользователя
CREATE USER 'bember'@'localhost' IDENTIFIED BY 'bember42';

-- Даем ему все привилегии на новую базу данных
GRANT ALL PRIVILEGES ON aloha.* TO 'bember'@'localhost';

-- Применяем изменения привилегий
FLUSH PRIVILEGES;
