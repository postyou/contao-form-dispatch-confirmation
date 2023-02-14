<?php

namespace Postyou\ContaoFormDispatchConfirmationBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\FormModel;
use Contao\FrontendTemplate;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Hook("outputFrontendTemplate")
 */
class OutputFrontendTemplateListener
{
    public function __invoke(string $buffer, string $template): string
    {

        if ($template === 'fe_page') {

            $session = new Session();
            $popup = $session->get('showPopup');
            $formId = $session->get('formId');

            if ($popup && $formId) {
                $session->remove('showPopup');
                $session->remove('formId');

                $script = \Contao\Template::generateScriptTag('bundles/postyoucontaoformdispatchconfirmation/js/script.js');

                $popupTemplate = new FrontendTemplate('confirmation_popup');
                $form = FormModel::findById($formId);
                $popupTemplate->popupText = $form->popup_text;
                $buffer = str_replace("</body>", $popupTemplate->parse() . $script . "</body>", $buffer);
            }
        }

        return $buffer;
    }
}
