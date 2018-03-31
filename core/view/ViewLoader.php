<?php

namespace daniele\core\view;

class ViewLoader {
    private $path;

    public function __construct($path) {
        $this->path = $path;
    }

    public function load($viewName) {
        if(file_exists($this->path.$viewName)) {
            return file_get_contents($this->path.$viewName);
        }
        throw new Exception("View does not exist: " . $this->path . $viewName);
    }

}