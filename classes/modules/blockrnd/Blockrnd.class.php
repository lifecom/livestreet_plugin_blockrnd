<?php
class PluginBlockrnd_ModuleBlockrnd extends Module {
  protected $oMapper = null;
  
  public function Init () {
    $this -> oMapper = Engine::GetMapper (__CLASS__);
  }
  
  public function GetRandomTopic () {
    return $this -> oMapper -> GetRandomTopic ();
  }
  

}

?>