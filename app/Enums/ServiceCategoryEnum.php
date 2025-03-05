<?php

namespace App\Enums;

enum ServiceCategoryEnum: string
{
    case MOBILE_DEVELOPMENT = 'Розробка мобільних додатків';
    case WEB_DEVELOPMENT = 'WEB-розробка і створення сайтів';
    case TECH_SUPPORT = 'Поддержка IT-инфраструктуры';
    case AUTOMATION = 'Автоматизація';
    case DESIGN = 'Дизайн';
    case IT_SOLUTIONS = 'IT рішення для бізнесу';
    case BLOCKCHAIN_DEVELOPMENT = 'Блокчейн розробка';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }


}
