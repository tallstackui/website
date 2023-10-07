<?php

test('cannot use dangerous functions')
    ->expect(['dd', 'dump', 'var_dump', 'exit'])
    ->not
    ->toBeUsed();
