<?php
use Craue\FormFlowBundle\Form\FormFlow;

class RegisterUserFlow extends FormFlow {

    protected $maxSteps = 3;

    protected function loadStepDescriptions() {
        return array(
            'Account',
            'Password',
            'Terms of service',
        );
    }
}

?>
