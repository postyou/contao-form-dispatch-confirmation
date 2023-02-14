<?php

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;

/*
 * This file is part of Postyou Form Pop-up Bundle.
 * 
 * (c) PostYou - Mateusz 2022 <mateusz.zoldak@postyou.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/postyou/contao-form-dispatch-confirmation
 */

$GLOBALS['TL_DCA']['tl_form']['palettes']['__selector__'][] = "show_popup";
$GLOBALS['TL_DCA']['tl_form']['subpalettes']['show_popup'] = '';

$GLOBALS['TL_DCA']['tl_form']['fields']['show_popup'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true, 'tl_class' => "w50"],
    'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_form']['fields']['popup_text'] = array(
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'textarea',
    'eval'                    => array('allowHtml' => true, 'class' => 'monospace', 'rte' => 'tinyMCE', 'helpwizard' => true),
    'explanation'             => 'insertTags',
    'sql'                     => "TEXT"
);


PaletteManipulator::create()
    ->addLegend('confirmation_popup', 'store_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField('show_popup', 'confirmation_popup', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_form');

PaletteManipulator::create()
    ->addField("popup_text", "show_popup")
    ->applyToSubpalette("show_popup", "tl_form");
