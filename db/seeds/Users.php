<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class Users extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = array(
            array(
                'username' => 'admin',
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                // 'address' => 'Makassar',
                'password' => password_hash('123', PASSWORD_DEFAULT)
            ),
            array(
                'username' => 'user',
                'name' => 'User',
                'email' => 'user@mail.com',
                // 'address' => 'Tolitoli',
                'password' => password_hash("123", PASSWORD_DEFAULT)
            ),
        );

        $user = $this->table('users');
        $user->insert($data)->save();
    }
}
