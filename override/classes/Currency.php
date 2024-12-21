<?php
/**
 * PrestaShop module created by VEKIA, a guy from official PrestaShop community ;-)
 *
 * @author    VEKIA https://www.prestashop.com/forums/user/132608-vekia/
 * @copyright 2010-2023 VEKIA
 * @license   This program is not free software and you can't resell and redistribute it
 *
 * CONTACT WITH DEVELOPER http://mypresta.eu
 * support@mypresta.eu
 */
use PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository;
class Currency extends CurrencyCore
{
    /*
    * module: freegeo
    * date: 2024-03-21 11:07:00
    * version: 1.2.6
    */
    public static function getCurrencies($object = false, $active = true, $groupBy = false)
    {
        $currencies_to_return = array();
        if ((version_compare(_PS_VERSION_, '1.7.6') >= 0)){
            $currencies = static::addCldrDatasToCurrency(
                static::findAll($active, $groupBy),
                $object
            );
            $FREEGEO_CURRENCY_ON = Configuration::get('FREEGEO_CURRENCY_ON');
            $freegeo = Module::getInstanceByName('freegeo');
            $freegeo_where = 'X';
            $freegeo_exists = false;
            if ((defined('_PS_ADMIN_DIR_') == false || Context::getContext()->controller->controller_type == 'front') && $FREEGEO_CURRENCY_ON == true) {
                if ($freegeo != false && Configuration::get('FREEGEO_CURRENCY') != false && $freegeo::checkFreeGeoCountry() == true) {
                    if ($freegeo->active == 1) {
                        $freegeo_where = Configuration::get('FREEGEO_CURRENCY');
                        $freegeo_exists = true;
                        foreach ($currencies AS $kc => $vc) {
                            if ($freegeo_where != $vc->id && $freegeo_exists == true) {
                                continue;
                            }
                            $currencies_to_return[] = $vc;
                        }
                    }
                }
            }
            return (count($currencies_to_return) > 0 ? $currencies_to_return : $currencies);
        }
        else
        {
            $currencies = Db::getInstance()->executeS('
    		SELECT *
    		FROM `'._DB_PREFIX_.'currency` c
    		'.Shop::addSqlAssociation('currency', 'c').
                ' WHERE `deleted` = 0'.
                ($active ? ' AND c.`active` = 1' : '').
                ($groupBy ? ' GROUP BY c.`id_currency`' : '').
                ' ORDER BY `iso_code` ASC');
            $FREEGEO_CURRENCY_ON = Configuration::get('FREEGEO_CURRENCY_ON');
            $freegeo = Module::getInstanceByName('freegeo');
            $freegeo_where = 'X';
            $freegeo_exists = false;
            if ((defined('_PS_ADMIN_DIR_') == false || Context::getContext()->controller->controller_type == 'front') && $FREEGEO_CURRENCY_ON == true) {
                if ($freegeo != false && Configuration::get('FREEGEO_CURRENCY') != false && $freegeo::checkFreeGeoCountry() == true) {
                    if ($freegeo->active == 1) {
                        $freegeo_where = Configuration::get('FREEGEO_CURRENCY');
                        $freegeo_exists = true;
                        foreach ($currencies AS $kc => $vc) {
                            if ($freegeo_where != $vc['id_currency'] && $freegeo_exists == true) {
                                continue;
                            }
                            $currencies_to_return[] = $vc;
                        }
                    }
                }
            }
            return self::addCldrDatasToCurrency((count($currencies_to_return) > 0 ? $currencies_to_return:$currencies), $object);
        }
    }
}
?>