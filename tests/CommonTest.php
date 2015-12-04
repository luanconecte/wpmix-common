<?php

use Mix;

class CommonTest extends PHPUnit_Framework_TestCase {

	protected $text = 'The fully qualified class name MUST have a top-level namespace name, also known as a "vendor namespace".
The fully qualified class name MAY have one or more sub-namespace names.
The fully qualified class name MUST have a terminating class name.
Underscores have no special meaning in any portion of the fully qualified class name.
Alphabetic characters in the fully qualified class name MAY be any combination of lower case and upper case.
All class names MUST be referenced in a case-sensitive fashion.
When loading a file that corresponds to a fully qualified class name ...

A contiguous series of one or more leading namespace and sub-namespace names, not including the leading namespace separator, in the fully qualified class name (a "namespace prefix") corresponds to at least one "base directory".
The contiguous sub-namespace names after the "namespace prefix" correspond to a subdirectory within a "base directory", in which the namespace separators represent directory separators. The subdirectory name MUST match the case of the sub-namespace names.
The terminating class name corresponds to a file name ending in .php. The file name MUST match the case of the terminating class name.
Autoloader implementations MUST NOT throw exceptions, MUST NOT raise errors of any level, and SHOULD NOT return a value.';

	public function testExcerpt() {
		$text = Mix\Common::excerpt($this->text, null);

		$this->assertLessThanOrEqual(10, strlen($text));
	}

	public function testConfig() {
		define("TEMPLATEPATH", __DIR__);

		$config = Mix\Common::config('emails');
		$this->assertEquals($config, ['fulanoum@gmail.com', 'fulanodois@yahoo.com.br']);

		$config = Mix\Common::config('telefones');
		$this->assertEquals($config, ['(00) 0000-0000', '(99) 9999-9999']);
	}

	public function setUp() {
	}

	public function tearDown() {
	}

}