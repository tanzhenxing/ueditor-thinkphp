<?php

namespace Ueditor\Test;

use Ueditor\Ueditor;

class UeditorTest extends TestCase
{
	public function testUploadImage()
	{
		$ueditor = new Ueditor();
		$this->assertEquals(400,$ueditor->getStatus());
	}
}