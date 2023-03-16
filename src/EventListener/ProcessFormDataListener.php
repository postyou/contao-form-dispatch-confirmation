<?php

namespace Postyou\ContaoFormDispatchConfirmationBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\Form;
use Contao\System;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Hook("processFormData")
 */
class ProcessFormDataListener
{
    public function __invoke(
        array $submittedData,
        array $formData,
        ?array $files,
        array $labels,
        Form $form
    ): void {
        if ($form->show_popup) {
            $session = System::getContainer()->get('session');

            $session->set('showPopup', true);
            $session->set('formId', $form->id);
        }
    }
}
