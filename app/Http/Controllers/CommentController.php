<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Input;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CommentController extends Controller {


    protected $rules = [
        'user' => 'required',
        'comment' => 'required'
    ];

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $this->validate($request, $this->rules);
		$comment = Input::all();
        \App\Comment::create(array_except($comment, ['_token']));
        return redirect()->back();
//        $comment = new Comment;
//        $comment->name = Input::get('name');
//        $comment->name = Input::get('name');
//        $comment->name = Input::get('name');
//        $comment->save();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
