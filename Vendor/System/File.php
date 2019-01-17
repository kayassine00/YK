<?php   

    namespace System;

    Class File
    {

        Const DS = DIRECTORY_SEPARATOR;
        private $root;

        public function __construct($root)
        {
            $this->root = $root;
        }

        public function exis($file)
        {
            return file_exists($file);
        }

        public function requir($file)
        {
            require $file;
        }

        public function fromMainPathTo($path)
        {
            return $this->root . self::DS . str_replace(['/', '//'] , self::DS, $path);
        }

        public function fromMainPathToVendor($path)
        {
            return $this->fromMainPathTo('Vendor/' . $path);
        }
    }