<?php
namespace api\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Task extends ActiveRecord
{
    const COMPLETED = 1;
    const NOT_COMPLETED = 0;
    const DATETIME_FORMAT = 'd-m-Y H:i:s';

    /**
     * validation rules
     * @return array
     */
    public function rules() {
        return [
            [['title', 'body'], 'required'],
            [['title', 'body'], 'string'],
            ['completed', 'boolean'],
            ['completed', 'default', 'value' => self::NOT_COMPLETED],
        ];
    }

    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function afterFind() {
        $this->created_at = $this->formatToDateTime($this->updated_at);
        $this->updated_at = $this->formatToDateTime($this->updated_at);

        return parent::afterFind();
    }

    private function formatToDateTime($timestamp)
    {
        return date(self::DATETIME_FORMAT, $timestamp);
    }
}