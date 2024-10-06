<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaPreneur extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminpreneur.adminpreneur'); 
    }
    public function charts()
    {
        return view('admin.adminpreneur.charts.chartjs'); 
    }
    public function forms()
    {
        return view('admin.adminpreneur.forms.basic_elements'); 
    }
    public function tables()
    {
        return view('admin.adminpreneur.tables.basic-table'); 
    }
    public function icons()
    {
        return view('admin.adminpreneur.icons.mdi'); 
    }
    public function samples1()
    {
        return view('admin.adminpreneur.samples.error-404'); 
    }
    public function samples2()
    {
        return view('admin.adminpreneur.samples.error-500'); 
    }
    public function docs()
    {
        return view('admin.adminpreneur.docs.documentation'); 
    }
    public function uifeatures1()
    {
        return view('admin.adminpreneur.ui-features.buttons'); 
    }
    public function uifeatures2()
    {
        return view('admin.adminpreneur.ui-features.dropdowns'); 
    }
    public function uifeatures3()
    {
        return view('admin.adminpreneur.ui-features.typography'); 
    }

}
