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
 * @property string $plan_from
 * @property string $plan_to
 * @property string $time_from
 * @property string $time_to
 */
class Meets extends \yii\db\ActiveRecord
{

    const STATUS_PLANNED = 'planned';
    const STATUS_DONE = 'done';
    const STATUS_REJECTED = 'rejected';

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
            [['expert_id', 'expert_group_id', 'patient_id', 'status', 'meet_type_id', 'for_excerpt', 'plan_from', 'plan_to'], 'required'],
            [['expert_id', 'expert_group_id', 'patient_id', 'place_id', 'course_id', 'meet_type_id', 'for_excerpt'], 'integer'],
            [['status'], 'string'],
            [['plan_from', 'plan_to','time_from', 'time_to'], 'safe'],
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

    /** @return \yii\db\ActiveQuery */
    public function getCourses()
    {
        return $this->hasOne(Courses::class, ['id' => 'course_id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getPatients()
    {
        return $this->hasOne(Patients::class, ['id' => 'patient_id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getPlaces()
    {
        return $this->hasOne(Places::class, ['id' => 'place_id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getExperts()
    {
        return $this->hasOne(Experts::class, ['id' => 'expert_id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getExpertGroups()
    {
        return $this->hasOne(ExpertsGroups::class, ['id' => 'expert_group_id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getMeetTypes()
    {
        return $this->hasOne(MeetTypes::class, ['id' => 'meet_type_id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getExcerpts()
    {
        return $this->hasOne(Excerpts::class, ['course_id' => 'course_id']);
    }

}
