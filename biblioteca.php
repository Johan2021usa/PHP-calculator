    <?php 
    /**Realizar un programa que contenga dos clases, una de ellas debe contener una funcion que reciba dos parametros y ejecute una operacion ya sea suma, resta, multiplicacion o division
     *Se debe enviar tambien el tipo de operacion para destingir el tipo de operacion a realizar 
     * se debe crear una interfaz grafica con formularios y botones para que se envien los datos a ser operados
     * se debe enviar la descripcion del proceso en pdf con pantallazos
     * 
     * 
     */

     function calculation($value1, $value2, $operation){
        switch($operation){
            case "sum" : $total = $value1+$value2;
                break;
            case "substraction": $total = $value1-$value2;
                break;
            case "division": $total = $value1/$value2;
                break;
            case "multiplication": $total = $value1*$value2;
                break;
        }

        return $total;
     }
