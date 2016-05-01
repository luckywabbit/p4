<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

use Badcow\LoremIpsum\Generator;


class ProductController extends Controller
{
    /**
     * Responds to requests to /li
     */
    public function getProductIndex(Request $request)
    {
		
		//return 'ProdInfo';
		
		return view('product.product');
		
		
		
		/*
		
		
		//validate Request
		$this->validate($request, [
			'liCount' => 'required|numeric|min:1|max:20'
		]);
	
		//Get requested number of lorem Ipsum paragraphs
        $liCount = $request->input('liCount');
		
		/// Instatiate Generator and number of paragraphs
        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($liCount);

        //return Lorem Ipsum view pass the $paragraphs data
        return view('li.li', ['liCount' => $liCount, 'lorem' => $paragraphs]);
*/



    }#End getLiIndex()
	
	
    public function getProductEdit(Request $request)
    {
		

		
		return view('product.edit');
		
	}
			
	
	
	
}#End class ProductController extends BaseController
