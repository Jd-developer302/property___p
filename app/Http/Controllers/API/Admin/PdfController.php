<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('perPage', 10);
        $pdfs = Pdf::paginate($perPage);
        return response()->json($pdfs);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'pdf_file' => 'nullable|mimes:pdf|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $validatedData['image'] = $image->store('pdf_images', 'public');
        }

        // Handle PDF file upload if present
        if ($request->hasFile('pdf_file')) {
            $validatedData['pdf_file'] = $request->file('pdf_file')->store('pdfs', 'public');
        }

        $pdf = Pdf::create($validatedData);

        return response()->json($pdf, 201);
    }

    public function show($id)
    {
        $pdf = Pdf::findOrFail($id);
        return response()->json($pdf);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf_file' => 'nullable|file|mimes:pdf|max:10000',
        ]);

        $pdf = Pdf::findOrFail($id);
        $pdf->title = $validatedData['title'];

        // Update image if provided
        if ($request->hasFile('image')) {
            if ($pdf->image) {
                Storage::disk('public')->delete($pdf->image);
            }
            $pdf->image = $request->file('image')->store('pdf_images', 'public');
        }

        // Update PDF file if provided
        if ($request->hasFile('pdf_file')) {
            if ($pdf->pdf_file) {
                Storage::disk('public')->delete($pdf->pdf_file);
            }
            $pdf->pdf_file = $request->file('pdf_file')->store('pdfs', 'public');
        }

        $pdf->save();

        return response()->json($pdf);
    }

    public function destroy($id)
    {
        $pdf = Pdf::findOrFail($id);

        // Delete associated files if they exist
        if ($pdf->image) {
            Storage::disk('public')->delete($pdf->image);
        }

        if ($pdf->pdf_file) {
            Storage::disk('public')->delete($pdf->pdf_file);
        }

        $pdf->delete();

        return response()->json(null, 204);
    }
}
