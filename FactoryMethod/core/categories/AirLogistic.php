<?php

class AirLogistic extends Logistic
{
    public function getTransport(): Transport
    {
        return new Plane();
    }
}