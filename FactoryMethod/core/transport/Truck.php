<?php

class Truck implements Transport
{
    public function load(): void
    {
        echo "Грузовик загружен" . PHP_EOL;
    }

    public function deliver(string $cargo): void
    {
        echo "Грузовик доставляет $cargo" . PHP_EOL;
    }

    public function unload(): void
    {
        echo "Грузовик рагружен" . PHP_EOL;
    }
}