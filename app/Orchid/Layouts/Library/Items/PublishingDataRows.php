<?php

namespace App\Orchid\Layouts\Library\Items;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class PublishingDataRows extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('publishing.name')
                -> title('Название')
                -> required()
                -> placeholder('Введите название издательства...'),
            Input::make('publishing.id')
                -> type('hidden'),
        ];
    }
}
