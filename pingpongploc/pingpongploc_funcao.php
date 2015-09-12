<html>
    <head>
        <link rel='stylesheet' type='text/css' href='style.css'>
        <title>Ping Pong Ploc</title>
    </head>
    <body>
 <?php 

function numeroParaTexto( $n )
{
    if ($n % 3 == 0 && $n % 5 == 0)
    {
        return "<span class='sublinhado'>ploc</span><br/>";
    } 
    else 
    {
        if ($n % 3 == 0)
        {
            return "<span class='negrito'>ping</span><br/>";
        } 
        else 
        {
            if ($n % 5 == 0)
            {
                return "<span class='italico'>pong</span><br/>";
            }
            else
            {
                return "ok<br/>";

            }

        }
    }    
}

for ($i = 1; $i <= 100; $i++) 
{
    
    echo "$i." . numeroParaTexto( $i );
}
?>
    </body>
</html>