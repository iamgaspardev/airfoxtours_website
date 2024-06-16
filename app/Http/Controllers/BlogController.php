<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Blog;

class BlogController extends Controller
{
public function index()
{
$tours = Tour::all();
$blogs = Blog::all();

return view('blog', compact('tours', 'blogs'));
}

public function create()
{
return view('blog.uploadblog');
}

public function store(Request $request)
{
$request->validate([
'title' => 'required',
'content' => 'required',
'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
]);

$imagePath = $request->file('image')->store('uploads', 'public');

// Save data to the database
$blog = new Blog();
$blog->title = $request->title;
$blog->content = $request->content;
$blog->image = $imagePath; // Assign the image path, not the file object
$blog->save();

return redirect()->route('blogs.create')->with('success', 'Blog post added successfully!');
}

}