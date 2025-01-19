### Hexlet tests and linter status:
[![Actions Status](https://github.com/denisparamon/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/denisparamon/php-project-45/actions)

## О проекте
&laquo;Игры разума&raquo;&nbsp;&mdash; это набор консольных игр, написанных на&nbsp;языке PHP в&nbsp;качестве учебного проекта. Игры предназначены для проверки навыков устного счета и&nbsp;математических способностей.

## Начало работы

Чтобы развернуть проект локально, выполните последовательно несколько действий:

1. Клонируйте репозиторий:
    
    ```bash
    git clone https://github.com/sokoloff-rv/braingames.git braingames
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

- `make brain-even` — запуск игры "Проверка на четность".
- `make brain-calc` — запуск игры "Калькулятор".
- `make brain-gcd` — запуск игры "Наибольший общий делитель".
- `make brain-progression` — запуск игры "Арифметическая прогрессия".
- `make brain-prime` — запуск игры "Простое ли число?".