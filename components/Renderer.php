<?php

namespace ut8ia\medicine\components;

use yii\base\Component;
use yii\web\View;

/**
 * Class Renderer
 * @package ut8ia\medicine\components
 * @property string $partialsPath
 */
class Renderer extends Component
{

    const DEFAULT_VIEW = 'default';

    public $partialsPath;

    public function init()
    {
        $this->partialsPath = $this->partialsPath ?: '@vendor/ut8ia/yii2-medicine/views/partials/';
        parent::init();
    }

    /**
     * @param $model
     * @param null|string $view
     * @return null|string
     */
    public function show($model, $view = null)
    {
        if (empty($model)) {
            return null;
        }
        $v = (int)(empty($view));
        $a = (int)(is_array($model));
        switch ((string)$v . $a) {
            case '00':
                return $this->renderByClassname($model, self::DEFAULT_VIEW);
            case '01':
                return $this->renderByClassname($model, $view);
            case '11':
                return $this->renderView($model);
            case '10':
                return $this->renderArray($model);
        }
    }

    /**
     * @param object $model
     * @param string $view
     * @return string
     */
    public function renderByClassname($model, $view)
    {
        $class = ((new \ReflectionClass($model))->getShortName());
        return (new  View())->render($this->partialsPath . $class . '/' . $view, ['model' => $model]);
    }

    /**
     * @param object $model
     * @param string $view
     * @return string
     */
    public function renderView($model, $view)
    {

        return (new  View())->render($this->partialsPath . $view, ['model' => $model]);
    }

    /**
     * @param $array
     * @return string
     */
    public function renderArray($array)
    {
        $out = '';
        foreach ($array as $model) {
            $out .= $this->render($model, self::DEFAULT_VIEW);
        }
        return $out;
    }

}