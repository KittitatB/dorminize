<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Staff;
class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::latest()->paginate(10);
        return view('staffs.index',compact('staffs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'ssn' => 'required',
            'name' => 'required',
            'position' => 'required',
            'gender' => 'required',
            'work_hour' => 'required',
            'phone_number' => 'required',
            'salary' => 'required',
        ]);
        Staff::create($request->all());
        return redirect()->route('staffs.index')
                        ->with('success','Staff created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  string  $ssn
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('staffs.show',compact('staff'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $ssn
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staffs.edit',compact('staff'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $ssn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Staff $staff)
    {
        request()->validate([
            'ssn' => 'required',
            'name' => 'required',
            'position' => 'required',
            'gender' => 'required',
            'work_hour' => 'required',
            'phone_number' => 'required',
            'salary' => 'required',
        ]);
        $staff->update($request->all());
        return redirect()->route('staffs.index')
                        ->with('success','Staff updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $ssn
     * @return \Illuminate\Http\Response
     */
    public function destroy($ssn)
    {
        Staff::destroy($ssn);
        return redirect()->route('staffs.index')
                        ->with('success','Staff deleted successfully');
    }
}