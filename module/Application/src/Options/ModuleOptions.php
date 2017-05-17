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

    private $showBreadcrumbs = true;
    
    private $showUserAvatarAndWelcome = true;
    
    private $makeSmallNav = true;

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

    public function getShowBreadcrumbs()
    {
        return $this->showBreadcrumbs;
    }

    public function setShowBreadcrumbs($showBreadcrumbs)
    {
        $this->showBreadcrumbs= $showBreadcrumbs;
    }

    function getShowUserAvatarAndWelcome() {
        return $this->showUserAvatarAndWelcome;
    }

    function setShowUserAvatarAndWelcome($showUserAvatarAndWelcome) {
        $this->showUserAvatarAndWelcome = $showUserAvatarAndWelcome;
    }

    function getMakeSmallNav() {
        return $this->makeSmallNav;
    }

    function setMakeSmallNav($makeSmallNav) {
        $this->makeSmallNav = $makeSmallNav;
    }

}

