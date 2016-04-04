<?php

namespace AM2Studio\LaravelAdminForm;

use Collective\Html\FormBuilder;
use View;

class AdminForm extends FormBuilder
{
    public function password($name, $options = [])
    {
        $options = $this->placeholder($options, $name);

        return View::make('adminForm::password', compact('name', 'options'));
    }

    public function radio($name, $value = null, $checked = null, $options = [])
    {
        return View::make('adminForm::radio', compact('name', 'value', 'checked', 'options'));
    }

    public function text($name, $value = null, $options = [])
    {
        $options = $this->placeholder($options, $name);

        return View::make('adminForm::text', compact('name', 'value', 'options'));
    }

    public function number($name, $value = null, $options = [])
    {
        $options = $this->placeholder($options, $name);

        return View::make('adminForm::number', compact('name', 'value', 'options'));
    }

    public function textarea($name, $value = null, $options = [])
    {
        return View::make('adminForm::textarea', compact('name', 'value', 'options'));
    }

    public function select($name, $list = [], $selected = null, $options = [])
    {
        if(!isset($options['data-js'])) {
            $options['data-js'] = 'select';
        }
        return View::make('adminForm::select', compact('name', 'list', 'selected', 'options'));
    }

    public function date($name, $value = null, $options = [])
    {
        $options = array_merge(['data-js' => 'datepicker'], $options);

        return View::make('adminForm::date', compact('name', 'value', 'options'));
    }

    public function checkbox($name, $value = 1, $checked = null, $options = [])
    {
        if(!isset($options['id'])) {
            $options['id'] = $name.'-'.uniqid();
        }

        return View::make('adminForm::checkbox', compact('name', 'value', 'checked', 'options'));
    }

    public function submit($value = null, $options = [])
    {
        return View::make('adminForm::submit', compact('value', 'options'));
    }

    public function row($label, $element, $options = [])
    {
        return View::make('adminForm::row', compact('label', 'element', 'options'));
    }

    public function submitRow($label, $options = [])
    {
        $element = $this->submit($label, $options);

        return View::make('adminForm::submitRow', compact('element', 'options'));
    }

    public function footerButtonRight($label, $options = [])
    {
        if(isset($options['class'])) {
            $options['class'] .= ' right btn';
        } else {
            $options['class'] = 'right btn';
        }

        return View::make('adminForm::footerButton', compact('label', 'options'));
    }

    public function footerButtonLeft($label, $options = [])
    {
        if(isset($options['class'])) {
            $options['class'] .= ' left btn';
        } else {
            $options['class'] = 'left btn';
        }

        return View::make('adminForm::footerButton', compact('label', 'options'));
    }

    private function placeholder($options, $name)
    {
        if (!isset($options['placeholder'])) {
            $attribute = explode('[', $name);
            $attribute = $attribute[count($attribute)-1];
            $attribute = str_replace('_', ' ', $attribute);
            $attribute = str_replace(']', '', $attribute);
            $options = array_merge($options, ['placeholder' => trans('ui.placeholder', ['attribute' => $attribute])]);
        }

        return $options;
    }
}
