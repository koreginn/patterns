<?php

class Order
{
    /** @var AirLogistic */
    private AirLogistic $airLogistic;

    /** @var RoadLogistic */
    private RoadLogistic $roadLogistic;

    public function __construct()
    {
        $this->airLogistic = new AirLogistic();
        $this->roadLogistic = new RoadLogistic();
    }

    public function init(): void
    {
        $this->delivery($this->airLogistic, 'Видеокарты');
        $this->delivery($this->roadLogistic, 'Материнские платы');
    }

    private function delivery(Logistic $logistic, string $cargo): void
    {
        $logistic->deliveryCargo($cargo);
    }
}