<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <?php $number =($_GET["number"]); ?>
    <?php $min = "1"; ?>
    <?php $max = $number ; ?>
    <?php if ($number == intval($number, $base = 10)) {
        echo '<span>' . $number . '</span>';
    } else echo '<h1>' . "Questo non è un numero, sciocco" . '</h1>'; ?>
    <?php if($number > 0 && $number){
        $password = str_shuffle($number);
        echo '<h2>'."La tua password è:".'</h2>'. '<h2>'.$password.'</h2>';
    } elseif(isset($_GET["lettere"])){
        $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $password = $password.str_shuffle($letters);
        var_dump($letters);
    }
       
    ;?>
   
</body>

</html>