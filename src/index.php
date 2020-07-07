<?php

namespace Base\HelloWorld;

class Index
{
    /**
     * @param string $greet
     * @return string
     */
    public function greet($greet = "Hello World")
    {
        return $greet;
    }
}