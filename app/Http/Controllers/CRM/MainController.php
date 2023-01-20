<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    public function main()
    {
        $tenant = auth()->user()->tenant_id;
        $customersCount = Customer::where('tenant_id',$tenant)->count();
        $schedulesCount = Schedule::where('tenant_id',$tenant)->count();

        return view('CRM.Main.index',[
            'customersCount' => $customersCount,
            'schedulesCount' => $schedulesCount,
        ]);
    }
}
