<?php
  function smarty_function_datenow($params, $smarty) {
                   if(empty($params["format"])) {
                            $format = "%A%d,本年第%j天第%U周 %b %e, %Y,%I:%M:%S %p";
                   } else {
                            $format = $params["format"];
                   }
                   return strftime($format, time());
         }
		 ?>