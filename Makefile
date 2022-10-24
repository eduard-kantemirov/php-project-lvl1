install:
	composer install

brain-games:
	./bin/brain-games

cli:
	./src/Cli.php

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-even:
	./bin/brain-even