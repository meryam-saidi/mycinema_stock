<?php

namespace App\Service;

class Sentry
{
    public function getTracesSampler(): callable
    {
        return function (\Sentry\Tracing\SamplingContext $context): float {
            return 1.0; // 50% d'échantillonnage
        };
    }
}
