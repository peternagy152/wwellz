<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\FeatureQueryBuilder' shared service.

return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\ProductFilter\\FilterApplication\\AttributeQueryBuilder\\FeatureQueryBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\ProductFilter\FilterApplication\AttributeQueryBuilder\FeatureQueryBuilder(($this->services['psxmarketingwithgoogle.context'] ?? $this->load('getPsxmarketingwithgoogle_ContextService.php')), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] ?? $this->load('getLanguageRepository2Service.php')));
