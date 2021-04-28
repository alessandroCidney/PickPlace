<?php 

    class Methods
    {
        public function Formatation($number)
        {  
            $number = number_format($number, 2, ',', '.');

            return $number;
        }
    }

?>