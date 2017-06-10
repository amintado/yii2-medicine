<?php

namespace ut8ia\medicine\models;

use Yii;

/**
 * This is the model class for table "med_places".
 *
 * @property int $id
 * @property string $name
 * @property integer $building_id
 * @property integer $floor
 * @property string $description
 */
class Places extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_places';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'flor', 'buliding_id'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['flor', 'building_id'], 'integer'],
            [['description'], 'string', 'max' => 512],
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
            'building_id' => Yii::t('app', 'Building'),
            'floor' => Yii::t('app', 'Floor'),
            'description' => Yii::t('app', 'Description'),
        ];
    }


    /** @return \yii\db\ActiveQuery */
    public function getBiulding()
    {
        return $this->hasOne(Buildings::class, ['id' => 'building_id']);
    }


    /** @return \yii\db\ActiveQuery */
    public function getMeets()
    {
        return $this->hasMany(Meets::class, ['place_id' => 'id']);
    }


    /** @return \yii\db\ActiveQuery */
    public function getExpertPlacesLink()
    {
        return $this->hasMany(ExpertPlacesLink::class, ['place_id' => 'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getPlacesExpertGroupsLink()
    {
        return $this->hasMany(PlacesExpertGroupsLink::class, ['place_id' => 'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getScheduleTemplates()
    {
        return $this->hasMany(ScheduleTemplates::class, ['place_id' => 'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getSchedule()
    {
        return $this->hasMany(Schedule::class, ['place_id' => 'id']);
    }


    /** linked relations  */

    /** @return \yii\db\ActiveQuery */
    public function getExperts()
    {
        return $this->hasMany(Experts::class, ['id' => 'expert_id'])
            ->via('expertPlacesLink');
    }

    /** @return \yii\db\ActiveQuery */
    public function getExpertsGroups()
    {
        return $this->hasMany(ExpertsGroups::class, ['id' => 'expert_group_id'])
            ->via('placesExpertGroupsLink');
    }


}
