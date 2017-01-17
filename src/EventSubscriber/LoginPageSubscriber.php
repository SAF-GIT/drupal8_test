<?php

namespace Drupal\xvt_drupal8_test\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\Event;

/**
 * LoginPageSubscriber.
 */
class LoginPageSubscriber implements EventSubscriberInterface {

  /**
   * Check if user login page and sets cookie notice.
   *
   * @param Event $event
   *   Generic event.
   */
  public function loginPageView(Event $event) {
    if (\Drupal::routeMatch()->getRouteName() == 'user.login') {
      drupal_set_message(t('This website is using cookies.'));
    }
  }

  /**
   * Get Subscribed Events.
   *
   * @return array
   *   Returns subscribed events.
   */
  public static function getSubscribedEvents() {
    return [
      KernelEvents::REQUEST => 'loginPageView',
    ];
  }

}
