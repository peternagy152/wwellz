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
require_once _PS_MODULE_DIR_ . 'etssmartdiscount/classes/EtsSDDiscount.php';
class SpecificPrice extends SpecificPriceCore
{
    /*
    * module: etssmartdiscount
    * date: 2024-03-21 11:42:34
    * version: 1.0.0
    */
    public static function getSpecificPrice(
        $id_product,
        $id_shop,
        $id_currency,
        $id_country,
        $id_group,
        $quantity,
        $id_product_attribute = null,
        $id_customer = 0,
        $id_cart = 0,
        $real_quantity = 0
    )
    {
        $specific_price = parent::getSpecificPrice($id_product, $id_shop, $id_currency, $id_country, $id_group, $quantity, $id_product_attribute, $id_customer, $id_cart, $real_quantity);
        $discount = EtsSDDiscount::getDiscountByProductId($id_product, $specific_price);
        if ($discount) {
            $specific_price = [
                'id_specific_price' => 0,
                'id_specific_price_rule' => 0,
                'id_cart' => 0,
                'id_product' => $id_product,
                'id_shop' => $id_shop,
                'id_shop_group' => 0,
                'id_currency' => (int)$discount['id_currency'],
                'id_country' => 0,
                'id_group' => 0,
                'id_customer' => 0,
                'id_product_attribute' => 0,
                'price' => -1,
                'from_quantity' => 1,
                'reduction_type' => (int)$discount['discount_value_type'] == EtsSDDiscount::DISCOUNT_VALUE_PERCENT ? 'percentage' : 'amount',
                'reduction_tax' => 1,
                'reduction' => (int)$discount['discount_value_type'] == EtsSDDiscount::DISCOUNT_VALUE_PERCENT ? (string)((float)$discount['percent']/100) : (string)$discount['amount'],
                'from' => $discount['from'],
                'to' => $discount['to'],
                'id_ets_sd_discount' => $discount['id_ets_sd_discount'],
                'id_ets_sd_discount_level' => $discount['id_ets_sd_discount_level'],
                'countdown_enabled' => $discount['countdown_enabled']
            ];
        }
        return $specific_price;
    }
}