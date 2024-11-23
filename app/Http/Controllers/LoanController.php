<?php 
 
namespace App\Http\Controllers; 
use App\Models\Loan; 
use Illuminate\Http\Request; 
 
class LoanController extends Controller 
{ 
    public function store(Request $request) 
    { 
        $loan = new Loan(); 
        $loan->book_id = $request->book_id; 
        $loan->user_id = $request->user_id; 
        $loan->loan_date = $request->loan_date; 
        $loan->return_date = $request->return_date; 
        $loan->status = 'pending'; 
        $loan->save(); 
        return response()->json($loan, 201); 
    } 
 
    public function index() 
    { 
        return Loan::with('book')->where('status', 'pending')->get(); 
    } 
 
    public function returnBook($id) 
    { 
        $loan = Loan::find($id); 
        $loan->status = 'returned'; 
        $loan->save(); 
        return response()->json($loan); 
    } 
}