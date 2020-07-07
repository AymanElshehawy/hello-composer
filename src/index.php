<?php

namespace Base\HelloWorld;

class Index
{
    private $message;

    /**
     * @param string $greet
     * @return string
     */
    public function greet($greet = "Hello World")
    {
        return $greet;
    }

    public function set($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}