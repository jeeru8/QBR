<?php

$con_string = "DRIVER={Teradata};DBCName=sunil; DATABASE=DBC;

 

if (!($this->connection_id = @odbc_connect( $con_string, ****, *****)) ){

        echo "Connection Failed");

}

else {

        echo "Connected to DB..."."\n";

        CREATE TABLE database.qbr AS database.qbr 
        WITH NO DATA; 
        INSERT INTO database.qbr SELECT * FROM  database.qbr

}

                class SubObject
                {
                    static $instances = 0;
                    public $instance;

                    public function __construct() {
                        $this->instance = ++self::$instances;
                    }

                    public function __clone() {
                        $this->instance = ++self::$instances;
                    }
                }

                class MyCloneable
                {
                    public $object1;
                    public $object2;

                    function __clone()
                    {
                        // Force a copy of this->object, otherwise
                        // it will point to same object.
                        $this->object1 = clone $this->object1;
                    }
                }

                $obj = new MyCloneable();

                $obj->object1 = new SubObject();
                $obj->object2 = new SubObject();

                $obj2 = clone $obj;


                print("Original Object:\n");
                print_r($obj);

                print("Cloned Object:\n");
                print_r($obj2);



                Original Object:
                    MyCloneable Object
                    (
                        [object1] => SubObject Object
                            (
                                [instance] => 1
                            )

                        [object2] => SubObject Object
                            (
                                [instance] => 2
                            )

                    )
                    Cloned Object:
                    MyCloneable Object
                    (
                        [object1] => SubObject Object
                            (
                                [instance] => 3
                            )

                        [object2] => SubObject Object
                            (
                                [instance] => 2
                            )

                    )

 

?>

