<?php

namespace App\Config;

use Rain\Tpl;

require '../vendor/autoload.php';

class Page{

    private $tpl;
    private $options = [];
    private $defaults = [
        "data" => []
    ];

    public function __construct($options = array())
    {
        $this->options = array_merge($this->defaults, $options);

        $config = array(
            "tpl_dir"       => $_SERVER['DOCUMENT_ROOT'] . "/views/", // DIRETÓRIO DO TPL
            "cache_dir"     => $_SERVER['DOCUMENT_ROOT'] . "/views-cache/", // PASTA DO CACHE 
            "debug"         => false, 
        );

        Tpl::configure( $config );

        $this->tpl = new Tpl;

        $this->tpl->assign("BASE_URL", BASE_URL);

        $this->setData($this->options["data"]);

        $this->tpl->draw("header");

    }

    private function setData($data = array()){

        foreach ($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }

    }

    public function setTpl($name, $data = array(), $returnHTML = false)
    {

        $this->setData($data);

        return $this->tpl->draw($name, $returnHTML);

    }

    public function __destruct()
    {
        
        $this->tpl->draw("footer");

    }

}

?>