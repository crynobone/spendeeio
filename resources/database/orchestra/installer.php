<?php

use App\Listeners\Installation\OnCreateUser;
use App\Listeners\Installation\OnCreateUserSchema;

Event::listen('orchestra.install.schema: users', OnCreateUserSchema::class);
Event::listen('orchestra.install: user', OnCreateUser::class);
