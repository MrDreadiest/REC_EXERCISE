<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;

class CalculationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('test_1', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new GreaterThanOrEqual(1),
                    new LessThanOrEqual(99999)
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('test_2', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new GreaterThanOrEqual(1),
                    new LessThanOrEqual(99999)
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('test_3', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new GreaterThanOrEqual(1),
                    new LessThanOrEqual(99999)
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('test_4', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new GreaterThanOrEqual(1),
                    new LessThanOrEqual(99999)
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('test_5', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new GreaterThanOrEqual(1),
                    new LessThanOrEqual(99999)
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('test_6', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new GreaterThanOrEqual(1),
                    new LessThanOrEqual(99999)
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('test_7', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new GreaterThanOrEqual(1),
                    new LessThanOrEqual(99999)
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('test_8', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new GreaterThanOrEqual(1),
                    new LessThanOrEqual(99999)
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('test_9', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new GreaterThanOrEqual(1),
                    new LessThanOrEqual(99999)
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('test_10', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new GreaterThanOrEqual(1),
                    new LessThanOrEqual(99999)
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Submit',
                'attr' => [
                    'class' => 'btn btn-primary'
                ],

            ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
