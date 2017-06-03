<?php

namespace ut8ia\medicine\models;

use Yii;

/**
 * This is the model class for table "med_excerpts".
 *
 * @property int $id
 * @property int $course_id
 * @property int $patient_id
 * @property string $text
 * @property int $date
 */
class Excerpts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_excerpts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'patient_id', 'text', 'date'], 'required'],
            [['course_id', 'patient_id', 'date'], 'integer'],
            [['text'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'course_id' => Yii::t('app', 'Course ID'),
            'patient_id' => Yii::t('app', 'Patient ID'),
            'text' => Yii::t('app', 'Text'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}
