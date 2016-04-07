
<?php

//http://www.akchauhan.com/php-class-for-converting-xml-to-object-and-object-to-xml/

class ObjectAndXML {
	private static $xml;
 
	// Constructor
	public function __construct() {
		$this->xml = new XmlWriter();
		$this->xml->openMemory();
		$this->xml->startDocument('1.0');
		$this->xml->setIndent(true);
	}
 
	// Method to convert Object into XML string
	public function objToXML($obj) {
		$this->getObject2XML($this->xml, $obj);
 
		$this->xml->endElement();
 
		return $this->xml->outputMemory(true);
	}
 
	// Method to convert XML string into Object
	public function xmlToObj($xmlString) {
		return simplexml_load_string($xmlString);
	}
 
	private function getObject2XML(XMLWriter $xml, $data) {
		foreach($data as $key => $value) {
			if(is_object($value)) {
				$xml->startElement($key);
				$this->getObject2XML($xml, $value);
				$xml->endElement();
				continue;
			}
			else if(is_array($value)) {
				$this->getArray2XML($xml, $key, $value);
			}
 
			if (is_string($value)) {
				$xml->writeElement($key, $value);
			}
		}
	}
 
	private function getArray2XML(XMLWriter $xml, $keyParent, $data) {
		foreach($data as $key => $value) {
			if (is_string($value)) {
				$xml->writeElement($keyParent, $value);
				continue;
			}
 
			if (is_numeric($key)) {
				$xml->startElement($keyParent);
			}
 
			if(is_object($value)) {
				$this->getObject2XML($xml, $value);
			}
			else if(is_array($value)) {
				$this->getArray2XML($xml, $key, $value);
				continue;
			}
 
			if (is_numeric($key)) {
				$xml->endElement();
			}
		}
	}
}
?>

<?php
class Mail{

public function sendMail($toSomebody) {

		$subject = "HTML sample email";
 
		$txt = "<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		$headers .= "From: webmaster@example.com" . "\r\n" .
          "CC: somebodyelse@example.com";
 
		return mail($toSomebody,$subject,$txt,$headers);
	}

}
?>