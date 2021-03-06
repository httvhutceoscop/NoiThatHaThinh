<?php
/**
 * SecurityTest file
 *
 * PHP 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/2.0/en/development/testing.html>
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/2.0/en/development/testing.html CakePHP(tm) Tests
 * @package       Cake.Test.Case.Utility
 * @since         CakePHP(tm) v 1.2.0.5432
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Security', 'Utility');

/**
 * SecurityTest class
 *
 * @package       Cake.Test.Case.Utility
 */
class SecurityTest extends CakeTestCase {

/**
 * sut property
 *
 * @var mixed null
 */
	public $sut = null;

/**
 * testInactiveMins method
 *
 * @return void
 */
	public function testInactiveMins() {
		Configure::write('Security.level', 'high');
		$this->assertEquals(10, Security::inactiveMins());

		Configure::write('Security.level', 'medium');
		$this->assertEquals(100, Security::inactiveMins());

		Configure::write('Security.level', 'low');
		$this->assertEquals(300, Security::inactiveMins());
	}

/**
 * testGenerateAuthkey method
 *
 * @return void
 */
	public function testGenerateAuthkey() {
		$this->assertEquals(strlen(Security::generateAuthKey()), 40);
	}

/**
 * testValidateAuthKey method
 *
 * @return void
 */
	public function testValidateAuthKey() {
		$authKey = Security::generateAuthKey();
		$this->assertTrue(Security::validateAuthKey($authKey));
	}

/**
 * testHash method
 *
 * @return void
 */
	public function testHash() {
		$_hashType = Security::$hashType;

		$key = 'someKey';
		$hash = 'someHash';

		$this->assertSame(strlen(Security::hash($key, null, false)), 40);
		$this->assertSame(strlen(Security::hash($key, 'sha1', false)), 40);
		$this->assertSame(strlen(Security::hash($key, null, true)), 40);
		$this->assertSame(strlen(Security::hash($key, 'sha1', true)), 40);

		$result = Security::hash($key, null, $hash);
		$this->assertSame($result, 'e38fcb877dccb6a94729a81523851c931a46efb1');

		$result = Security::hash($key, 'sha1', $hash);
		$this->assertSame($result, 'e38fcb877dccb6a94729a81523851c931a46efb1');

		$hashType = 'sha1';
		Security::setHash($hashType);
		$this->assertSame(Security::$hashType, $hashType);
		$this->assertSame(strlen(Security::hash($key, null, true)), 40);
		$this->assertSame(strlen(Security::hash($key, null, false)), 40);

		$this->assertSame(strlen(Security::hash($key, 'md5', false)), 32);
		$this->assertSame(strlen(Security::hash($key, 'md5', true)), 32);

		$hashType = 'md5';
		Security::setHash($hashType);
		$this->assertSame(Security::$hashType, $hashType);
		$this->assertSame(strlen(Security::hash($key, null, false)), 32);
		$this->assertSame(strlen(Security::hash($key, null, true)), 32);

		if (!function_exists('hash') && !function_exists('mhash')) {
			$this->assertSame(strlen(Security::hash($key, 'sha256', false)), 32);
			$this->assertSame(strlen(Security::hash($key, 'sha256', true)), 32);
		} else {
			$this->assertSame(strlen(Security::hash($key, 'sha256', false)), 64);
			$this->assertSame(strlen(Security::hash($key, 'sha256', true)), 64);
		}

		Security::setHash($_hashType);
	}

/**
 * testCipher method
 *
 * @return void
 */
	public function testCipher() {
		$length = 10;
		$txt = '';
		for ($i = 0; $i < $length; $i++) {
			$txt .= mt_rand(0, 255);
		}
		$key = 'my_key';
		$result = Security::cipher($txt, $key);
		$this->assertEquals($txt, Security::cipher($result, $key));

		$txt = '';
		$key = 'my_key';
		$result = Security::cipher($txt, $key);
		$this->assertEquals($txt, Security::cipher($result, $key));

		$txt = 123456;
		$key = 'my_key';
		$result = Security::cipher($txt, $key);
		$this->assertEquals($txt, Security::cipher($result, $key));

		$txt = '123456';
		$key = 'my_key';
		$result = Security::cipher($txt, $key);
		$this->assertEquals($txt, Security::cipher($result, $key));
	}

/**
 * testCipherEmptyKey method
 *
 * @expectedException PHPUnit_Framework_Error
 * @return void
 */
	public function testCipherEmptyKey() {
		$txt = 'some_text';
		$key = '';
		$result = Security::cipher($txt, $key);
	}

/**
 * testRijndael method
 *
 * @return void
 */
	public function testRijndael() {
		$txt = 'The quick brown fox jumped over the lazy dog.';
		$key = 'DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi';

		$result = Security::rijndael($txt, $key, 'encrypt');
		$this->assertEquals($txt, Security::rijndael($result, $key, 'decrypt'));

		$result = Security::rijndael($key, $txt, 'encrypt');
		$this->assertEquals($key, Security::rijndael($result, $txt, 'decrypt'));

		$result = Security::rijndael('', $key, 'encrypt');
		$this->assertEquals('', Security::rijndael($result, $key, 'decrypt'));

		$result = Security::rijndael($txt, $key = 'this is my key of over 32 chars, yes it is', 'encrypt');
		$this->assertEquals($txt, Security::rijndael($result, $key, 'decrypt'));
	}

/**
 * testRijndaelInvalidOperation method
 *
 * @expectedException PHPUnit_Framework_Error
 * @return void
 */
	public function testRijndaelInvalidOperation() {
		$txt = 'The quick brown fox jumped over the lazy dog.';
		$key = 'DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi';
		$result = Security::rijndael($txt, $key, 'foo');
	}

/**
 * testRijndaelInvalidKey method
 *
 * @expectedException PHPUnit_Framework_Error
 * @return void
 */
	public function testRijndaelInvalidKey() {
		$txt = 'The quick brown fox jumped over the lazy dog.';
		$key = 'too small';
		$result = Security::rijndael($txt, $key, 'encrypt');
	}

}
