<?php
$query = "SELECT * FROM `users`";
if($is_query_run=mysql_query($query))
{

echo "query executed";

}
else{
    echo "query not executed";
}
?>