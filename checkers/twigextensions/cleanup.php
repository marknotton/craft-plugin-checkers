<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class cleanup extends \Twig_Extension {

  public function getName() {
    return Craft::t('Clean Up');
  }

  public function getFilters() {
    return array(
      'cleanup' => new Twig_Filter_Method( $this, 'cleanup', array('is_safe' => array('html')))
    );
  }

  public function cleanup($str) {
    if (trim($str) == '') {
      return $str;
    }
    $re = '~<(\w+)[^>]*>(?>[\p{Z}\p{C}]|<br\b[^>]*>|&(?:(?:nb|thin|zwnb|e[nm])sp|zwnj|#xfeff|#xa0|#160|#65279);|(?R))*</\1>~iu';

    return preg_replace($re, '', $str);

  }
}
