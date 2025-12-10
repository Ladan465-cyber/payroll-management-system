<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PayrollController extends Controller
{
    public function create()
    {
        // Show basic payroll run form
        return view('payrolls.create');
    }

    public function process(Request $request)
    {
        // Placeholder: enqueue payroll calculation job or run calculation
        // For now, return a simple JSON response
        return response()->json(['status' => 'processing']);
    }

    public function downloadPayslip($id)
    {
        // Example: return a file from storage (MinIO)
        $path = "payslips/{$id}.pdf";
        if (!Storage::exists($path)) {
            abort(404);
        }
        return Storage::download($path);
    }
}
