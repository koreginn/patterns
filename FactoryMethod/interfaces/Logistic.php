<?php

abstract class Logistic
{
    abstract public function getTransport(): Transport;

    public function deliveryCargo(string $cargo): void
    {
        $transport = $this->getTransport();

        $transport->load();
        $transport->deliver($cargo);
        $transport->unload();
    }
}