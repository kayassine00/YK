<?php

    namespace System;

    Class Application
    {

        public $container = [];

        public function __construct(File $file)
        {
            $this->setIntoTheContainer('File', $file);
            $this->registerClasses();
            $this->loadHelpers();
        
        }

        public function setIntoTheContainer($key, $value)
        {
            $this->container[$key] = $value;
        }

        
        public function getFromTheContainer($key)
        {
             return isset($this->container[$key]) ? $this->container[$key] : null;
        }

        public function __get($key)
        {
            return $this->getFromTheContainer($key);
        }

        public function registerClasses()
        {
            spl_autoload_register([$this, 'load']);
        }

        private function load($class)
        {   
            // print_r($class);
            //die();
            // print_r($this->File);
            // die();
            if(strpos($class, 'App' === 0))
            {
                $file = $this->file->fromMainPathTo($class.'.php');
            }else{
                // get the file from Vendor directory
                 $file = $this->File->fromMainPathToVendor($class.'.php');
                // print_r($file);
                // die();
            }
                if(file_exists($file))
                {
                    require_once $file;
                }  
        }

        private function loadHelpers()
        {
            $this->file->fromMainpathTo('Helpers.php');
        }

    }