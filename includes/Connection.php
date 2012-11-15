<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author webmaster
 */
class Connection {
    
    const HOST = 'localhost';
    const PORT = '8889';
    const DBNAME = 'user';
    // nier voor production, ook niet 
    const USER = 'root';
    const PASS = 'root';
    
    
    public function connect() {
        
        try {
        
            // hier maken we de website
            $conn = new PDO('mysql:host='.self::HOST.';port='.self::PORT.';dbname='.self::DBNAME,self::USER
                ,self::PASS);
        
            // bij live volgende lijn comments
            // hiermee gaat alle fouten op de pdo
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            die;
        }
    }
    
    
    
    
}

?>
