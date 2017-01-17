<?php

namespace Drupal\xvt_drupal8_test\EventSubscriber;

use Drupal\xvt_drupal8_test\Event\PageSaveEvent;
use Drupal\xvt_drupal8_test\PageEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * PageSubscriber.
 */
class PageSubscriber implements EventSubscriberInterface {

  /**
   * Save.
   *
   * @param \Drupal\xvt_drupal8_test\Event\PageSaveEvent $pageSave
   *   Page save event.
   */
  public function save(PageSaveEvent $pageSave) {
    $page = $pageSave->getPage();
    drupal_set_message(t('You just created new Page - @title', array('@title' => $page->getTitle())));
  }

  /**
   * Get Subscribed Events.
   *
   * @return array
   *   Returns subscribed events.
   */
  public static function getSubscribedEvents() {
    $events = [
      PageEvents::SAVE_PAGE => [
        'save',
      ],
    ];

    return $events;
  }

}
