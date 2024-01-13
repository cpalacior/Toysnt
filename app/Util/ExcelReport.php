<?php

namespace App\Util;

use App\Interfaces\FileReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExcelReport implements FileReport
{
    public function generate(Request $request): void
    {

    }
}
