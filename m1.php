<?php

function add_some_extra(&$string)
{
	$string .= 'Hi BRO';

}
$str = 'This is string ';
add_some_extra($str);
echo $str;    // выведет 'Это строка, и кое-что еще.


?>




<?php

class RETRO {
  public $width;
  public $height;

  public function getArea() {
    return $this->width * $this->height;
  }
}

$sample = new RETRO();

$sample->width = 20;
$sample->height = 20;


echo $sample->getArea(); // 15 * 20 = 300


?>

















