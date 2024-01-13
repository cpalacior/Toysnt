<?php 

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\FileReport;
use App\Util\ExcelReport;
use App\Util\PdfReport;

class ReportServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(FileReport::class, function (){
            return new ExcelReport();
        });
    }
}