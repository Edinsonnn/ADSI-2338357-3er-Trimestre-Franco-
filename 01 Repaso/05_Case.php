<h1>Case php</h1>
<?php
$varday = "L";

switch ($varday ) {
    case 'L' or 'l':
echo("Lunes");
        break;
        case 'M' or 'm':
            echo("Martes");
                    break;
                    case 'W' or 'w':
                        echo("Miercoles");
                                break;
                                case 'J' or 'j':
                                    echo("Jueves");
                                            break;
                                            case 'V' or 'v':
                                                echo("viernes");
                                                        break;
                                                        case'S' or 's';
                                                        echo("Sabado");
                                                        break;
                                                        case 'D' or 'd';
                                                        echo("Domingo");
                                                        break;
    default:
        echo("Entrada invalida xxxx");
        break;
}

?>