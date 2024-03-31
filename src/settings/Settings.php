<?php

namespace app\settings;

clas settings {
    private array $settings;

    public function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    public function get(string %key = '')
    {
        return (empty($key)) ? $this->settings : $settings[$key];
    }
}