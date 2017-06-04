<?php

namespace ut8ia\medicine\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "med_experts".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property string $short_info
 * @property string $info
 * @property string $images
 * @property string $specialization
 * @property string $slug
 */
class Experts extends ActiveRecord
{
    /** @return string */
    public static function tableName()
    {
        return 'med_experts';
    }

    /** @return array */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'status', 'created_at', 'updated_at', 'surname', 'name', 'patronymic', 'short_info', 'info', 'images', 'specialization'], 'required'],
            [['status'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['username'], 'string', 'max' => 64],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token', 'slug'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 128],
            [['surname', 'name', 'patronymic', 'specialization'], 'string', 'max' => 127],
            [['short_info'], 'string', 'max' => 256],
            [['info'], 'string', 'max' => 2056],
            [['images'], 'string', 'max' => 512],
        ];
    }

    /** @return array */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'email' => Yii::t('app', 'Email'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'surname' => Yii::t('app', 'Surname'),
            'name' => Yii::t('app', 'Name'),
            'patronymic' => Yii::t('app', 'Patronymic'),
            'short_info' => Yii::t('app', 'Short Info'),
            'info' => Yii::t('app', 'Info'),
            'images' => Yii::t('app', 'Images'),
            'specialization' => Yii::t('app', 'Specialization'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }

    /** @return \yii\db\ActiveQuery */
    public function getMeets()
    {
        return $this->hasMany(ExpertGroupsLink::class, ['expert_id'=>'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getExpertGroupsLink()
    {
        return $this->hasMany(ExpertGroupsLink::class, ['expert_id'=>'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getExpertPlacesLink()
    {
        return $this->hasMany(ExpertPlacesLink::class, ['expert_id'=>'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getScheduleTemplates()
    {
        return $this->hasMany(ScheduleTemplates::class, ['expert_id'=>'id']);
    }

    /** @return \yii\db\ActiveQuery */
    public function getSchedule()
    {
        return $this->hasMany(Schedule::class, ['expert_id'=>'id']);
    }


    /** @return \yii\db\ActiveQuery */
    public function getExpertPatientsLink()
    {
        return $this->hasMany(ExpertPatientsLink::class, ['expert_id'=>'id']);
    }






}
