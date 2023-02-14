<?php

namespace Postyou\ContaoFormDispatchConfirmationBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\Form;
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
        $session = new Session();
        $session->set('showPopup', true);
        $session->set('formId', $form->id);
    }
}
