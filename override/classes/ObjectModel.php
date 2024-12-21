<?php
/**
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
 */
if (!defined('_PS_VERSION_')) { exit; }
abstract class ObjectModel extends ObjectModelCore
{
    /*
    * module: orderref
    * date: 2024-03-21 11:38:16
    * version: 1.0.0
    */
    public static function getDefinition($class, $field = null)
    {
        $definition = parent::getDefinition($class, $field);
        if ('OrderPayment' == $class) {
            if (isset($definition['fields']['order_reference']) && is_array($definition['fields']['order_reference'])) {
                $definition['fields']['order_reference']['size'] = 16;
            }
        }
        return $definition;
    }
}