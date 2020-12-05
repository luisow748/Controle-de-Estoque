<?php

class Estrutura
{
    public $new_head;
    public $new_header;
    public $new_main;
    public $new_footer;
    public $section;
    
    public function setSection($set)
    {
        $this->section = $set;
    }
    public function setHeader()
    {
        include_once 'assets/src/header.php';
        $this->new_head = $head;
        $this->new_header= $header;
    }
    
    public function setMain()
    {   $route_main = "assets/src/".$this->section."/".$this->section."_main.php";
        include_once $route_main;
        $this->new_main = $main[$this->section];
    }
    
    public function setFooter()
    {   
        include_once 'assets/src/footer.php';
        $this->new_footer = $footer;
    }
    
    public function getHeader()
    {
        $this->setHeader();
        return $this->new_head.$this->new_header;
    }

    public function getMain()
    {
        $this->setMain();
        return $this->new_main;
    }

    public function getFooter()
    {
        $this->setFooter();
        return $this->new_footer;
    }
}
