<?php

namespace daniele\core\view;

class View {
    private $viewLoader;

    public function __construct($viewLoader) {
        $this->viewLoader = $viewLoader;
    }

    public function display($viewName) {
        echo $this->viewLoader->load($viewName);
    }
}