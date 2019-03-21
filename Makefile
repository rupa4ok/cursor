install:
		composer install
env:
		cp .env.example .env
key:
		php artisan key:generate
lint:
		composer run-script phpcs -- --standard=PSR12  app tests
vendor:
	php composer.phar install --no-interaction --prefer-source --dev

test: vendor
	vendor/bin/phpunit --coverage-clover=coverage.xml