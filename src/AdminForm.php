<?php

namespace AM2Studio\LaravelAdminForm;

use Collective\Html\FormBuilder;
use View;

class AdminForm extends FormBuilder
{
    public function password($name, $options = [])
    {
        $options = $this->addIdToInput($name, $options);
        $options = $this->placeholder($options, $name);

        return View::make('adminForm::password', compact('name', 'options'));
    }

    public function radio($name, $value = null, $checked = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);

        return View::make('adminForm::radio', compact('name', 'value', 'checked', 'options'));
    }

    public function text($name, $value = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);
        $options = $this->placeholder($options, $name);

        return View::make('adminForm::text', compact('name', 'value', 'options'));
    }

    public function number($name, $value = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);
        $options = $this->placeholder($options, $name);

        return View::make('adminForm::number', compact('name', 'value', 'options'));
    }

    public function currency($name, $value = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);
        $options = $this->placeholder($options, $name);

        if (isset($options['class'])) {
            $options['class'] = 'currency '.trim($options['class']);
        } else {
            $options['class'] = 'currency';
        }

        return View::make('adminForm::currency', compact('name', 'value', 'options'));
    }

    public function percentage($name, $value = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);

        if (!isset($options['placeholder'])) {
            $options['placeholder'] = '0,00';
        }

        return View::make('adminForm::percentage', compact('name', 'value', 'options'));
    }

    public function textarea($name, $value = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);

        return View::make('adminForm::textarea', compact('name', 'value', 'options'));
    }

    public function select($name, $list = [], $selected = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);
        if (!isset($options['data-js'])) {
            $options['data-js'] = 'select';
        }

        return View::make('adminForm::select', compact('name', 'list', 'selected', 'options'));
    }

    public function date($name, $value = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);
        $options = array_merge(['data-js-mask' => 'date'], $options);

        return View::make('adminForm::date', compact('name', 'value', 'options'));
    }

    public function phone($name, $value = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);
        $options = array_merge(['data-js-mask' => 'phone'], $options);
        if (!isset($options['placeholder'])) {
            $options['placeholder'] = '(XXX) XXX-XXXX';
        }

        return View::make('adminForm::phone', compact('name', 'value', 'options'));
    }

    public function checkbox($name, $value = 1, $checked = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);
        if (!isset($options['id'])) {
            $options['id'] = $name.'-'.uniqid();
        }

        return View::make('adminForm::checkbox', compact('name', 'value', 'checked', 'options'));
    }

    public function url($name, $value = null, $options = [])
    {
        $options = $this->addIdToInput($name, $options);
        $options['type'] = 'url';

        return View::make('adminForm::text', compact('name', 'value', 'options'));
    }

    public function row($label, $element, $options = [])
    {
        return View::make('adminForm::row', compact('label', 'element', 'options'));
    }

    public function submit($value = null, $options = [])
    {
        $options = $this->addAjaxSubmitClass($options);

        return View::make('adminForm::submit', compact('value', 'options'));
    }

    public function footerButtonRight($value, $options = [])
    {
        $options['class'] = isset($options['class']) ? $options['class'] : 'btn btn--primary ';
        if (isset($options['class'])) {
            $options['class'] .= ' right';
        } else {
            $options['class'] = 'right';
        }
        $options = $this->addAjaxSubmitClass($options);

        return View::make('adminForm::submit', compact('value', 'options'));
    }

    public function footerButtonLeft($value, $options = [])
    {
        if (isset($options['class'])) {
            $options['class'] .= ' left';
        } else {
            $options['class'] = 'left';
        }
        $options = $this->addAjaxSubmitClass($options);

        return View::make('adminForm::submit', compact('value', 'options'));
    }

    private function placeholder($options, $name)
    {
        if (!isset($options['placeholder'])) {
            $attribute = explode('[', $name);
            $attribute = $attribute[count($attribute) - 1];
            $attribute = str_replace('_', ' ', $attribute);
            $attribute = str_replace(']', '', $attribute);
            $options = array_merge($options, ['placeholder' => trans('ui.placeholder', ['attribute' => $attribute])]);
        }

        return $options;
    }

    private function addIdToInput($name, $options)
    {
        //add "id" atribute to input (equals as )name) attribute) so we can add "for" attribute to label which points to input "id"
        if (!isset($options['id'])) {
            if (strpos($name, '[]') !== false) {
                $options['id'] = str_replace('[]', '', $name).'_'.uniqid();
            } else {
                $options['id'] = $name;
            }
        }

        return $options;
    }

    private function addAjaxSubmitClass($options)
    {
        if (isset($options['ajax-submit']) &&  $options['ajax-submit'] == 'false') {
            //nothing 
        } elseif (isset($options['ajax-submit']) &&  $options['ajax-submit'] == 'true') {
            if (isset($options['class'])) {
                $options['class'] .= ' ajax-submit-force';
            } else {
                $options['class'] = 'ajax-submit-force';
            }
        } else {
            if (isset($options['class'])) {
                $options['class'] .= ' ajax-submit';
            } else {
                $options['class'] = 'ajax-submit';
            }
        }

        return $options;
    }
}
