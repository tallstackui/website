<?php

use App\Mcp\Servers\TallStackUiServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::web('/mcp/tallstackui', TallStackUiServer::class);
