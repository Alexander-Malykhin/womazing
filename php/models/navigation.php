<?php

class NavigationItem
{
    private string $title;
    private string $link;
    private bool $active;

    public function __construct(string $title, string $link, bool $active = false) {
        $this->title = $title;
        $this->link = $link;
        $this->active = $active;
    }


    public function getTitle(): string {
        return $this->title;
    }

    public function getLink(): string {
        return $this->link;
    }

    public function isActive(string $currentPath): bool {
        return $this->active = $this->link === $currentPath;
    }
}