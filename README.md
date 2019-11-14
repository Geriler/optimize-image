# optimize-image

## Получение ключей

1. Зарегистрироваться на сайте [kraken](https://kraken.io/)
2. Подтвердить почту
3. Перейти в раздел [API Dashboard](https://kraken.io/account/api-credentials)

## Установка

Скопировать файл `.env.example` в `.env` командой:

```bash
cp .env.example .env
```

Заменить `API_KEY` и `API_SECRET_KEY`. Процесс получения ключей описан выше, в разделе [Получение ключей](README.md#Получение-ключей).

Установить зависимости с помощью команды:

```bash
composer install
```

## Запуск

1. Скопировать изображения в директорию `image_input`
2. Запустить проект с помощью команды:
```bash
php index.php
```
3. Оптимизированные изображения будут находиться в директории `image_output`

## Лицензия

[MIT License](LICENSE.md)