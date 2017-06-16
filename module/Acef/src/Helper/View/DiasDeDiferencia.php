<?php

namespace Acef\Helper\View;

/**
 * DiasDeDiferencia
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class DiasDeDiferencia extends \Zend\View\Helper\AbstractHelper
{
    public function __invoke(\datetime $fecha)
    {
    	$hoy = new \Datetime(date('Y-m-d'));
    	$diferencia = $hoy->diff($fecha);

    	$dias = $diferencia->format("%a"); 

    	switch ($dias) {
    		case '0':
    			return 'Hoy';
    			break;
    		case '1':
    			return '1 dia';
    			break;

    		default:
    			return $dias . ' dias';
    			break;
    	}
    }
}

