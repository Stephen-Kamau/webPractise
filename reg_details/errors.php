<? php 
if (count($errors) > 0)
{
<div class ="error">
    foreach ($errors as $error)
    { 
           <p> 
               echo "$error";
           </p>
    }
 }
 </div>
 ?>