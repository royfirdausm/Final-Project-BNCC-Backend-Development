// app/Http/Controllers/ToyController.php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    public function index()
    {
        $toys = Toy::all();
        return view('toys.index', compact('toys'));
    }

    public function create()
    {
        return view('toys.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image'
        ]);

        $toy = new Toy($request->all());

        if ($request->hasFile('image')) {
            $toy->image = $request->file('image')->store('images');
        }

        $toy->save();

        return redirect()->route('toys.index')->with('success', 'Toy created successfully.');
    }

    public function show(Toy $toy)
    {
        return view('toys.show', compact('toy'));
    }

    public function edit(Toy $toy)
    {
        return view('toys.edit', compact('toy'));
    }

    public function update(Request $request, Toy $toy)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image'
        ]);

        $toy->update($request->all());

        if ($request->hasFile('image')) {
            $toy->image = $request->file('image')->store('images');
        }

        return redirect()->route('toys.index')->with('success', 'Toy updated successfully.');
    }

    public function destroy(Toy $toy)
    {
        $toy->delete();
        return redirect()->route('toys.index')->with('success', 'Toy deleted successfully.');
    }
}
