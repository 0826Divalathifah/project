<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaWisata extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminwisata.adminwisata'); 
    }
    public function charts()
    {
        return view('admin.adminwisata.charts.chartjs'); 
    }
    public function forms()
    {
        return view('admin.adminwisata.forms.basic_elements'); 
    }
    public function tables()
    {
        return view('admin.adminwisata.tables.basic-table'); 
    }
    public function icons()
    {
        return view('admin.adminwisata.icons.mdi'); 
    }
    public function samples1()
    {
        return view('admin.adminwisata.samples.error-404'); 
    }
    public function samples2()
    {
        return view('admin.adminwisata.samples.error-500'); 
    }
    public function docs()
    {
        return view('admin.adminwisata.docs.documentation'); 
    }
    public function uifeatures1()
    {
        return view('admin.adminwisata.ui-features.buttons'); 
    }
    public function uifeatures2()
    {
        return view('admin.adminwisata.ui-features.dropdowns'); 
    }
    public function uifeatures3()
    {
        return view('admin.adminwisata.ui-features.typography'); 
    }
}
