<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_metrics.helper.shop' shared service.

return $this->services['ps_metrics.helper.shop'] = new \PrestaShop\Module\Ps_metrics\Helper\ShopHelper(($this->services['ps_metrics.helper.tools'] ?? ($this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper())));