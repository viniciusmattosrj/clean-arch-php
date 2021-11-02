<?php

use Phinx\Migration\AbstractMigration;

class CreateTableRegistrations extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('registrations');
        $table->addColumn('name', 'string', ['limit' => 100])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('registration_number', 'string', ['limit' => 11])
            ->addColumn('birth_date', 'datetime')
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
