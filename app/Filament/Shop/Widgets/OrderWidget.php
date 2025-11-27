<?php

namespace App\Filament\Shop\Widgets;

use App\Models\Order;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class OrderWidget extends ChartWidget
{
    protected static ?string $heading = 'Orders by Month';

    protected static ?int $sort = 2;

    protected string | array | int $columnSpan = 'full';

    protected function getData(): array
    {
        $shopId = Auth::user()->id;

        // Initialize arrays for data and labels
        $data = array_fill(0, 12, 0); // Array for 12 months, default to 0
        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // Query orders for the shop, grouped by month
        $orders = Order::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('shop_id', $shopId)
            ->whereYear('created_at', Carbon::now()->year) // Limit to current year
            ->groupBy('month')
            ->pluck('count', 'month')
            ->toArray();

        // Populate data array with order counts
        foreach ($orders as $month => $count) {
            $data[$month - 1] = $count; // Month is 1-based, array is 0-based
        }

        return [
            'datasets' => [
                [
                    'label' => 'Orders Created',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
