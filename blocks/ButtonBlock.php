<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;
use Yii;

/**
 * Button Block.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3. 
 */
class ButtonBlock extends PhpBlock
{
    /**
     * @inheritDoc
     */
    public function blockGroup()
    {
        return ProjectGroup::class;
    }

    /**
     * @inheritDoc
     */
    public function name()
    {
        return 'Button Link';
    }
    
    /**
     * @inheritDoc
     */
    public function icon()
    {
        return 'link'; // see the list of icons on: https://design.google.com/icons/
    }
 
    /**
     * @inheritDoc
     */
    public function config()
    {
        return [
            'vars' => [
                 ['var' => 'label', 'label' => 'Button Label', 'type' => self::TYPE_TEXT],
                 ['var' => 'icon', 'label' => 'Icon', 'type' => self::TYPE_TEXT],
                 ['var' => 'big', 'label' => 'Big Button', 'type' => self::TYPE_CHECKBOX],
                 ['var' => 'link', 'label' => 'Link', 'type' => self::TYPE_LINK],
            ],
        ];
    }


    public function getLinkTarget()
    {
        $linkData = $this->getVarValue('link', null);
        $data = null;
        if ($linkData) {
            if ($linkData['type'] == '1') {
                $menu = Yii::$app->menu->find()->where(['nav_id' => $linkData['value']])->one();
                if ($menu) {
                    $data = $menu->getLink();
                }
            }
            if ($linkData['type'] == '2') {
                $data = $linkData['value'];
            }
        }
        return $data;
    }

    public function extraVars()
    {
        return [
            'link' => $this->getLinkTarget(),
        ];
    }
    /**
     * {@inheritDoc} 
     *
     * @param {{vars.big}}
     * @param {{vars.icon}}
     * @param {{vars.label}}
     * @param {{vars.link}}
    */
    public function admin()
    {
        return '<h5>Button</h5> <hr>'
            . '<p>Supports <a href="http://fontawesome.io/icons/" target="_blank">Fontawesome Icons</a></p><br />'
            . '{% if vars.label is empty %} <p><em>Button Label is empty</em></p> {% else %} <p><b>Label</b>: {{vars.label}}</p> {% endif %}'
            . '{% if vars.icon is empty %} <p><em>Button Icon is empty</em></p> {% else %} <p><b>Icon</b>: {{vars.icon}}</p> {% endif %}'
            . '{% if vars.link is empty %} <p><em>Button Link is empty</em></p> {% else %} <p><b>Link</b>: {{extras.link}}</p> {% endif %}'
            . '<hr>';
    }
}