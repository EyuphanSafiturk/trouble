<?php

namespace kouosl\trouble\models;

use Yii;

/**
 * This is the model class for table "trouble_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $trouble_id
 *
 * @property troubles $trouble
 */
class troubleData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trouble_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'trouble_id'], 'required'],
            [['trouble_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['trouble_id'], 'exist', 'skipOnError' => true, 'targetClass' => troubles::className(), 'targetAttribute' => ['trouble_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'trouble_id' => 'trouble ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function gettrouble()
    {
        return $this->hasOne(troubles::className(), ['id' => 'trouble_id']);
    }
}
