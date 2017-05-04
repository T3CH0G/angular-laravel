<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;
use Illuminate\Http\Request;
class CommentController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return response()->json( Comment::get() );
    }
    /**
     * Return the specified resource using JSON
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return response()->json( Comment::find($id) );
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        Comment::create([
            'author' => $request->input('author'),
            'text' => $request->input('text')
        ]);
        return response()->json(['success' => true]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Comment::destroy($id);
        return response()->json(['success' => true]);
    }
}