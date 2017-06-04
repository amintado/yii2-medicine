<?php

namespace ut8ia\medicine\models;

use Yii;

/**
 * This is the model class for table "med_courses_list".
 *
 * @property int $id
 * @property int $course_id
 * @property int $patient_id
 * @property string $status
 * @property string $date_from
 * @property string $date_to
 * @property string $comment
 */
class CoursesList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_courses_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'patient_id', 'status', 'date_from', 'date_to', 'comment'], 'required'],
            [['course_id', 'patient_id'], 'integer'],
            [['status'], 'string'],
            [['date_from', 'date_to'], 'safe'],
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
            'course_id' => Yii::t('app', 'Course ID'),
            'patient_id' => Yii::t('app', 'Patient ID'),
            'status' => Yii::t('app', 'Status'),
            'date_from' => Yii::t('app', 'Date From'),
            'date_to' => Yii::t('app', 'Date To'),
            'comment' => Yii::t('app', 'Comment'),
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







}
