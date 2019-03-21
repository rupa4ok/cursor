install:
		composer install
lint:
		composer run-script phpcs -- --standard=PSR12  app
test:
		composer run-script phpunit