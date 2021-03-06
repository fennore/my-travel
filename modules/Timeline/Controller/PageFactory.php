<?php

namespace MyTravel\Timeline\Controller;

use MyTravel\Core\Controller\App;
use MyTravel\Core\Controller\FileController;
use Symfony\Component\HttpFoundation\Request;

class PageFactory {

  public static function viewTimeline(Request $request) {
    // Sync timeline items
    if (App::get()->inDevelopment()) {
      $controller = new FileController();
      $controller->sync('MyTravel\Timeline\Model\TimelineItem');
    }
    // Do the Core PageFactory thing
    return \MyTravel\Core\Controller\PageFactory::viewItemPage($request);
  }

}
