<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Box Block.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3. 
 */
class BoxBlock extends PhpBlock
{
    /**
     * @var bool Choose whether a block can be cached trough the caching component. Be carefull with caching container blocks.
     */
    public $cacheEnabled = true;
    
    /**
     * @var int The cache lifetime for this block in seconds (3600 = 1 hour), only affects when cacheEnabled is true
     */
    public $cacheExpiration = 3600;

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
        return 'Feature Box';
    }
    
    /**
     * @inheritDoc
     */
    public function icon()
    {
        return 'crop_portrait'; // see the list of icons on: https://design.google.com/icons/
    }
 
    /**
     * @inheritDoc
     */
    public function config()
    {
        return [
            'vars' => [
                 ['var' => 'title', 'label' => 'Title', 'type' => self::TYPE_TEXT],
                 ['var' => 'subtitle', 'label' => 'Subtitle', 'type' => self::TYPE_TEXT],
                 ['var' => 'image', 'label' => 'Image', 'type' => self::TYPE_IMAGEUPLOAD, 'options' => ['no_filter' => false]],
                 ['var' => 'text', 'label' => 'Text', 'type' => self::TYPE_TEXTAREA],
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
    
    /**
     * @inheritDoc
     */
    public function extraVars()
    {
        return [
            'link' => $this->getLinkTarget(),
            'image' => BlockHelper::imageUpload($this->getVarValue('image'), false, true),
            'imageAdmin' => BlockHelper::imageUpload($this->getVarValue('image'), 'thumbnail-medium', true),
        ];
    }

    /**
     * {@inheritDoc} 
     *
     * @param {{extras.image}}
     * @param {{vars.image}}
     * @param {{vars.link}}
     * @param {{vars.subtitle}}
     * @param {{vars.text}}
     * @param {{vars.title}}
    */
    public function admin()
    {
        return '<h5>Teaser Box with Image</h5> <hr>'
            . '{% if vars.title is empty %} <p><em>Title is empty</em></p> {% else %} <p><b>Title</b>: {{vars.title}}</p> {% endif %}'
            . '{% if vars.subtitle is empty %} <p><em>Subtitle is empty</em></p> {% else %} <p><b>Subtitle</b>: {{vars.subtitle}}</p> {% endif %}'
            . '{% if extras.image is empty %} <p><em>Image is empty</em></p> {% else %} <img style="max-width: 100%;" src="{{extras.imageAdmin.source}}" alt="" /> {% endif %}'
            . '{% if vars.link is empty %} <p><em>Button Link is empty</em></p> {% else %} <p><b>Link</b>: {{extras.link}}</p> {% endif %}'
            . '{% if vars.text is empty %} <p><em>Text is empty</em></p> {% else %} <p><b>Text</b>: {{vars.text}}</p> {% endif %}'
            . '<hr>';
    }
}