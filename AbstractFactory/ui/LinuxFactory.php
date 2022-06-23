<?php

class LinuxFactory implements UIFactory
{
    public function createButton(): Button
    {
        return new LinuxButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new LinuxCheckbox();
    }
}