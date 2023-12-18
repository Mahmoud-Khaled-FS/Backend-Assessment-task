<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TaskTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel')
                ->pause(1000)
                ->visitRoute("login")
                ->assertPathIs('/login')
                ->pause(1000)
                ->type("username", "user")
                ->pause(1000)
                ->type("password", "test")
                ->pause(1000)
                ->press("LOG IN")
                ->assertPathIs('/')
                ->pause(1000)
                ->clickLink("Contact Us")
                ->type("name", "John Doe")
                ->pause(1000)
                ->type("email", "john.doe@example.com")
                ->pause(1000)
                ->type("subject", "Inquiry")
                ->pause(1000)
                ->type("message", "Hello, I have a question about your products.")
                ->pause(1000)
                ->press("SUBMIT")
                ->assertPathIs("/contact-us")
                ->assertVisible(".message")
                ->pause(100);
        });
    }
}
