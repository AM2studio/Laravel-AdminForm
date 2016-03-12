<?php

namespace AM2Studio\LaravelAdminForm;

use Collective\Html\FormBuilder;
use View;

class AdminForm extends FormBuilder
{
    public function password($name, $options = [])
    {
        if (!isset($options['placeholder'])) {
            $options = array_merge($options, ['placeholder' => trans('ui.placeholder', ['attribute' => str_replace('_', ' ', $name)])]);
        }

        return View::make('adminForm::partials.form.password', compact('name', 'options'));
    }

    public function radio($name, $value = null, $checked = null, $options = [])
    {
        return View::make('adminForm::partials.form.radio', compact('name', 'value', 'checked', 'options'));
    }

    public function text($name, $value = null, $options = [])
    {
        if (!isset($options['placeholder'])) {
            $options = array_merge($options, ['placeholder' => trans('ui.placeholder', ['attribute' => str_replace('_', ' ', $name)])]);
        }

        return View::make('adminForm::partials.form.text', compact('name', 'value', 'options'));
    }

    public function number($name, $value = null, $options = [])
    {
        if (!isset($options['placeholder'])) {
            $options = array_merge($options, ['placeholder' => trans('ui.placeholder', ['attribute' => str_replace('_', ' ', $name)])]);
        }

        return View::make('adminForm::partials.form.number', compact('name', 'value', 'options'));
    }

    public function textarea($name, $value = null, $options = [])
    {
        return View::make('adminForm::partials.form.textarea', compact('name', 'value', 'options'));
    }

    public function select($name, $list = [], $selected = null, $options = [])
    {
        return View::make('adminForm::partials.form.select', compact('name', 'list', 'selected', 'options'));
    }

    public function date($name, $value = null, $options = [])
    {
        return View::make('adminForm::partials.form.date', compact('name', 'value', 'options'));
    }

    public function checkbox($name, $value = 1, $checked = null, $options = [])
    {
        return View::make('adminForm::partials.form.checkbox', compact('name', 'value', 'checked', 'options'));
    }

    public function submit($value = null, $options = [])
    {
        return View::make('adminForm::partials.form.submit', compact('value', 'options'));
    }

    public function row($label, $element, $options = [])
    {
        return View::make('adminForm::partials.form.row', compact('label', 'element', 'options'));
    }
}
