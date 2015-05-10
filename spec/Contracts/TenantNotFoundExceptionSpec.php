<?php

namespace spec\App\Contracts;

use App\Contracts\TenantNotFoundException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TenantNotFoundExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TenantNotFoundException::class);
        $this->shouldHaveType('RuntimeException');
    }
}
