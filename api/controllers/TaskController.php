<?php
namespace api\controllers;

use yii\rest\ActiveController;

/**
 * All Restful actions have been automatically implemented by Yii
 * just by extending from the ActiveController base class.
 *
 * Class TaskController
 * @package api\controllers
 */
class TaskController extends ActiveController
{
    public $modelClass = 'api\models\Task';
}
