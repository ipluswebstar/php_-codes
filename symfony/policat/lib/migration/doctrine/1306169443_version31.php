<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version31 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('owner', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '4',
             ),
             'status' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'default' => '1',
              'length' => '4',
             ),
             'campaign_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '4',
             ),
             'first_widget_id' => 
             array(
              'type' => 'integer',
              'notnull' => '',
              'length' => '4',
             ),
             'firstname' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'default' => '',
              'length' => '80',
             ),
             'lastname' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'default' => '',
              'length' => '80',
             ),
             'function' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'default' => '',
              'length' => '200',
             ),
             'organisation' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'default' => '',
              'length' => '200',
             ),
             'email' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'default' => '',
              'length' => '80',
             ),
             'phone' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'default' => '',
              'length' => '80',
             ),
             'address' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'default' => '',
              'length' => '200',
             ),
             'country' => 
             array(
              'type' => 'string',
              'length' => '5',
             ),
             'password' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'default' => '',
              'length' => '40',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_general_ci',
             'charset' => 'utf8',
             ));
        $this->createTable('widget_owner', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '4',
             ),
             'status' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'default' => '1',
              'length' => '4',
             ),
             'owner_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '4',
             ),
             'widget_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '4',
             ),
             ), array(
             'indexes' => 
             array(
              'wo_owner_widget' => 
              array(
              'fields' => 
              array(
               0 => 'owner_id',
               1 => 'widget_id',
              ),
              'type' => 'unique',
              ),
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_general_ci',
             'charset' => 'utf8',
             ));
        $this->addColumn('campaign', 'owner_register', 'integer', '4', array(
             'notnull' => '1',
             'default' => '0',
             ));
        $this->addColumn('campaign', 'allow_download', 'integer', '4', array(
             'notnull' => '1',
             'default' => '0',
             ));
        $this->addColumn('campaign', 'privacy_policy', 'clob', '', array(
             'notnull' => '1',
             'default' => '',
             ));
    }

    public function down()
    {
        $this->dropTable('owner');
        $this->dropTable('widget_owner');
        $this->removeColumn('campaign', 'owner_register');
        $this->removeColumn('campaign', 'allow_download');
        $this->removeColumn('campaign', 'privacy_policy');
    }
}