<?php


class Sidebar
{


    private $sidebar;
    public $var;

    public function __construct($var)
    {
      $this->var = $var;
      $this->setSidebar();
    }
    public function setSidebar()
    {
      $v = $this->var;

        $this->sidebar = "
        <nav id='sidebar'>
    <div class='custom-menu'>
      <button type='button' id='sidebarCollapse' class='btn btn-primary'>
        <i class='fa fa-bars'></i>
        <span class='sr-only'>Toggle Menu</span>
      </button>
    </div>
    <h1><a href='#' class='logo'>Menu </a></h1>
    <ul class='list-unstyled components mb-5'>
      <li class='active'>
        <a href='#'><span class='fa fa-home mr-3'></span>Home </a>
      </li>
      <li>
          <a href='#'><span class='fa fa-user mr-3'></span> $v[mid_menu_1]</a>
      </li>
      <li>
        <a href='#'><span class='fa fa-sticky-note mr-3'></span> Friends</a>
      </li>
      <li>
        <a href='#'><span class='fa fa-sticky-note mr-3'></span> Subcription</a>
      </li>
      <li>
        <a href='#'><span class='fa fa-paper-plane mr-3'></span> Settings</a>
      </li>
      <li>
        <a href='#'><span class='fa fa-paper-plane mr-3'></span> Information</a>
      </li>
    </ul>

  </nav>
        
        ";
    }

    public function getSidebar()
    {
        return $this->sidebar;
    }
}

?>