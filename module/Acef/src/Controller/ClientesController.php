<?php

namespace Acef\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * ClientesController
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class ClientesController extends AbstractActionController {

    const ENTITY = '\\Acef\\Entity\\Cliente';

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    public $em = null;

    /**
     * @var \ZfMetal\Datagrid\Grid
     */
    public $grid = null;

    public function getEm() {
        return $this->em;
    }

    public function setEm(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
    }

    public function __construct(\Doctrine\ORM\EntityManager $em, \ZfMetal\Datagrid\Grid $grid) {
        $this->em = $em;
        $this->grid = $grid;
    }

    public function getGrid() {
        return $this->grid;
    }

    public function setGrid(\ZfMetal\Datagrid\Grid $grid) {
        $this->grid = $grid;
    }

    public function gridAction() {

        $this->grid->getSource()->getEventManager()->attach('buildCrudForm', function($e) {
            $form = $e->getParam('form');
            $form->add(new \Zend\Form\Element\Hidden("id"));
        });

        if($this->grid->getCrud()->getAction() == 'edit'){
            $this->grid->getCrud()->getCrudForm()->add(array(
                'name' => 'detalle',
                'type' => 'Zend\Form\Element\Button',
                'attributes' => array(
                    'value' => 'Detalle',
                    'class' => 'btn btnCancelCustom pull-right btnDetalleEdit',
                    'onclick' => 'window.location.href="/acef/manager-cliente/main/'.$this->grid->getCrud()->getCrudForm()->getObject()->getId().'"',
                    ), 
                ), array(
                'priority' => '1'
                )
                );
        }


        $this->grid->prepare();
        return array("grid" => $this->grid);
    }

    public function getEntityRepository() {
        return $this->getEm()->getRepository(self::ENTITY);
    }

}
