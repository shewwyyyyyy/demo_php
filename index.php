<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> this is php </p>
    <?php
        $weekname = "tuesday";
        
        switch($weekname){
            case "monday":
            case "tuesday":
            case "wednesday":
            case "thursday":
            case "friday":
                echo "weekdays";
                break;
            case "saturday":
            case "sunday":
                echo "weekends";
                break;

            /*
            case "monday":
                echo "weekdays";
                break;
            case "tuesday":
                echo "weekdays";
                break;
            case "wednesday":
                echo "weekdays";
                break;
            case "thursday":
                echo "weekdays";
                break;
            case "friday":
                echo "weekdays";
                break;
            case "saturday":
                echo "weekends";
                break;
            case "sunday":
                echo "weekends";
                break;
            default:
                echo "not valid day";
                break; */

            

        }

    ?>
</body>
</html>