<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.logger.handler.factory' shared service.

return $this->services['ps_checkout.logger.handler.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory(($this->services['ps_checkout.logger.directory'] ?? ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.1.4', \dirname(__DIR__, 4))))->getPath(), ($this->services['ps_checkout.logger.filename'] ?? $this->load('getPsCheckout_Logger_FilenameService.php'))->get(), ($this->services['ps_checkout.logger.configuration'] ?? $this->load('getPsCheckout_Logger_ConfigurationService.php'))->getMaxFiles(), ($this->services['ps_checkout.logger.configuration'] ?? $this->load('getPsCheckout_Logger_ConfigurationService.php'))->getLevel());
