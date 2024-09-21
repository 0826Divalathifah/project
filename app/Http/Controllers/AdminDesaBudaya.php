<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaBudaya extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminbudaya.adminbudaya'); 
    }
    public function charts()
    {
        return view('admin.adminbudaya.charts.chartjs'); 
    }
    public function forms()
    {
        return view('admin.adminbudaya.forms.basic_elements'); 
    }
    public function tables()
    {
        return view('admin.adminbudaya.tables.basic-table'); 
    }
    public function icons()
    {
        return view('admin.adminbudaya.icons.mdi'); 
    }
    public function samples1()
    {
        return view('admin.adminbudaya.samples.error-404'); 
    }
    public function samples2()
    {
        return view('admin.adminbudaya.samples.error-500'); 
    }
    public function docs()
    {
        return view('admin.adminbudaya.docs.documentation'); 
    }
    public function uifeatures1()
    {
        return view('admin.adminbudaya.ui-features.buttons'); 
    }
    public function uifeatures2()
    {
        return view('admin.adminbudaya.ui-features.dropdowns'); 
    }
    public function uifeatures3()
    {
        return view('admin.adminbudaya.ui-features.typography'); 
    }
}
