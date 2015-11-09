<?php

class Shopware_Plugins_Frontend_ScriptkidGeoip_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
  private $dataFile = false;

  public function getVersion()
  {
    return '0.0.1';
  }

  public function getLabel()
  {
    return 'Scriptkid GeoIP Frontendchecker'
  }

  public function install()
  {

    $this->subscribeEvent(
      'Enlight_Controller_Action_PostDispatchSecure_Frontend',
      'onFrontendPostDisptach'
    );

    $this->createConfig();
    $this->importData();

    //set up Cronjob for monthly update of database files

    return true;

  }

  private function createConfig()
  {
    //create backendconfigstuff

    return true;
  }

  private function getDatafile()
  {
    //get file from storage or update it from maxmind.
  }

  private function importData()
  {

    $this->dataFile = $this->getDatafile();

    return true;
  }

  private function runSql()
  {
    //make a table
    //import maxmind stuff

    return true;
  }

}
