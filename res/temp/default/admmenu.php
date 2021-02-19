<?php 
include_once($phppath . "controls/menu/BootstrapMenu.php"); 
class MenuUi extends BootstrapMenu{
    public function onstart() {
        //$this->sphp_api->banMenuLink("Logout","Home");
        $this->setPosition("fixed-top");
        $this->sphp_api->addMenu("Home");
        $this->sphp_api->addMenuLink("Home", getAppPath("admhome"),"","Home");
        $this->sphp_api->addMenuLink("Plugin Home", getAppPath("installer"),"","Home");
        $this->sphp_api->addMenuLink("Logout", getEventPath("logout","","admin"),"","Home");
        include_once("plugin/cadmmenu.php"); 
    }
}
