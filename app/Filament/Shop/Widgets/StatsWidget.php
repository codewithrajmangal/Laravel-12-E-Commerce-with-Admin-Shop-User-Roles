<?php

namespace App\Filament\Shop\Widgets;

use App\Models\Order;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class StatsWidget extends BaseWidget
{
    protected static ?int $sort = 1;


    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', Product::where('shop_id', Auth::user()->id)->count()),
            Stat::make('Total Orders', Order::where('shop_id', Auth::user()->id)->count()),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
