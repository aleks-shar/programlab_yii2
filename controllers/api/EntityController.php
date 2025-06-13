<?php

declare(strict_types=1);

namespace app\controllers\api;

use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController;

/**
 * EntityController implements the CRUD actions for Entity model.
 */
final class EntityController extends ActiveController
{
    public function behaviors(): array
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::class,
        ];

        return $behaviors;
    }
    public $modelClass = 'app\models\Entity';
}
