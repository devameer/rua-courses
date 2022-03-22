<?php


namespace App\Utils;


class EmptyClass
{
    private $const = array();

    public function __construct($const = array())
    {
        $this->const = $const;
    }

    public function __get($name)
    {
        if (isset($this->const[$name])) {
            return $this->const[$name];
        }
        return null;
    }

    public function __call($name, $arguments)
    {
        return $this;
    }

    public function __toString()
    {
        return (string)null;
    }
}
