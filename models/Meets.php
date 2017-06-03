<?php

namespace ut8ia\medicine\models;

use Yii;

/**
 * This is the model class for table "med_meets".
 *
 * @property int $id
 * @property int $expert_id
 * @property int $expert_group_id
 * @property int $patient_id
 * @property int $place_id
 * @property int $course_id
 * @property string $status
 * @property int $meet_type_id
 * @property int $for_excerpt
 * @property string $text
 * @property string $comment
 * @property string $time_from
 * @property string $time_to
 */
class Meets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_meets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['expert_id', 'expert_group_id', 'patient_id', 'status', 'meet_type_id', 'for_excerpt', 'time_from', 'time_to'], 'required'],
            [['expert_id', 'expert_group_id', 'patient_id', 'place_id', 'course_id', 'meet_type_id', 'for_excerpt'], 'integer'],
            [['status'], 'string'],
            [['time_from', 'time_to'], 'safe'],
            [['text'], 'string', 'max' => 1024],
            [['comment'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'expert_id' => Yii::t('app', 'Expert ID'),
            'expert_group_id' => Yii::t('app', 'Expert Group ID'),
            'patient_id' => Yii::t('app', 'Patient ID'),
            'place_id' => Yii::t('app', 'Place ID'),
            'course_id' => Yii::t('app', 'Course ID'),
            'status' => Yii::t('app', 'Status'),
            'meet_type_id' => Yii::t('app', 'Meet Type ID'),
            'for_excerpt' => Yii::t('app', 'For Excerpt'),
            'text' => Yii::t('app', 'Text'),
            'comment' => Yii::t('app', 'Comment'),
            'time_from' => Yii::t('app', 'Time From'),
            'time_to' => Yii::t('app', 'Time To'),
        ];
    }
}
