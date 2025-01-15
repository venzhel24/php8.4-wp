<?php

class Person
{


    private(set) string $name
        {
            get => $this->name = ucfirst(strtolower(trim($value)));
        }

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}