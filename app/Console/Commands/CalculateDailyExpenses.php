<?php

namespace App\Console\Commands;

use App\Http\Controllers\DailyIncomeController;
use App\Models\TotalDailyExpenses;
use Illuminate\Console\Command;

class CalculateDailyExpenses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $yesterday = \Carbon\Carbon::yesterday();
        
        $controller = new DailyIncomeController();
        $totalDayExpenses = $controller->totalDayExpenses($yesterday->format('Y-m-d'));
        
        $dailySum = new TotalDailyExpenses();
        $dailySum->date = $yesterday->format('Y-m-d');
        $dailySum->total = $totalDayExpenses->total;
        $dailySum->save();
        
        \Illuminate\Support\Facades\Log::info('Total sum for ' . $yesterday->format('Y-m-d') . ' saved to database.');
    }
    
}
