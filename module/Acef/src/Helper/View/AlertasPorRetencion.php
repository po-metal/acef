<?php

namespace Acef\Helper\View;

/**
 * AlertasPorRetencion
 *
 * Recibe los clientes con fecha de retención a vencer en los próximos 15 días y
 * los procesa, devolviendo en menú dropdown de alertas.
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class AlertasPorRetencion extends \Zend\View\Helper\AbstractHelper
{
	private $clientes;

	public function __invoke()
    {
        return $this->view->partial('acef/partials/alertas', ['clientes'=> $this->getClientes()]);
    }

    public function __construct($clientes = array())
    {
    	$this->clientes = $clientes;
    }

    /**
     * Gets the value of clientes.
     *
     * @return mixed
     */
    public function getClientes()
    {
        return $this->clientes;
    }
}

