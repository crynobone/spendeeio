<?php

use App\Listeners\Installation\CreatingUser;
use App\Listeners\Installation\CreatingUserSchema;

Event::listen('orchestra.install.schema: users', CreatingUserSchema::class);
Event::listen('orchestra.install: user', CreatingUser::class);
