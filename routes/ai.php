<?php

declare(strict_types=1);

use Laravel\Mcp\Facades\Mcp;
use App\Mcp\Servers\TallStackUiServer;

Mcp::web('/mcp/tallstackui', TallStackUiServer::class);
