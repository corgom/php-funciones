<h1>PHP - Funciones definidas por el usuario</h1>
<?php
/* FUNCIONES */


// declaracion funcion:
function miFuncionSinParametro(){
    //Sentencias. Ejemplo usando echo:
    echo "<h2>Ejecutando funcion sin parametros o argumentos</h2>";
    echo "<ul>";
    echo "<li>Nombre funcion: miFuncionSinParametro";
    echo "<li>Parametros recibidos: ninguno";
    echo "</ul>";
}

// llamada a funcion:
miFuncionSinParametro();
echo "<hr />";

//==============================================================================

// declaracion funcion:
function miFuncionConParametro($miParametro){
    //Sentencias. Ejemplo usando echo:
    echo "<h2>Ejecutando funcion con parametros o argumentos</h2>";
    echo "<ul>";
    echo "<li>Nombre funcion: miFuncionSConParametro";
    echo "<li>Parametros recibidos: \$miParametro = " . $miParametro;
    echo "</ul>";
}
// llamada a funcion:
miFuncionConParametro("PHP");
echo "<hr />";

//==============================================================================

/* funcion sin parametro */
function miFuncionConParametroValorDefault($param = "VALOR DEFAULT"){
    //Sentencias. Ejemplo usando echo:
    echo "<h2>Ejecutando funcion con parametros con valor por omision</h2>";
    echo "<ul>";
    echo "<li>Nombre funcion: miFuncionConParametroValorDefault";
    echo "<li>Parametros recibidos: \$param = " . $param;
    echo "</ul>";
}
miFuncionConParametroValorDefault();
miFuncionConParametroValorDefault("PHP-5");
echo "<hr />";

//==============================================================================

echo "<h2>Funcion que retorna o regresa valor</h2>";
function miFuncionRegresaValor($param1, $param2){
    return $param1 * $param2;
}

miFuncionRegresaValor(2, 10); // El valor regresado no se asigna a ninguna variable,
                              // ni se hace nada con él.
$resultado =  miFuncionRegresaValor(2, 10); // El valor regresado se asigna a $resultado
echo "Valor regresado: $resultado"; // Uso del valor asignado a $resultado
echo "<hr />";


//==============================================================================

echo "<h2>Funcion que recibe parametros por referencia</h2>";

// funcion argumento por valor
$edad = 50;
echo "Edad antes de funcion: $edad <br />"; // Uso del valor asignado a $resultado
function funcionArgumentoPorValor($param){
    $param = $param + 10;
}

funcionArgumentoPorValor($edad);
echo "Edad despues de funcion (argumento por valor): $edad"; // Uso del valor asignado a $resultado
echo "<hr />";

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

$edad = 50;
echo "Edad antes de funcion: $edad <br />"; // Uso del valor asignado a $resultado
function funcionArgumentoPorReferencia(&$param){
    $param = $param + 10;
}

funcionArgumentoPorReferencia($edad);
echo "Edad despues de funcion (argumento por referencia): $edad"; // Uso del valor asignado a $resultado
echo "<hr />";

?>
