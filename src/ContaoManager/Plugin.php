<?php

declare(strict_types=1);

/*
 * This file is part of Postyou Form Pop-up Bundle.
 * 
 * (c) PostYou - Mateusz 2022 <mateusz.zoldak@postyou.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/postyou/contao-form-dispatch-confirmation
 */

namespace Postyou\ContaoFormDispatchConfirmationBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Class Plugin
 */
class Plugin implements BundlePluginInterface
{
    /**
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Postyou\ContaoFormDispatchConfirmationBundle\PostyouContaoFormDispatchConfirmationBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }
}
