<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationImagesUpdater' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Update\\CombinationImagesUpdater'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationImagesUpdater(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'pse4_');
