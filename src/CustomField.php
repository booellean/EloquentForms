<?php namespace Nickwest\EloquentForms;
// TODO: Change this over to use Laravel's Event system

use Nickwest\EloquentForms\Exceptions\NotImplementedException;

abstract class CustomField
{

    public abstract function makeView(Field $Field, bool $prev_inline = false);

    public function hook_setAllFormValues(Field $Field, $value)
    {
        return;
    }

    public function hook_setPostValues($value)
    {
        throw new NotImplementedException();
    }

}
