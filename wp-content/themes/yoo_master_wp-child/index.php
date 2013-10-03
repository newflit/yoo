<?php
/**
* @package   Master
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get warp
//$warp = Warp::getInstance();

// load main template file, located in /layouts/template.php
//echo $warp['template']->render('template');

/*
class Obj implements ArrayAccess{
	private $containner = array();

	public function __construct(){
		$this->containner = range(1, 10);
	}

	public function offsetSet($offset, $value){
		echo 'offsetSet()<br>offset: '.$offset.' Value: '.$value.'<br>';
		if (isset($this->containner[$offset])) {
			$this->containner[$offset] = $value;
		}
		else{
			throw new Exception("The offset is not exist", 1);
		}
	}

	public function offsetExists($offset){
		echo '<br>offsetExists(), Offset: '.$offset;
	}

	public function offsetUnset($offset){
		echo '<br>offsetUnset(), offset: '.$offset;
	}

	public function offsetGet($offset){
		echo '<br>offsetGet(), offset: '.$offset;
	}
}

$obj = new Obj();
echo $obj[0] = 'John';

if (isset($obj[10])) {
	# code...
}
if (empty($obj[1])) {
	# code...
}

unset($obj[10]);

echo $obj[2];

echo '<pre>';
print_r($obj);
echo '</pre>';

$it = new FilesystemIterator(dirname(__FILE__));
foreach($it as $file){
	echo $file->getFileName().'<br>';
};
*/

//Config
$dbhost = 'localhost';
$dbname = 'test';

//Connect to test database
$mongo = new Mongo("mongodb://$dbhost");
$db = $mongo->$dbname;

//Select collection ( collection is the table )
$collection = $db->shows;

//Pull a cursor query
$cursor = $collection->find();

foreach($cursor as $document){
	var_dump($document);
}

echo 'end';