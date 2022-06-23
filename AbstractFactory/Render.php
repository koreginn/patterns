<?php

class Render
{
    /** @var LinuxFactory */
    private LinuxFactory $linuxFactory;

    /** @var MacFactory */
    private MacFactory $macFactory;

    /** @var WinFactory */
    private WinFactory $winFactory;

    public function __construct() {
        $this->linuxFactory = new LinuxFactory();
        $this->macFactory = new MacFactory();
        $this->winFactory = new WinFactory();
    }

    public function init()
    {
        $this->display($this->linuxFactory);
        $this->display($this->macFactory);
        $this->display($this->winFactory);
    }

    private function display(UIFactory $factory)
    {
        $factory->createButton()->render();
        $factory->createCheckbox()->render();
    }
}