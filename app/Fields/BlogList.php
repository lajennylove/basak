<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class BlogList extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $blogList = Builder::make('blog_list');

        $blogList
            ->setLocation('page_template', '==', 'template-blog.blade.php');

        $blogList
            ->addText("items_to_display", [
                "label" => "Items to Display",
                "instructions" => "Please enter the number of items to display. Ex. 1, 2, 3, etc. -1 will display all items.",
                "required" => 0,
                "wrapper" => [
                    "width" => "",
                    "class" => "",
                    "id" => "",
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => "",
            ])
            ->addSelect('orderby', [
                'label' => 'Order By',
                'instructions' => 'Please select the order by date of the posts descending or ascending.',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'choices' => [
                    'desc' => 'Descendent',
                    'asc' => 'Ascendent',
                ],
                'default_value' => [],
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'ajax' => 0,
                'return_format' => 'value',
                'placeholder' => '',
            ]);

        return $blogList->build();
    }
}
