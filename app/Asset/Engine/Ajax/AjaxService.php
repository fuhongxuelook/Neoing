<?php

namespace Neo\Asset\Engine\Ajax;
use Illuminate\Http\Response;
use App\Http\Requests;

use Illuminate\Http\Request;

class AjaxService  {

    private $request;
	function __construct(Request $request) {
        $this->request = $request;
	}

	public function dealAjax() {
        
        $name  = $this->request->input('name');
        $price = $this->request->input('price');
        $style = $this->request->input('style');
        $label = $this->request->input('label');
        $content = $this->request->input('content');
		$data = array(
            'name'  => $name,
            'price' => $price,
            'style' => $style,
            'label' => $label,
            'content' => $content,
        );
        return $data;
    }
}