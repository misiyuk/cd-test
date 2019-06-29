<?php

namespace App\Core\Form;

abstract class BaseFormType implements FormTypeInterface
{
    public function getFormName(): string
    {
        $dataClass = (new \ReflectionClass($this))->getShortName();
        $i = 0;
        $formName = preg_replace_callback('/[A-Z]{1}\w*/', function (array $w) use (&$i) {
            $i++;
            $newWord = strtolower($w[0]);
            if ($i !== 1) {
                $newWord = '_' . $newWord;
            }

            return $newWord;
        }, preg_replace('/FormType$/', '', $dataClass));

        return $formName;
    }
}