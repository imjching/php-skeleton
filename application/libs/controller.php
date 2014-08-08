<?php

/**
 * This is the "base controller class". All other "real" controllers extend this class.
 */
class Controller
{

	public function __construct()
	{	
		// Open the database connection with the credentials from application/config/config.php
		// generate a database connection, using the PDO connector 
		// @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/		
		ORM::configure(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME);
		ORM::configure('username', DB_USER);
		ORM::configure('password', DB_PASS);
	}
	
    /**
     * Load the model with the given name.
     * loadModel("SongModel") would include models/songmodel.php and create the object in the controller, like this:
     * $songs_model = $this->loadModel('SongsModel');
     * Note that the model class name is written in "CamelCase", the model's filename is the same in lowercase letters
     * @param string $model_name The name of the model
     * @return object model
     */
    public function loadModel($model_name)
    {
        require 'application/models/' . strtolower($model_name) . '.php';
        // return new model
        return new $model_name();
    }
}
