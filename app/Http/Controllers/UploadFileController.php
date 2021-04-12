<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemDetails;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function uploadForm() {
    	return view('Project');
    }

    public function uploadSubmit(Request $request) {

    	$this->validate($request, [
		'name' => 'required',
		'photos' => 'required']);

		if($request->hasFile('photos')) {
			$allowedFileExtension=['png', 'jpg', 'txt', 'docx', 'pdf', 'jpeg'];

    		$files = $request->file('photos');
    		$destinationPath = 'uploads';

    		foreach ($files as $file) {
    			$filename = $file->getClientOriginalName();
    			$extension = $file->getClientOriginalExtension();
    			$check=in_array($extension, $allowedFileExtension);
    			if($check) {
    				$items = Item::create($request->all());
    				foreach ($request->photos as $photo) {
    					$filename = $photo->store('photos');
    					ItemDetails::create([
    					'item_id' => $items->id,
    					'filename' =>$filename]);
    				}
    			}
    			$file -> move($destinationPath, $file -> getClientOriginalName());
    		}
		}
    }
}
