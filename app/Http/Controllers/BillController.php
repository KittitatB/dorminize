<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bill;
class BillController extends Controller
{
    public function index()
    {
        $bills = Bill::latest()->paginate(10);
        return view('bills.index',compact('bills'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bills.create');
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
            'elec_unit' => 'required',
            'water_unit' => 'required',
            'date' => 'required',
        ]);
        Bill::create($request->all());
        return redirect()->route('bills.index')
                        ->with('success','Bill created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $invoice_number
     * @return \Illuminate\Http\Response
     */
    public function show(bill $bill)
    {
        return view('bills.show',compact('bill'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $invoice_number
     * @return \Illuminate\Http\Response
     */
    public function edit(bill $bill)
    {
        return view('bills.edit',compact('bill'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $invoice_number
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Bill $bill)
    {
        request()->validate([
            'elec_unit' => 'required',
            'water_unit' => 'required',
            'date' => 'required',
        ]);
        $bill->update($request->all());
        return redirect()->route('bills.index')
                        ->with('success','Bill updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $invoice_number
     * @return \Illuminate\Http\Response
     */
    public function destroy($invoice_number)
    {
        Bill::destroy($invoice_number);
        return redirect()->route('bills.index')
                        ->with('success','Bill deleted successfully');
    }
}