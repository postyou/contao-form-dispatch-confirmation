<?php

declare(strict_types=1);

/*
 * This file is part of Postyou Form Dispatch Confirmation Bundle.
 * 
 * (c) PostYou - Mateusz 2022 <mateusz.zoldak@postyou.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/postyou/contao-form-dispatch-confirmation
 */

namespace Postyou\ContaoFormDispatchConfirmationBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class PostyouContaoFormDispatchConfirmationBundle
 */
class PostyouContaoFormDispatchConfirmationBundle extends Bundle
{
	/**
	 * {@inheritdoc}
	 */
	public function build(ContainerBuilder $container): void
	{
		parent::build($container);
	}
}
