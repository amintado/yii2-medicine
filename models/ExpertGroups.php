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
}
