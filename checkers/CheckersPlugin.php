<?php
namespace Craft;

class CheckersPlugin extends BasePlugin {

  public function getName() {
    return Craft::t('Checkers');
  }

  public function getVersion() {
    return '0.1';
  }

  public function getSchemaVersion() {
    return '0.1';
  }

  public function getDescription() {
    return 'Adds a range of useful tests and checkers for front-end Twig use.';
  }

  public function getDeveloper() {
    return 'Yello Studio';
  }

  public function getDeveloperUrl() {
    return 'http://yellostudio.co.uk';
  }

  public function getDocumentationUrl() {
    return 'https://github.com/marknotton/craft-plugin-checkers';
  }

  public function getReleaseFeedUrl() {
    return 'https://raw.githubusercontent.com/marknotton/craft-plugin-checkers/master/checkers/releases.json';
  }

  public function addTwigExtension() {
    Craft::import('plugins.checkers.twigextensions.cleanup');
    return array(
      new cleanup()
    );
  }

  public function init() {

    if (!craft()->isConsole() && !craft()->request->isCpRequest())  {


      $twig = craft()->templates->getTwig();

      // Is real - is defined and is not empty
      $twig->addTest(new \Twig_SimpleTest('real', function ($value) {
        return isset($value) && !empty($value);
      }));

      // Is Array
      $twig->addTest(new \Twig_SimpleTest('array', function ($value) {
        return is_array($value);
      }));

      // Is Object
      $twig->addTest(new \Twig_SimpleTest('object', function ($value) {
        return is_object($value);
      }));

      // Is Entry
      $twig->addTest(new \Twig_SimpleTest('entry', function ($element) {
        return $element[0]->getElementType() == ElementType::Entry || $element->getElementType() == ElementType::Entry;
      }));

      // Is Category
      $twig->addTest(new \Twig_SimpleTest('category', function ($element) {
        return $element[0]->getElementType() == ElementType::Category || $element->getElementType() == ElementType::Category;
      }));

      // Is Tag
      $twig->addTest(new \Twig_SimpleTest('tag', function ($element) {
        return $element[0]->getElementType() == ElementType::Tag || $element->getElementType() == ElementType::Tag;
      }));

    }
  }
};
