<?php
/**
 * Created by PhpStorm.
 * User: Yarmaliuk Mikhail
 * Date: 14.07.2017
 * Time: 12:32
 */

namespace Kakadu\Yii2PhoneInput;

use Kakadu\Yii2PhoneInput\PhoneInputMaskAsset;
use yii\bootstrap\Html;
use yii\bootstrap\InputWidget;

/**
 * Class    MPInputPhoneMask
 * @package Kakadu\Yii2PhoneInput
 * @author  Yarmaliuk Mikhail
 * @version 1.0
 */
class MPInputPhoneMask extends InputWidget
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->getId();
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerAsset();

        $options = array_merge(['class' => 'form-control'], $this->options);

        if ($this->hasModel()) {
            return Html::activeTextInput($this->model, $this->attribute, $options);
        }

        return Html::textInput($this->name, $this->value, $options);
    }

    /**
     * Register asset
     *
     * @return void
     */
    private function registerAsset()
    {
        PhoneInputMaskAsset::register($this->view);

        $id = $this->options['id'];

        // @TODO_ disable for android
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        if(stripos($ua,'android') !== false) {
            return;
        }

        $this->view->registerJs("$('#$id').inputmask('phone');");
    }
}