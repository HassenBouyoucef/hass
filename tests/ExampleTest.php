<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(201,$response->getStatusCode())  ;
	}

	

	/*public function test_login()
{
    $this->visit('/')
         ->click('se connecter')
         ->seePageIs('/auth/login');
}*/

}
