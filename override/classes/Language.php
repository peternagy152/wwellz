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
use PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManagerBuilder;
use PrestaShop\PrestaShop\Core\Cldr\Repository as cldrRepository;
use PrestaShop\PrestaShop\Core\Localization\RTL\Processor as RtlStylesheetProcessor;
use PrestaShopBundle\Translation\Translator;
use Symfony\Component\Filesystem\Filesystem;
class Language extends LanguageCore
{
    /*
    * module: freegeo
    * date: 2024-03-21 11:07:00
    * version: 1.2.6
    */
    public static function getLanguages($active = true, $id_shop = false, $ids_only = false)
    {
        if (!self::$_LANGUAGES) {
            Language::loadLanguages();
        }
        $FREEGEO_LANGUAGE_ON = Configuration::get('FREEGEO_LANGUAGE_ON');
        $freegeo = Module::getInstanceByName('freegeo');
        $freegeo_where = 'X';
        $freegeo_exists = false;
        if ((!defined('_PS_ADMIN_DIR_') || Context::getContext()->controller->controller_type == 'front') && $FREEGEO_LANGUAGE_ON == true) {
            if ($freegeo != false && Configuration::get('FREEGEO_LANGUAGE') != false && $freegeo::checkFreeGeoCountry() == true) {
                if ($freegeo->active == 1) {
                    $freegeo_where = Configuration::get('FREEGEO_LANGUAGE');
                    $freegeo_exists = true;
                }
            }
        }
        $languages = array();
        foreach (self::$_LANGUAGES as $language) {
            if ($freegeo_where != $language['id_lang'] && $freegeo_exists == true) {
                if (isset(self::$_LANGUAGES[$language['id_lang']])){
                    unset(self::$_LANGUAGES[$language['id_lang']]);
                }
                continue;
            }
            if ($active && !$language['active'] || ($id_shop && !isset($language['shops'][(int)$id_shop])) || self::$locale_crowdin_lang === $language['locale']) {
                continue;
            }
            $languages[] = $ids_only ? $language['id_lang'] : $language;
        }
        return $languages;
    }
}
?>
