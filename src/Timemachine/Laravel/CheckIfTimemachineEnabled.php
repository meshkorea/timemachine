<?php

namespace Appkr\Timemachine\Laravel;

use Closure;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class CheckIfTimemachineEnabled
{
    /**
     * Handle an incoming request.
     *
     * @param  Request $request
     * @param  Closure $next
     *
     * @throws UnauthorizedHttpException
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $enabled = config('timemachine.enabled');

        if (! $enabled) {
            throw new NotFoundHttpException();
        }

        return $next($request);
    }
}
