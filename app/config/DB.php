<?php
class DB
{
    public static function conectar()
    {
        $url = "pgsql:host=pgsql;dbname=managepct";
        $user = "postgres";
        $password = "1234";
        $cn = new PDO($url, $user, $password);
        return $cn;
    }
}
?>
