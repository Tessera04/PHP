<?php
//Esto es un comentario


/*
Esto es un comentario multinivel
*/

//echo escribe todo en la misma linea
echo "Hola Mundo";
//Para dar un salto de linea debemos poner dentro de las comillas un \n o <br> como en html(No olvidar que es la linea para el otro lado)

//Variables
//Se inicializan con el signo dolar $
$my_string = "Soy un String \n";
echo $my_string . "\n"; //Si ponemos un . tenemos una concatenacion, es como el + en Js
echo gettype($my_string) . "<br>"; //Nos muestra que tipo de valor estamos manejando en la variable, en este caso la respuesta va a ser string

//ENTEROS
$my_number = 6;
echo $my_number . "<br>";

//OPERACIONES
//De esta forma podemos realizar operaciones con php
$my_int = 5;
$my_int = $my_int + 5;
echo $my_int . "<br>";
echo gettype($my_int) . "<br>";

//NUMEROS CON COMA
$my_double = 6.5;
echo $my_double . "<br>";
echo gettype($my_double) . "<br>";

//Suma de diferentes tipos, un double y un integer
echo $my_int + $my_double . "<br>";

//BOOLEANOS
//Los booleanos cuando preguntamos por tipo nos devuelve 1 o 0, 1 para true y 0 para false
//Tambien puede pasar que si asignamos que true sea 0, false automaticamente pasa a valer 1
$my_bool = true;
echo $my_bool . "<br>";
echo gettype($my_bool) . "<br>";

//Metiendo variables a los textos
echo "El valor de mi integer es $my_int y el valor de mi boolean es $my_bool" . "<br>";

//CONSTANTES
//A diferencia de las variables, estas no se pueden mutar y tienen "un solo valor para siempre"
const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT . "<br>";

//ARRAYS (Listas)
//Podemos crear arrays. Los Arrays se crean dando nombre a una variable y luego con corchetes
$my_array = [$my_int, $my_bool, $my_double];
echo gettype($my_array) . "<br>";
//Para elegir que elemento mostrar del array, se hace igual que en otros lenguajes. Siempre empiezan por el 0.
echo $my_array[0] . "<br>";
echo $my_array[2] . "<br>";

//AÑADIR ELEMENTOS AL ARRAY
array_push($my_array, $my_string); //Primero seleccionamos el array donde lo queremos y segundo le damos el valor a agregar
//En este caso debemos usar print_r para mostrar los datos, ya que echo no puede
//echo $my_array . "<br>";
print_r($my_array);

//DICCIONARIO (key:value)
$my_matias = "Un capo el vago";
$my_dict = array("matias" => $my_matias, "bool" => $my_bool, "number" => $my_int);
//Nos va a decir que el tipo del diccionario es un array
echo gettype($my_dict) . "<br>";
//A diferencia de los arrays que nos marcan la posicion de un objeto con numeros, los diccionarios nos la marcan con las palabras que nosotros les pusimos
//Por ejemplo en vez de decir [1], va a decir [matias] (en este caso de arriba)
print_r($my_dict);
echo $my_dict["number"] . "<br>"; //Nos da como resultado 10, que es el numero guardado en number

//SET
array_push($my_array, "Brais");
array_push($my_array, "Brais");
print_r($my_array);
print_r(array_unique($my_array)); //Con esto lo que logramos es no ver elementos duplicados, solo 1 de cada

//FLUJOS O CICLOS FOR
//Es igual que en otros lenguajes de programacion, pero en el caso de js se usa i, esa i es una variable.
//Por esa misma razon usamos una variable($) $index
for($index = 0; $index <= 10; $index++){
    echo $index . "<br>";
}

//FOREACH
//Con este codigo recorremos todo el array y asignamos los valores de los items a la variable $my_item
//Con leer my_array AS my_item nos damos cuenta pq se asigna en esa variable
foreach($my_array as $my_item){
    echo $my_item . "<br>";
}

//BUCLE WHILE
$index = 0;
while($index <= 10){
    echo $my_array[$index] . "<br>";
    $index++;
} //Con este codigo nos va a saltar 5 undefined, pq nuestro array que creamos antes tiene solo 5 items

//IF Y ELSE
//Como en todo lenguaje de programacion, tenemos if, ifelse y else
//Nada fuera de lo comun
//Tambien acepta los && y ||
if($my_int = 10){
    echo "El valor es 10" . "<br>";
}else{
    echo "El valor no es 10" . "<br>";
}

//FUNCIONES
//Creamos la funcion y luego la llamamos
//Tambien podemos ponerle condiciones a la funcion, en este caso agregar un num que se va a guardar en la variable $num
function print_number($num) {
    echo $num . "<br>";
}

print_number(10);
print_number(11);
print_number(12);

//CLASES
//Creamos la clase, que es la forma de hacer un objeto
//ponemos los valores que van a ser publicos, creamos un constructor (es una funcion que recopila los datos)

class MyClass{
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

//Por ultimo creamos un nuevo objeto y preguntamos sus valores, primero todos y luego uno en especifico
$my_class = new MyClass("Matias", 23);
print_r($my_class);
echo $my_class -> name . "<br>";
//Tambien podemos cambiar el valor dentro de una clase
$my_class->name = "Eluney";
echo $my_class -> name . "<br>";
//Por ultimo si le preguntamos que valor tiene myClass, nos va a decir que es un OBJETO
echo gettype($my_class) . "<br>";
?>