<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version129 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('orders', 'tax', 'decimal', '5', array(
             'notnull' => '',
             'scale' => '2',
             ));
    }

    public function down()
    {
        $this->removeColumn('orders', 'tax');
    }
}