<?php

class serverComponents extends sfComponents {

  public function executeSidebar()
  {
    $this->groups = Doctrine_Core::getTable('ServerGroup')->getWithServers();
  }
}

?>
