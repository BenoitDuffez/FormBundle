<?php
namespace Alsatian\FormBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class AutocompleteType extends AbstractRoutableType
{
    public function getParent()
    {
        return TextType::class;
    }
}
