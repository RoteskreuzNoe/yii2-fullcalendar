<?php

namespace yii2fullcalendar\assets;

use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author MaGiCmAsTeR0511 <kurt.hohenauer@n.roteskreuz.at>
 */

class PrintAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower/fullcalendar/dist';
    
    /**
     * [$css description]
     * @var array
     */
    public $css = [
        'fullcalendar.print.css'
    ];

    /**
     * options for the css file beeing published
     * @var [type]
     */
    public $cssOptions = [
    	'media' => 'print'
    ];
}

