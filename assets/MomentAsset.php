<?php

namespace yii2fullcalendar\assets;

use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author MaGiCmAsTeR0511 <kurt.hohenauer@n.roteskreuz.at>
 */

class MomentAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower/moment';

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'moment.js'
    ];

}
