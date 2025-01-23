install:
	composer install
dump:
	composer dump-autoload
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	./src/Games/make brain-calc
brain-calc:
	./src/Games/GameCalc
brain-gcd:
	./src/Games/GameGcd
brain-progression:
	./src/Games/GameProgression
brain-prime:
	./src/Games/GamePrime
brain-games:
	./bin/brain-games