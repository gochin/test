<?php
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RegisterUserFormType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        switch ($options['flowStep']) {
            case 1:
                $builder->add('username');
                $builder->add('email', 'email');
                break;
            case 2:
                $builder->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                ));
                break;
            case 3:
                $builder->add('termsOfService', 'checkbox');
                break;
        }
    }

    public function getDefaultOptions(array $options) {
        $options = parent::getDefaultOptions($options);

        $options['flowStep'] = 1;
        $options['data_class'] = 'MyCompany\MyBundle\Entity\MyUser'; // should point to your user entity

        return $options;
    }

    public function getName() {
        return 'registerUser';
    }

}

?>
