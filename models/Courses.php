<?php

namespace ut8ia\medicine\models;

use Yii;

/**
 * This is the model class for table "med_courses".
 *
 * @property int $id
 * @property int $number
 * @property string $date_start
 * @property string $date_end
 * @property string $status
 */
class Courses extends \yii\db\ActiveRecord
{

    const STATUS_OPEN = 'open';
    const STATUS_CLOSED = 'closed';

    /**
     * @return array
     */
    public static function getStatuses()
    {
        return [
            self::STATUS_OPEN => Yii::t('app', 'open'),
            self::STATUS_CLOSED => Yii::t('app', 'closed')
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_courses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'date_start', 'date_end', 'status'], 'required'],
            [['number'], 'integer'],
            [['date_start', 'date_end'], 'safe'],
            [['status'], 'string'],
            [['number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'number' => Yii::t('app', 'Number'),
            'date_start' => Yii::t('app', 'Date Start'),
            'date_end' => Yii::t('app', 'Date End'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /** @return \yii\db\ActiveQuery */
    public function getMeets()
    {
        return $this->hasMany(Meets::class, ['course_id' => 'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getCoursesList()
    {
        return $this->hasMany(CoursesList::class, ['course_id' => 'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getExcerpts()
    {
        return $this->hasMany(Exceprts::class, ['course_id' => 'id']);
    }

    /** linked relations */

    /** @return \yii\db\ActiveQuery */
    public function getPatients()
    {
        return $this->hasMany(Patients::class, ['id' => 'patient_id'])
            ->via('coursesList');
    }


}
