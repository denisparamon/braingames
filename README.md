
### Hexlet tests and linter status:
[![Actions Status](https://github.com/denisparamon/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/denisparamon/php-project-45/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/eff196e60b287efee701/maintainability)](https://codeclimate.com/github/denisparamon/php-project-45/maintainability)

# Brain Games

**Brain Games** — это набор консольных игр, написанных на PHP в качестве учебного проекта. Игры предназначены для тренировки устного счета и проверки математических способностей.

## Системные требования

- PHP версии **8.3.3composer -V** или выше 
- Composer версии **2.8.5** или выше
- ОС: Linux, macOS или Windows с поддержкой Bash

## Начало работы
Чтобы развернуть проект локально, выполните последовательно несколько действий:

1. Клонируйте репозиторий:

    ```bash
    git https://github.com/denisparamon/php-project-45
    ```
2. Перейдите в директорию проекта:

    ```bash
    cd braingames
    ```
3. Установите зависимости:

    ```bash
    make install
    ```
4. Установите права на выполнение файлов в директории `bin`:

    ```bash
    chmod +x ./bin/*
    ```
## Запуск мини-игр
Для запуска игр выполните команды:

  [![asciinema](https://asciinema.org/a/I2P9AD1EnZ5SYLQrrw9BQfPJH.svg)](https://asciinema.org/a/I2P9AD1EnZ5SYLQrrw9BQfPJH)  
- `make brain-even` — запуск игры "Проверка на четность".  
  [![asciinema](https://asciinema.org/a/CW99bP4RcVfZTSypHy6R261Yv.svg)](https://asciinema.org/a/CW99bP4RcVfZTSypHy6R261Yv)  
- `.make brain-calc` — запуск игры "Калькулятор".  
  [![asciinema](https://asciinema.org/a/iZGnGQ15Zu2QUh9wmRg0tzYKi.svg)](https://asciinema.org/a/iZGnGQ15Zu2QUh9wmRg0tzYKi)  
- `make brain-gcd` — запуск игры "Наибольший общий делитель".  
  [![asciinema](https://asciinema.org/a/FGANHMFtG5wDZgExnaQLZJ6Tv.svg)](https://asciinema.org/a/FGANHMFtG5wDZgExnaQLZJ6Tv)
- `make brain-progression` — запуск игры "Арифметическая прогрессия".  
  [![asciinema](https://asciinema.org/a/Gh4llqT6DGpceWXGmMvMAf9C4.svg)](https://asciinema.org/a/Gh4llqT6DGpceWXGmMvMAf9C4)  
- `make brain-prime` — запуск игры "Простое ли число?".  
  [![asciinema](https://asciinema.org/a/VehhJoRdEjDxZvEkn88S1Soe1.svg)](https://asciinema.org/a/VehhJoRdEjDxZvEkn88S1Soe1) 


