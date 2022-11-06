<?php
date_default_timezone_set('America/Sao_paulo');

class Connection{

    /**
     * Hostname of the connection
     * @const 
     */
    const DB_HOSTNAME = 'mysql';

    /**
     * User of the connection
     * @const 
     */
    const DB_USERNAME = 'db_user';

    /**
     * Password of the connection
     * @const 
     */
    const DB_PASSWORD = 'db_user_pass';

    /**
     * Database of the connection
     * @const 
     */
    const DB_DATABASE = 'useacabeca';

    /**
     * Charset of the connection
     * @const 
     */
    const DB_CHARSET = 'utf8';

     /**
     *Method responsible for connecting to the database
     */

    public $link;

    public static function Conect(){
        $link = mysqli_connect(self::DB_HOSTNAME, self::DB_USERNAME, self::DB_PASSWORD, self::DB_DATABASE) or die(mysqli_connect_error());
        mysqli_set_charset($link, self::DB_CHARSET) or die(mysqli_error($link));
        return $link;
    }

      /**
     *Method responsible for Disconnecting to the database
     */
    public function Desconect(){
        mysqli_close($this->link);
    }

}