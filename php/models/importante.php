<?php

class ImportantItem
{
    private string $image;
    private string $title;
    private string $description;

    public function __construct(string $image, string $title, string $description)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
    }

    public function getImage() {
        return $this->image;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }
}
