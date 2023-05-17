<?php

namespace Masoudi\NumberPlus;

use Laravel\Nova\Fields\Field;

class NumberPlus extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'number-plus';

    public function options(array $options): NumberPlus
    {
        $this->withMeta(compact('options'));
        return $this;
    }

    public function callAfterChanged(string $route, bool $displayResponse = false): NumberPlus
    {
        $this->withMeta(compact('route', 'displayResponse'));
        return $this;
    }
}
