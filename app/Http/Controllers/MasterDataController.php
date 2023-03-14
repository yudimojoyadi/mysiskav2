<?php

namespace App\Http\Controllers;

use App\Models\CompanyModel;
use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function CompanyAll()
    {
        $companyAll = CompanyModel::all();
        return view('backend.pages.masterdata.company_all', compact('companyAll'));
    } //End Method
}
