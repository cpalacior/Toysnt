<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface FileReport
{
    public function generate(Request $request): void;

}
