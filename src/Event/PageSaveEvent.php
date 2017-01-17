<?php

namespace Drupal\xvt_drupal8_test\Event;

use Drupal\node\Entity\Node;
use Symfony\Component\EventDispatcher\Event;

/**
 * PageSaveEvent.
 */
class PageSaveEvent extends Event {

  /**
   * Node.
   *
   * @var Node
   */
  private $page;

  /**
   * Constructor.
   */
  public function __construct(Node $page) {
    $this->page = $page;
  }

  /**
   * GetPage.
   *
   * @return \Drupal\node\Entity\Node
   *   Returns this page entity.
   */
  public function getPage() : Node {
    return $this->page;
  }

}
