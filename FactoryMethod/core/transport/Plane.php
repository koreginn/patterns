<?php

class Plane implements Transport
{
    public function load(): void
    {
        echo "Самолёт загружен" . PHP_EOL;
    }

    public function deliver(string $cargo): void
    {
        echo "Самолёт доставляет $cargo" . PHP_EOL;
    }

    public function unload(): void
    {
        echo "Самолёт рагружен" . PHP_EOL;
    }
}