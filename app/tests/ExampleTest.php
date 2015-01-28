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
        
        public function testUserEdit()
        {
            $crawler = $this->client->request('GET', 'edit/2');
            $this->assertTrue($this->client->getResponse()->isOk());
        }
        
        public function testViewUsage()
        {
            $crawler = $this->client->request('GET', 'show/2');
            $this->assertTrue($this->client->getResponse()->isOk());
        }
        
        public function testUpdate()
        {
            $crawler = $this->client->request('POST', 'update/2');
            $this->assertFalse($this->client->getResponse()->isOk());
            $response = $this->action('POST', 'UsersController@update',array('enablerecharge'=>1,'enableuser'=>1,'id'=>'2'));
            //$this->assertResponseOk();   
        }
        
        public function testApplication()
        {
            $crawler = $this->client->request('GET', 'application');
            $this->assertTrue($this->client->getResponse()->isOk());
        }
        
        public function testAddApplication()
        {
            $crawler = $this->client->request('GET', 'addapplication');
            $this->assertTrue($this->client->getResponse()->isOk());
        }
        
        public function testAjaxCall()
        {
            $crawler = $this->client->request('GET', 'getdescription/www.homeconnectonline.com');
            $this->assertTrue($this->client->getResponse()->isOk());
        }
        
        public function testInsertApplication()
        {
            $crawler = $this->client->request('POST','storeapplication');
            $this->assertFalse($this->client->getResponse()->isOk());
        }
        
        Public function testEditApplication()
        {
            $crawler = $this->client->request('GET','editapplication/{id}');
            $this->assertTrue($this->client->getResponse()->isOk());
        }
        
        

}
