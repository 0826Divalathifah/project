<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaPrima extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminprima.adminprima'); 
    }
    public function charts()
    {
        return view('admin.adminprima.charts.chartjs'); 
    }
    public function forms()
    {
        return view('admin.adminprima.forms.basic_elements'); 
    }
    public function tables()
    {
        return view('admin.adminprima.tables.basic-table'); 
    }
    public function icons()
    {
        return view('admin.adminprima.icons.mdi'); 
    }
    public function samples1()
    {
        return view('admin.adminprima.samples.error-404'); 
    }
    public function samples2()
    {
        return view('admin.adminprima.samples.error-500'); 
    }
    public function docs()
    {
        return view('admin.adminprima.docs.documentation'); 
    }
    public function uifeatures1()
    {
        return view('admin.adminprima.ui-features.buttons'); 
    }
    public function uifeatures2()
    {
        return view('admin.adminprima.ui-features.dropdowns'); 
    }
    public function uifeatures3()
    {
        return view('admin.adminprima.ui-features.typography'); 
    }

}
