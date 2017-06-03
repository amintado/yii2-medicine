<?php

namespace ut8ia\medicine\models;

use Yii;

/**
 * This is the model class for table "med_expert_places_link".
 *
 * @property int $id
 * @property int $expert_id
 * @property int $place_id
 */
class ExpertPlacesLink extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_expert_places_link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['expert_id', 'place_id'], 'required'],
            [['expert_id', 'place_id'], 'integer'],
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
            'place_id' => Yii::t('app', 'Place ID'),
        ];
    }
}
