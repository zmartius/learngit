<?php
  function smarty_function_datenow($params, $smarty) {
                   if(empty($params["format"])) {
                            $format = "%A%d,�����%j���%U�� %b %e, %Y,%I:%M:%S %p";
                   } else {
                            $format = $params["format"];
                   }
                   return strftime($format, time());
         }
		 ?>