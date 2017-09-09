<?php

namespace MyTravel\Location;

use MyTravel\Core\Event\ConfigNodeEvent;

class Config {

  public function applicationDirectories(ConfigNodeEvent $event) {
    $event
      ->node()
      ->scalarNode('gpx')->defaultValue('files/gpx')->end()
      ->scalarNode('gpxbackup')->defaultValue('files/gpx-backup')->end();
  }

}