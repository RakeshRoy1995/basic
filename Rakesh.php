<?Php 

class Rakesh {
	public $hello;
	public function set_hello($hello) {
		$this->hello = $hello;
	}
	public function welcome()
	{
		return $this->hello . ' Rakesh';
	}
}