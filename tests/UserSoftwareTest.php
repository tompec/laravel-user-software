<?php

namespace Tompec\UserSoftware\Tests;

use Tompec\UserSoftware\UserSoftware;

class UserSoftwareTest extends TestCase
{
    /** @test */
    public function it_belongs_to_a_user()
    {
        $user = factory(User::class)->create();

        $user_software = factory(UserSoftware::class)->create([
            'user_id' => $user->id,
        ]);

        $this->assertEquals($user->id, $user_software->user->id);
    }

    /** @test */
    public function it_has_a_hash()
    {
        $user_software = factory(UserSoftware::class)->create();

        $this->assertIsString($user_software->hash);
    }
}
