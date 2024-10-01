<?php
  
namespace App\Http\Controllers;
  
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
 
class ProductController extends Controller
{
    public function dashboard()
    {
          // Jumlah input hari ini
        $todayCount = Product::whereDate('tanggal', Carbon::today())->count();
        // Jumlah input kemarin
        $yesterdayCount = Product::whereDate('tanggal', Carbon::yesterday())->count();
        // Jumlah input bulan ini
        $thisMonthCount = Product::whereMonth('tanggal', Carbon::now()->month)
                                ->whereYear('tanggal', Carbon::now()->year)
                                ->count();
        // Jumlah input keseluruhan
        $totalCount = Product::count();
        return view('dashboard', compact('todayCount', 'yesterdayCount', 'thisMonthCount', 'totalCount'));
    }
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
  
        return view('products.index', compact('product'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
 
        return redirect()->route('products')->with('success', 'Data Berhasil di Tambahkan!');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'Data Berhasil di Perbarui!');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'Data Berhasil di Hapus!');
    }
}