<?php

namespace Application\Options;

/**
 * ModuleOptions
 *
 *
 *
 * @author
 * @license
 * @link
 */
class ModuleOptions extends \Zend\Stdlib\AbstractOptions
{

    private $showImages = true;

    public function getShowImages()
    {
        return $this->showImages;
    }

    public function setShowImages($showImages)
    {
        $this->showImages= $showImages;
    }


}

