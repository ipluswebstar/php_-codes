<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version111 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('petition_signing', 'email_hash', 'string', '80', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('petition_signing', 'email_hash');
    }
}