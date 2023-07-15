<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu\Menu;
use App\Models\User;
use App\Models\Payment\Payment;
use DB;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $en = Carbon::now()->locale('en_US');
        $ar = Carbon::now()->locale('ar');
        $today = Carbon::today()->toDateString();
        $startDateOfMonth = Carbon::now()->startOfMonth()->toDateString();
        $endDateOfMonth = Carbon::now()->endOfMonth()->toDateString();
        $startOfWeek = Carbon::now()->startOfWeek(Carbon::MONDAY)->locale('ar')->toDateString();
        $endOfWeek = Carbon::now()->endOfWeek(Carbon::SUNDAY)->locale('ar')->toDateString();
        

        $totalMenus = Menu::count();
        $users = User::count();

        // count all
        // $paymentOnlineStatus = DB::table('payments')
        // ->whereDate('created_at')
        // ->count();


        // Today all
        $paymentOnlineStatusToday = DB::table('payments')
        ->whereDate('created_at', $today)
        ->count();

        // Today based on failed / Unpaid
        $paymentOnlineStatusFailedToday = DB::table('payments')
        ->where('status', ['Failed', 'Unpaid'])
        ->whereDate('created_at', $today)
        ->count();

        // Today based on Paid
        $paymentOnlineStatusPaidToday = DB::table('payments')
        ->where('status', 'Paid')
        ->whereDate('created_at', $today)
        ->count();

        // Today based on Delivery
        $paymentOnlineStatusOndeliveryToday = DB::table('payments')
        ->where('status', 'Ondelivery')
        ->whereDate('created_at', $today)
        ->count();

        // Week
        $paymentOnlineStatusFailedWeek = DB::table('payments')
        ->where('status', 'Failed')
        ->whereDate('created_at', '>=', $startOfWeek)
        ->whereDate('created_at', '<=', $endOfWeek)
        ->count();

        // Month
        $paymentOnlineStatusFailedMonth = DB::table('payments')
        ->where('status', 'Failed')
        ->whereBetween('created_at', [$startDateOfMonth, $endDateOfMonth])
        ->count();

        return view('home', compact(
            'totalMenus',
            'users',
            'paymentOnlineStatusToday',
            'paymentOnlineStatusFailedToday',
            'paymentOnlineStatusPaidToday',
            'paymentOnlineStatusOndeliveryToday',

            'paymentOnlineStatusFailedWeek',
            
            'paymentOnlineStatusFailedMonth',
        ));
    }
}
