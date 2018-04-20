<?php
namespace opqnext\avatar;
use yii\bootstrap\Widget;

/**
 *
 */
class AvatarWidget extends Widget
{

    public function run()
    {
        //$this->registerClientScript();

        return $this->render('index',['msg'=>'yii2-avatar']);
    }
}