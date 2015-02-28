<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $user = $this->table('user');
        $user->addColumn('username', 'string', array('limit' => 20))
            ->addColumn('password', 'string', array('limit' => 40))
            ->addColumn('password_salt', 'string', array('limit' => 40))
            ->addColumn('email', 'string', array('limit' => 100))
            ->addColumn('created', 'datetime')
            ->addIndex(array('username', 'email'), array('unique' => true))
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropDatabase('user');
    }
}
