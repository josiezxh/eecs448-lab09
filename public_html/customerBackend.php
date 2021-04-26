<style> <?php include 'style.css'; ?> </style>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    if (isset($_POST)) { 
        $frog = $_POST["frog"];
        $glue = $_POST["glue"];
        $jar = $_POST["jar"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $shipnum = $_POST["s"];

        if($shipnum == 1)
        {
            $shipping = "Free 7 Day";
            $sp = 0;
        }
        else if($shipnum == 2)
        {
            $shipping = "Over Night";
            $sp = 50;
        }
        else
        {
            $shipping = "Three Day";
            $sp = 5;
        }

        $frogP = 7.5;
        $glueP = 30;
        $jarP = 3.5;

        $ft = $frogP*$frog;
        $gt = $glueP*$glue;
        $jt = $jarP*$jar;
        $total = $ft + $gt + $jt + $sp;
        

        echo '<body class="checkout"><div>HELLO <b>' . $name . "</b>!!!!!!!!!!!!!!!<br>";
        echo "your password is <b> " . $password . "</b><br></div>";
        echo '<img class="checkout" src="https://media0.giphy.com/media/3o7btObApReFdPILwk/giphy.gif"></img>';

        echo '<table class="recipt">';
            echo '<tr class="lables">';
                echo '<td></td>';
                echo '<td>Quantity</td>';
                echo '<td>Cost Per Item</td>';
                echo '<td>Sub total</td>';
            echo '</tr>';
            echo '<tr class="item">';
                echo '<td>Frog</td>';
                echo '<td>'.$frog.'</td>';
                echo '<td>$'.$frogP.'</td>';
                echo '<td>$'.$ft.'</td>';
            echo '</tr>';
            echo '<tr class="item">';
                echo '<td>Glue</td>';
                echo '<td>'.$glue.'</td>';
                echo '<td>$'.$glueP.'</td>';
                echo '<td>$'.$gt.'</td>';
            echo '</tr>';
            echo '<tr class="item">';
                echo '<td>Jar</td>';
                echo '<td>'.$jar.'</td>';
                echo '<td>$'.$jarP.'</td>';
                echo '<td>$'.$jt.'</td>';
            echo '</tr>';
            echo '<tr class="ship">';
                echo '<td>Shipping</td>';
                echo '<td colspan="2">'.$shipping.'</td>';
                echo '<td>$'.$sp.'</td>';
            echo '</tr>';
            echo '<tr class="cost">';
                echo '<td colspan="3">Total cost</td>';
                echo '<td>$'.$total.'</td>';
            echo '</tr>';
        echo '</table>';


        echo '</body>';
    }
?>