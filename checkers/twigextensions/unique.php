<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class unique extends \Twig_Extension {

  public function getName() {
    return Craft::t('Unique');
  }

  public function getFilters() {
    return array(
      'unique' => new Twig_Filter_Method($this, 'unique')
    );
  }

  public function unique($array)  {
    if ( is_array($array) ) {
      return array_unique($array);
    } else {
      return $array;
    }
  }
}
