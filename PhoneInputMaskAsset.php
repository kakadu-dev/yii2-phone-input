<?php
/**
 * Created by PhpStorm.
 * User: Yarmaliuk Mikhail
 * Date: 21.06.2017
 * Time: 11:09
 */

namespace Kakadu\Yii2PhoneInput;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\widgets\MaskedInputAsset;

/**
 * Class    InputMaskAsset
 * @package Kakadu\Yii2PhoneInput
 * @author  Yarmaliuk Mikhail
 * @version 1.0
 */
class PhoneInputMaskAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/inputmask/dist';

    /**
     * @var array
     */
    public $js = [
        (!YII_ENV_DEV ? 'min/' : NULL) . 'inputmask/inputmask.phone.extensions' . (!YII_ENV_DEV ? '.min' : NULL) . '.js',
        (!YII_ENV_DEV ? 'min/' : NULL) . 'inputmask/phone-codes/phone' . (!YII_ENV_DEV ? '.min' : NULL) . '.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        BootstrapPluginAsset::class,
        JqueryAsset::class,
        MaskedInputAsset::class,
    ];
}