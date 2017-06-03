<?php

namespace ut8ia\medicine\models;

use Yii;

/**
 * This is the model class for table "med_patients".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $card_number
 * @property string $sex
 * @property string $birthdate
 * @property int $region_id
 * @property string $city
 * @property int $city_id
 * @property string $district
 * @property string $district_a
 * @property int $user_id
 */
class Patients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_patients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic', 'card_number', 'sex', 'birthdate', 'region_id', 'city', 'city_id', 'district', 'district_a', 'user_id'], 'required'],
            [['sex'], 'string'],
            [['birthdate'], 'safe'],
            [['region_id', 'city_id', 'user_id'], 'integer'],
            [['name', 'surname', 'patronymic'], 'string', 'max' => 255],
            [['card_number'], 'string', 'max' => 8],
            [['city'], 'string', 'max' => 64],
            [['district'], 'string', 'max' => 40],
            [['district_a'], 'string', 'max' => 2],
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
            'surname' => Yii::t('app', 'Surname'),
            'patronymic' => Yii::t('app', 'Patronymic'),
            'card_number' => Yii::t('app', 'Card Number'),
            'sex' => Yii::t('app', 'Sex'),
            'birthdate' => Yii::t('app', 'Birthdate'),
            'region_id' => Yii::t('app', 'Region ID'),
            'city' => Yii::t('app', 'City'),
            'city_id' => Yii::t('app', 'City ID'),
            'district' => Yii::t('app', 'District'),
            'district_a' => Yii::t('app', 'District A'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }
}
