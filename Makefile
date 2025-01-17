# Makefile

# Команда для установки зависимостей
install:
		composer install

# Команда для запуска brain-games
brain-games:
		php bin/brain-games.php
