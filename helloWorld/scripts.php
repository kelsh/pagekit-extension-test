<?php

return [

    'enable' => function ($app) {

        $util = $app['db']->getUtility();

        if ($util->tableExists('@support_ticket_response') === false) {
            $util->createTable('@support_ticket_response', function ($table) {

                //how to make unique?
                $table->addColumn('ticket_id', 'integer', ['unsigned' => true, 'length' => 10, 'autoincrement' => false]);

                //should default be 0?
                $table->addColumn('user_id', 'integer', ['unsigned' => true, 'length' => 10, 'default' => 0]);

                $table->addColumn('ticket_response_creation_date', 'datetime');
                $table->addColumn('ticket_response_modified', 'datetime');
                $table->addColumn('ticket_response_content', 'text');
                
                //eventually should have file uploading
                //$table->addColumn('ticket_response_data', 'json_array', ['notnull' => false]);
                                
                //not sure what indexes we need and if they should be redundant
                $table->addIndex(['ticket_id'], '@user_id');
               
                $table->setPrimaryKey(['ticket_id']);

            });
        }

        if ($util->tableExists('@support_tickets') === false) {
            $util->createTable('@support_tickets', function ($table) {
                //how to make unique?
                $table->addColumn('ticket_id', 'integer', ['unsigned' => true, 'length' => 10, 'autoincrement' => true]);
                $table->addColumn('user_id', 'integer', ['unsigned' => true, 'length' => 10, 'default' => 0]);
                $table->addColumn('ticket_creation_date', 'datetime', ['notnull' => false]);
                $table->addColumn('ticket_modified', 'datetime');
                $table->addColumn('ticket_content', 'text');
                
                //eventually should have file uploading
                //$table->addColumn('ticket_data', 'json_array', ['notnull' => false]);
                                
                //not sure what indexes we need and if they should be redundant
                $table->addIndex(['user_id'], '@user_id');
               
                $table->setPrimaryKey(['ticket_id']);
            });
        }

    },

    'uninstall' => function ($app) {

    //uhhhh don't un-install please
     echo 'im sorry you uninstalled';

    },


];