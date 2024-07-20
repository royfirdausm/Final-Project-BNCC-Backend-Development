// app/Http/Controllers/InvoiceController.php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::where('user_id', auth()->id())->get();
        return view('invoices.index', compact('invoices'));
    }

    public function store(Request $request)
    {
        // Logic for processing the purchase and creating an invoice
    }
}
