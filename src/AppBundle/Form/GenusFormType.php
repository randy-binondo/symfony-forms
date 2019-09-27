<?php
/**
 * Created by PhpStorm.
 * User: clouduser
 * Date: 9/27/19
 * Time: 3:22 PM
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenusFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('speciesCount')
            ->add('subFamily')
            ->add('outOnAFamilyJourney')
            ->add('isPublished')
            ->add('firstDiscoveredAt')
            ->add('funFact');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Genus'
        ]);
    }
}