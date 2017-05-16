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

    private $showItemsRangePaginator = true;

    public function getShowImages()
    {
        return $this->showImages;
    }

    public function setShowImages($showImages)
    {
        $this->showImages= $showImages;
    }

    public function getShowItemsRangePaginator()
    {
        return $this->showItemsRangePaginator;
    }

    public function setShowItemsRangePaginator($showItemsRangePaginator)
    {
        $this->showItemsRangePaginator= $showItemsRangePaginator;
    }


}

