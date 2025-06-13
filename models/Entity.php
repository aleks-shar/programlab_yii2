<?php

declare(strict_types=1);

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "entity".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 */
class Entity extends ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'entity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['content'], 'default', 'value' => null],
            [['title'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }

}
