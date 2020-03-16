<?php

namespace Tompec\UserSoftware\Tests;

class UserSoftwareControllerTest extends TestCase
{
    /** @test */
    public function an_entry_can_be_saved()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $data = [
            'os' => 1,
            'browser' => 2,
        ];

        $response = $this->actingAs($user)
                            ->json('POST', '/user-software', [
                                'data' => $data,
                            ]);

        $this->assertDatabaseHas('user_software', [
            'hash' => sha1(json_encode($data)),
            'data' => json_encode($data),
        ]);
    }
}
