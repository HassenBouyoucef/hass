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

		$this->assertEquals(200, $response->getStatusCode())  ;
	}

	public function testhtacces()
	{
		$response = $this->call('GET', '/auth/login');

		$this->assertEquals(200, $response->getStatusCode())  ;
	}

	public function test_login()
{
    $this->visit('/')
         ->click('se connecter')
         ->seePageIs('/auth/login');
}

}
