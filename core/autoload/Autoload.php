<?php


class Autoload {
    private $autoloadable = [];

    public function register($name, $loader = false) {
        if(is_callable($loader) || !$loader) {
            $this->autoloadable[$name] = $loader;
            return;
        }
        throw new Exception("Loader must be callable " . $name);
    }

    public function load($name) {
        $folder = strtolower($name);
        $filePath = BASEPATH . "/core/$folder/$name.php";
        if(!empty($this->autoloadable[$name])) {
            return $this->autoloadable[$name]($name);
        }
        if(file_exists($filePath)) {
            return require $filePath;
        }
        throw new Exception($name . " is not loaded or registered for autoloading");
    }
}