<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = trans('admin.orders.index');
        $viewData['orders'] = Order::all();

        return view('admin.order.index')->with('viewData', $viewData);
    }

    public function generateReport(Request $request): RedirectResponse
    {
        
        return redirect()->route('admin.order.index')->with('report_generated', trans('app.order.report_generated'));
    }
}
