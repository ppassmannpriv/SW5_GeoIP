<?php
/* will require zip for updates... or just manually? dunon lol finish this already you lazy bum. */
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
    $this->createCronjobs();

    return true;

  }

  private function createConfig()
  {
    //create backendconfigstuff

    return true;
  }

  private function getDatafile()
  {
    //http://geolite.maxmind.com/download/geoip/database/GeoLite2-City-CSV.zip
    //http://geolite.maxmind.com/download/geoip/database/GeoLite2-Country-CSV.zip
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

  private function createCronjobs()
  {

    return true;
  }

}
