<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 *
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 */

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class grandeljay_italian_language extends StdModule
{
    public const VERSION = '0.1.3';

    public function __construct()
    {
        if (function_exists('parent::__construct()')) {
            parent::__construct();
        } else {
            $this->init('MODULE_' . strtoupper(self::class));
        }

        $this->checkForUpdate(true);
    }

    public function display()
    {
        return $this->displaySaveButton();
    }

    public function install()
    {
        parent::install();

        /** Insert Italian language */
        $sql_data_array = array(
            'name'             => 'Italian',
            'code'             => 'it',
            'image'            => 'it.svg',
            'directory'        => 'italian',
            'sort_order'       => '3',
            'language_charset' => 'utf-8',
            'status'           => '1',
            'status_admin'     => '1',
        );

        xtc_db_perform(TABLE_LANGUAGES, $sql_data_array);
    }

    protected function updateSteps()
    {
        if (version_compare($this->getVersion(), self::VERSION, '<')) {
            $this->setVersion(self::VERSION);

            return self::UPDATE_SUCCESS;
        }

        return self::UPDATE_NOTHING;
    }

    public function remove()
    {
        parent::remove();

        /** Remove Italian language */
        xtc_db_query(
            'DELETE FROM `' . TABLE_LANGUAGES . '`
                   WHERE `code` = "it"'
        );
    }
}
