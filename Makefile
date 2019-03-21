install:
		composer install
lint:
		composer run-script phpcs -- --standard=PSR12  app routes tests
test:
		composer run-script phpunit