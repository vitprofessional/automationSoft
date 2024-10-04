<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeData extends Controller
{
    public function addEmployee(){
        return view('crm.addEmployee');
    }

    public function saveEmployee(Request $requ){
        $chk = Employee::where(['emailAddress'=>$requ->emailAddress])->get();
        if(!empty($chk) && count($chk)>0):
            return back()->with('error','Sorry! Email or mobile number already exist');
        endif;

        $addData = new Employee();

        $addData->fullName      = $requ->fullName;
        $addData->emailAddress  = $requ->emailAddress;
        $addData->mobileNumber  = $requ->mobileNumber;
        $addData->address       = $requ->fullAddress;
        $addData->fName         = $requ->fName;
        $addData->mName         = $requ->mName;
        $addData->sName         = $requ->sName;
        $addData->gender        = $requ->gender;
        $addData->dob           = $requ->dob;
        $addData->religion      = $requ->religion;
        $addData->refance       = $requ->refance;
        $addData->salary        = $requ->salary;
        $addData->blGroup       = $requ->blGroup;
        $addData->district      = $requ->district;
        $addData->position      = $requ->position;
        $addData->joiningDate   = $requ->joiningDate;

        if($addData->save()):
            return back()->with('success','Congratulation! Data entry successfull');
        else:
            return back()->with('error','Sorry! There was an error. Please try later');
        endif;
    }

    public function employeeList(){
        $employee = Employee::orderBy('id','DESC')->get();
        return view('crm.employeeList',['employee'=>$employee]);
    }
    
    public function editEmployee($id){
        $employee = Employee::find($id);
        return view('crm.editEmployee',['employee'=>$employee]);
    }

    public function updateEmployee(Request $requ){
        
        $addData = Employee::find($requ->employeeId);
        if($addData):
            $addData->fullName      = $requ->fullName;
            $addData->emailAddress  = $requ->emailAddress;
            $addData->mobileNumber  = $requ->mobileNumber;
            $addData->address       = $requ->fullAddress;
            $addData->fName         = $requ->fName;
            $addData->mName         = $requ->mName;
            $addData->sName         = $requ->sName;
            $addData->gender        = $requ->gender;
            $addData->dob           = $requ->dob;
            $addData->religion      = $requ->religion;
            $addData->refance       = $requ->refance;
            $addData->salary        = $requ->salary;
            $addData->blGroup       = $requ->blGroup;
            $addData->district      = $requ->district;
            $addData->position      = $requ->position;
            $addData->joiningDate   = $requ->joiningDate;

            if($addData->save()):
                return back()->with('success','Congratulation! Data update successfull');
            else:
                return back()->with('error','Sorry! There was an error. Please try later');
            endif;
        else:
            return back()->with('error','Sorry! No data found with your query');
        endif;
    }
    
    public function delEmployee($id){
        $employee = Employee::find($id);
        if($employee->delete()):
            return back()->with('success','Congratulation! Data deletion successfull');
        else:
            return back()->with('error','Sorry! There was an error. Please try later');
        endif;
    }
    
}
