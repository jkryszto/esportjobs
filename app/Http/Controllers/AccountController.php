<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateCompanyInfoRequest;

class AccountController extends Controller
{
    public function edit()
    {
        return view('account.edit');
    }

    public function update(UpdateCompanyInfoRequest $request)
    {
        $company = Auth::user()->company;
   
        $company->employees = $request->employees;
        $company->location = $request->location;
        $company->url = $request->url;
        $company->description = $request->description;

        if($request->logo) {
            $company->logo = $this->update_logo(Auth::user(), $request->logo);
        }

        $company->update();

        echo 'good update';
    }

    public function update_logo($user, $logo)
    {
       return $logo->store('users/'. $user->id. '/company', 'public');
    }
}
