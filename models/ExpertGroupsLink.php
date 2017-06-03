<?php

namespace ut8ia\medicine\models;

use Yii;

/**
 * This is the model class for table "med_expert_groups_link".
 *
 * @property int $id
 * @property int $group_id
 * @property int $expert_id
 */
class ExpertGroupsLink extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'med_expert_groups_link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'expert_id'], 'required'],
            [['group_id', 'expert_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'group_id' => Yii::t('app', 'Group ID'),
            'expert_id' => Yii::t('app', 'Expert ID'),
        ];
    }
}
