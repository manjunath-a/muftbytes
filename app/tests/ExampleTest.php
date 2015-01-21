<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');
		$this->assertTrue($this->client->getResponse()->isOk());
	}
        
        public function testLogin()
	{
		$crawler = $this->client->request('POST', 'login');
		$this->assertFalse($this->client->getResponse()->isOk());
                $response = $this->action('POST', 'LoginController@authenticate', array('email' => 'admin@muftbytes.com','password'=>'admin123'));
                $crawler = $this->client->request('GET','dashboard');
	}
        public function testAdmin()
        {
            $crawler = $this->client->request('GET', 'user');
	    $this->assertTrue($this->client->getResponse()->isOk());
        }
        
        

}
