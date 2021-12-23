<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";

PrintHead();
PrintJumbo( $title = "Besmettingen per gemeenten" ,
                        $subtitle = "Cijfers van 17 november 2021" );
PrintNavbar();
?>

<div class="container">
    <div class="row">

<?php
    //get data
    $data = GetData( "select * from gemeenten" );

    //get template
    $template = file_get_contents("templates/column.html");

    //merge
    $output = MergeViewWithData( $template, $data );
    print $output;
?>

    </div>
</div>

</body>
</html>