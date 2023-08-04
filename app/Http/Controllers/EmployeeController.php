<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveRequest;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Get index
     */
    public function index()
    {
        $EmployeesList = Employees::orderBy('updated_at', 'DESC')->paginate(5);
        return view('Employees.index', ['employeesList' => $EmployeesList]);
    }

    /**
     * Get add form
     */
    public function add()
    {
        return view('Employees.add');
    }

    /**
     * Get edit form
     */
    public function edit(int $id)
    {
        $Employees = Employees::findOrFail($id);
        return view('Employees.edit', ['employee' => $Employees]);
    }

    /**
     * Save motorcycles
     */
    public function save(Request $request, int $id = null)
    {
        $params = $request->all();
        // if (empty($id)) {
        //     $params['name'] = sprintf(
        //         '%s-%s %s', 
        //         random_int(10, 50),
        //         \Str::upper(\Str::random(1)) . random_int(1, 9),
        //         random_int(10000, 99999)
        //     );
            Employees::create($params);
            session()->flash('message', 'Create Employees success!');
        // } else {
        //     $Employees = Employees::findOrFail($id);
        //     $Employees->update($params);
        //     session()->flash('message', 'Update Employees success!');
        // }
        return redirect(route('index'));
    }

    public function update(Request $request, $id )
    {
        $employee = Employees::findOrFail($id);
        $params = $request->all();
            Employees::update($employee);
            session()->flash('message', 'update Employees success!');
    
        return redirect(route('index'));
    }
    /**
     * Delete motorcycles
     */
    public function delete(int $id)
    {
        Employees::findOrFail($id)->delete();
        session()->flash('message', 'Delete Employees success!');
        return redirect(route('index'));
    }
}
