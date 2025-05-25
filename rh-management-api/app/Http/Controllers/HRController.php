<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;

class HRController extends Controller
    {
        public function employeesWithDepartments()
    {
        return Employee::with('department')->get();
    }

    public function departmentWithEmployees($id)
    {
        return Department::with('employees')->findOrFail($id);
    }

    public function employeeDepartment($employeeId)
    {
        $employee = Employee::with('department')->findOrFail($employeeId);
        return $employee->department;
    }

    public function departmentEmployees($departmentId)
    {
        $department = Department::with('employees')->findOrFail($departmentId);
        return $department->employees;
    }
}