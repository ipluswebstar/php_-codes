<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('privacy_policy', 'privacy_policy_language_id_language_id', array(
             'name' => 'privacy_policy_language_id_language_id',
             'local' => 'language_id',
             'foreign' => 'id',
             'foreignTable' => 'language',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('privacy_policy', 'privacy_policy_language_id', array(
             'fields' => 
             array(
              0 => 'language_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('privacy_policy', 'privacy_policy_language_id_language_id');
        $this->removeIndex('privacy_policy', 'privacy_policy_language_id', array(
             'fields' => 
             array(
              0 => 'language_id',
             ),
             ));
    }
}