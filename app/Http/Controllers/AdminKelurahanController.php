<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKelurahanController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminkelurahan.adminkelurahan'); 
    }
    public function charts()
    {
        return view('admin.adminkelurahan.charts.chartjs'); 
    }
    public function forms()
    {
        return view('admin.adminkelurahan.forms.basic_elements'); 
    }
    public function tables()
    {
        return view('admin.adminkelurahan.tables.basic-table'); 
    }
    public function icons()
    {
        return view('admin.adminkelurahan.icons.mdi'); 
    }
    public function samples1()
    {
        return view('admin.adminkelurahan.samples.error-404'); 
    }
    public function samples2()
    {
        return view('admin.adminkelurahan.samples.error-500'); 
    }
    public function docs()
    {
        return view('admin.adminkelurahan.docs.documentation'); 
    }
    public function uifeatures1()
    {
        return view('admin.adminkelurahan.ui-features.buttons'); 
    }
    public function uifeatures2()
    {
        return view('admin.adminkelurahan.ui-features.dropdowns'); 
    }
    public function uifeatures3()
    {
        return view('admin.adminkelurahan.ui-features.typography'); 
    }
}
