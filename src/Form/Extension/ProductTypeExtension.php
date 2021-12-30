<?php

declare(strict_types=1);

namespace App\Form\Extension;

use App\Entity\Product\ProductColorInterface;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('color', ChoiceType::class, [
                'choices' => [
                    'Choose' => null,
                    'RED' => ProductColorInterface::PRODUCT_COLOR_RED,
                    'GREEN' => ProductColorInterface::PRODUCT_COLOR_GREEN,
                    'BLUE' => ProductColorInterface::PRODUCT_COLOR_BLUE,
                ]
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
