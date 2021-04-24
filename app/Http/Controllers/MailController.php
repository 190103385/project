<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;
use App\Models\Item;
use App\Models\ItemDetails;

class MailController extends Controller
{
    function send(Request $request) {
    	$this->validate($request, [
    			'name'       =>      'required',
    			'surname'    =>      'required',
    			'email'      =>      'required|email',
    			'comment'    =>      'required'
    	]);

    	$data = array(
    		'name'         =>       $request->name,
    		'surname'      =>       $request->surname,
    		'email'        =>       $request->email,
    		'comment'      =>       $request->comment
    		 );

    	if($request->hasFile('photos')) {
			$allowedFileExtension=['png', 'jpg', 'txt', 'docx', 'pdf', 'jpeg'];

    		$files = $request->file('photos');
    		$destinationPath = 'uploads';

    		$email = $request->email;
    		$comment = $request->comment;

    		foreach ($files as $file) {
    			$filename = $file->getClientOriginalName();
    			$extension = $file->getClientOriginalExtension();
    			$check=in_array($extension, $allowedFileExtension);
    			if($check) {
    				$items = Item::create($request->all());
    				foreach ($request->photos as $photo) {
    					$filename = $photo->store('photos');
    					ItemDetails::create(
    						[
    							'item_id' => $items->id,
    							'filename' =>$filename,
    							'email' => $email,
    							'comment' => $comment
    						]);
    				}
    			}
    			$file -> move($destinationPath, $file -> getClientOriginalName());
    		}
		}

    	Mail::to('190103385@stu.sdu.edu.kz')->send(new DemoEmail($data));

    	return back()->with('success', 'Thanks for contacting us!!!');
    }
}
