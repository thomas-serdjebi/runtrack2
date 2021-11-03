<?php
for ($numbers = 1; $numbers < 1001; $numbers++)
{
    $counter = 0;
        for ($i = 2; $i <= $numbers/2; $i++)
        {
            if ($numbers%$i === 0)
            {
            $counter++;
            break;
            }
            echo '<br>'.$numbers.'</br>';
        }
    if ($counter === 0 && $numbers !== 1)
    {
        // echo $numbers.'</br>';
    
    }
   
}



