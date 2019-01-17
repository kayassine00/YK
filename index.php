<?php

    /**
     *  Import Application & File Classes
     *  @return avoid
     */
    require_once __DIR__ . '/Vendor/System/Application.php';
    require_once __DIR__ . '/Vendor/System/File.php';


    /**
     *  Use the class from his relative namespace
     *  @return avoid
     */
    Use \System\Application;
    Use \System\File;

    /**
     *  @var string $file
     *  @return string 
     */
    $file = new File(__DIR__);

   // echo $file->fromMainPathToVendor('zdzd/zzfzfz/efefe');
   // die();


    /**
     *  instenciation of the Application object
     *  @var mixed $init
     *  @return object
     */
    $init = new Application($file);


   // new System\Test();



