<?php

namespace spec\App\Listeners\Observers;

use App\Listeners\Observers\MultiTenant;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MultiTenantSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MultiTenant::class);
    }

    function it_should_return_user_as_driver_name()
    {
        $this->getDriverName()->shouldReturn('user');
    }

    function it_should_use_default_database_connection()
    {
        $this->getConnectionName()->shouldReturn(null);
    }
}
