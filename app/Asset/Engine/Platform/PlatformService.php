<?php

namespace Nor\Asset\Engine\Platform;

use Nor\Asset\Schema\Platform\PlatformSchema as Schema;
use Nor\Http\Requests\Platform\PlatformRequest;

class PlatformService {

	$uid ;
	function __construct() {

	}

	public function listProducts() {
		$products = Schema::paginate(15);
		return json_encode($products);
	}
}