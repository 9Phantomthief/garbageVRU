$daysOfMonth = collect(
    \Carbon\CarbonPeriod::create(
        now()->startOfMonth(),
        now()->endOfMonth()
    ))
    ->map(function ($date) {
        return [
            'value' => 0,
            'label' => $date->format('F d, Y'),
            'day' => $date->format('d')
        ];
    })
    ->keyBy('day')
    ->merge(
        $date->keyBy('day')
    )
    ->sortKeys()