<?php

$shops = array();

$shops[] = new ML('Granby Street', '76 Granby Street, Leicester, Leicestershire, LE1 1DJ', '52.6329249', '-1.1320287');
$shops[] = new ML('Evington Road', '143 Evington Road, Leicester LE2 1QJ', '52.6258618', '-1.1097720');
$shops[] = new ML('Horsefair Street', '41 Horsefair Street, Leicester, Leicestershire, LE1 5BP', '52.6335224', '-1.1338404');
$shops[] = new ML('Melton Road', '96 Melton Road, Leicester, Leicestershire, LE4 5EB', '52.6555466', '-1.1181182');
$shops[] = new ML('Narborough Road', '113 Narborough Rd, Leicester, Leicestershire LE3 0PA', '52.6271698', '-1.1504575');
$shops[] = new ML('East Park Road', '162 East Park Rd, Leicester, Leicestershire LE5 4QB', '52.6352902', '-1.1031918');
$shops[] = new ML('Cheapside', '10 Cheapside, Leicester, Leicestershire, LE1 5EA', '52.6358385', '-1.1336248');
$shops[] = new ML('Lower Parliament', '24 Lower Parliament St, Nottingham, Nottinghamshire NG1 3DA', '52.9552586', '-1.1454855');
$shops[] = new ML('High Street', '5 High Street , Loughborough LE11 2PY', '52.7716206', '-1.2053385');

class ML
{
  public function __construct($name, $address, $lat, $lon) {
    $this->name = $name;
    $this->address = $address;
    $this->lat = $lat;
    $this->lon = $lon;
  }
  public function get() {
    return $this->name . ':' . $this->address . ':' . $this->lat . ':' . $this->lon;
  }

  private $name;
  private $address;
  private $lat;
  private $lon;
}

?>
