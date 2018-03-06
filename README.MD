MPF - My PHP Framework
======================

## Start server
> php -S localhost:8000 -d display_errors=1 -t public

## Tests
> ./vendor/bin/phpunit

## Code sniffer
> ./vendor/bin/phpcs

## Phinx | [ Website](https://phinx.org/)
Then Phinx can be executed using:
> vendor/bin/phinx

Now write your first migration:
> vendor/bin/phinx init .

> EDITOR phinx.yml

> mkdir -p db/migrations db/seeds

> vendor/bin/phinx create MyFirstMigration

> vendor/bin/phinx migrate -e development

> vendor/bin/phinx seed:create seed_name

> vendor/bin/phinx seed:run