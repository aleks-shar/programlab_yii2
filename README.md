Клонировать проект

Стартовать БД с помощью docker compose up -d

Запустить миграцию: ./yii migrate

Запустить сайт: ./yii serve

Доступ к администрированию сущности через web: admin/admin. Появится новый пункт в меню: Entity

Bearer token для доступа к rest: 100-token

GET /api/entities: получение списка всех сущностей;

POST /api/entities: создание новой сущности;

GET /api/entities/1: получение информации по конкретной сущности с id равным 1;

PATCH /api/entities/1 и PUT /api/entities/1: изменение информации по сущности с id равным 1;

DELETE /api/entities/1: удаление сущности с id равным 1;


