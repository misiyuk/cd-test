<?php


namespace App\Core\Form;


use App\Core\Form\Exceptions\NotValidFormDataObjectException;
use App\Core\Request\Request;

class BaseForm implements FormInterface
{
    /**
     * @var FormTypeInterface
     */
    private $dataTypeObj;

    /**
     * @var object
     */
    private $dataObj;

    /**
     * @var bool
     */
    private $isSubmit = false;

    /**
     * @var bool
     */
    private $isValid = false;

    /**
     * @throws NotValidFormDataObjectException
     */
    public function __construct(string $dataTypeClass, $dataObj)
    {
        $this->dataObj = $dataObj;
        $this->dataTypeObj = new $dataTypeClass();
        if ($this->dataTypeObj->dataClass() !== get_class($dataObj)) {
            throw new NotValidFormDataObjectException();
        }
    }

    public function getFormName(): string
    {
        return $this->dataTypeObj->getFormName();
    }

    public function handleRequest(Request $request): void
    {
        /** @var array $formData */
        $formData = $request->post($this->getFormName());
        $this->isSubmit = false;
        $this->isValid = false;
        if ($formData) {
            $vars = get_object_vars($this->dataObj);
            $isValid = true;
            foreach ($formData as $key => $row) {
                $key = preg_replace_callback('/([_][a-z])/', function (array $v) {
                    return str_replace('_', '', strtoupper($v[0]));
                }, $key);
                if (property_exists($this->dataObj, $key)) {
                    $this->dataObj->$key = $row;
                } else {
                    $isValid = false;
                }
            }
            if ($isValid && count($vars) === count($formData)) {
                $this->isValid = true;
            }
            if ($request->server('REQUEST_METHOD') === 'POST') {
                $this->isSubmit = true;
            }
        }
    }

    public function isSubmit(): bool
    {
        return $this->isSubmit;
    }

    public function isValid(): bool
    {
        return $this->isValid;
    }
}
