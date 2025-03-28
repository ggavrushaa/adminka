<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class QuickLink extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Тестовый', 'http://adminochka.test/')
                ->url('http://adminochka.test/')
                ->description('Перейти на сайт')
                ->descriptionIcon('heroicon-o-globe-alt')
                ->openUrlInNewTab(),
            Stat::make('Старый прод', 'https://uaitlab.com/')
                ->url('https://uaitlab.com/')
                ->description('Перейти на сайт')
                ->descriptionIcon('heroicon-o-globe-alt')
                ->openUrlInNewTab(),
        ];
    }
}
