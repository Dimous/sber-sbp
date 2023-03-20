<?php

namespace Io\Github\Dimous\Sber\QR {
    interface ICacheAdapter
    {
        function get(string $sKey, float $nSeconds, callable $fCallback);
    }
}

