<?php

namespace Nor\Asset\Engine\Platform;

use Nor\Asset\Schema\Platform\PlatformSchema as Schema;
use Nor\Http\Requests\Platform\PlatformRequest;

class PlatformService {

	$uid ;

	function __construct() {
	}

	public function listProducts(PlatformRequest $request) {
		$circle = $request->getCircle();
		if(isset($circle)) {
			$products = Schema::circle($circle)->desc()->paginate(15);
		}

		return json_encode($products);
	}

	public function getProductById($id) {
		$product = Schema::id($id)->first();
		return json_encode($product);
	}

	public function getUserProducts($uid) {
		$products = Schema::uid($uid)->desc()->paginate(15);
		return json_encode($products);
	}
    
    public function 

}