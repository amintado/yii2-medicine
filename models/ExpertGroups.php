<?php

namespace ut8ia\medicine\models;

use Yii;

/**
 * This is the model class for table "med_expert_groups".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $patient_required
 * @property int $excerpt_required
 * @property int $excerpt_order
 */
class ExpertGroups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_expert_groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['patient_required', 'excerpt_required', 'excerpt_order'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'patient_required' => Yii::t('app', 'Patient Required'),
            'excerpt_required' => Yii::t('app', 'Excerpt Required'),
            'excerpt_order' => Yii::t('app', 'Excerpt Order'),
        ];
    }

    /** @return \yii\db\ActiveQuery */
    public function getMeets()
    {
        return $this->hasMany(Meets::class, ['expert_group_id'=>'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getExpertPatientsLink()
    {
        return $this->hasMany(ExpertPatientsLink::class, ['expert_group_id'=>'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getSchedule()
    {
        return $this->hasMany(Schedule::class, ['expert_group_id'=>'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getScheduleTemplates()
    {
        return $this->hasMany(ScheduleTemplates::class, ['expert_group_id'=>'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getPlacesExpertGroupsLink()
    {
        return $this->hasMany(PlacesExpertGroupsLink::class, ['expert_group_id'=>'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getExpertGroupsLink()
    {
        return $this->hasMany(ExpertGroupsLink::class, ['expert_group_id'=>'id']);
    }




}
