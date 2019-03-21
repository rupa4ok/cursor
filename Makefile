install:
		composer install
env:
		cp .env.example .env
key:
		php artisan key:generate
lint:
		composer run-script phpcs -- --standard=PSR12  app tests
test:
		composer run-script test
vendor:
	php composer.phar install --no-interaction --prefer-source --dev

tests: vendor
	vendor/bin/phpunit --coverage-clover=coverage.xml