<?php

class Crumb
{
    protected string $name;
    protected string $link;

    public function __construct(string $name, string $link)
    {
        $this->name = $name;
        $this->link = $link;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLink(): string
    {
        return $this->link;
    }
}