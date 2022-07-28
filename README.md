# sacode-phpiii-project02-Nick
Learning Data Types of PHP Programming Language (02)

### What I learned today
	✅ String
	✅ Integer
	✅ Float
	✅ Array
	✅ Boolean
	✅ Null
	✅ Object Oriented Programming

### Data Types

```
string : array of characters.
int    : integer (for number, it can be positive or negative value).
float  : for storing decimal value
array  : collection of some data with same data types.
boolean: data types that only stored "true" or "false" value.
null   : Empty data types, no value. empty sets
OOP    : Object Oriented Programming.
```

### String

```
<?php
	$a = "Hello World!";
	$b = "Hello World!";

	echo $a,"<br>", $b, "<br> <br>";

	var_dump($a);

	$c = $a."_".$b;

	echo "<br>", $c;
?>
```

### Integer

```
<?php
	$x = 23;

	echo "this is using ECHO ", $x, "<br>";
	echo "this is using var_damp(x) -> ", var_dump($x);
?>
```

### Float

```
<?php
	$x = 123.45;
	var_dump($x);

	echo "<br>", $x;

	$xy = "Samuel";
	echo "<br>";
	var_dump($xy);
?>
```

### Array

```
<?php
	$students =  array("Nick", "Sam", "Archy","Delvi");

	var_dump($students);
	echo "<br>";

	for($i = 0; $i < 4; $i++)
		echo $students[$i], "<br>";
	echo "<br>";;
	foreach ($students as $i)
		echo "Nama: ", $i, "<br>";
	
	sort($students);
	echo "<br>";;
	foreach ($students as $i)
		echo "Nama: ", $i, "<br>";

	$class = ["php I", "php II", "php III"];
	var_dump($class);
	echo "<br>";

	echo $class[2];
?>
```

### Boolean

```
<?php
	$x = true;
	$y = false;

	var_dump($x);
	echo "<br>";
	var_dump($y);

	echo "<br>",$x;
?>
```


### Null

```
<?php
	$x = 12;
	var_dump($x);
	echo "<br>";
	echo $x,"<br>";

	$x = null;
	var_dump($x);
	echo "<br>";

	$x = "string";
	echo $x;
?>
```

### Object-Oriented Programming

```
<?php
	
	class Car{
		public $color, $model;

		public function __construct($color, $model){
			$this->color = $color;
			$this->model = $model;
		}

		public function message(){
			return "My car is a ". $this->color." ". $this->model. "!";
		}
	}


	

	$myCar = new Car("black", "Volvo");
	echo $myCar -> message();
	echo "<br>";

	echo $myCar->color, "<br>";
	$myCar = new Car("red", "Toyota");
	echo $myCar -> message();
	echo "<br>";
?>
```