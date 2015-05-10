<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TenantContext
{
    /**
     * The authenticator implementation.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard  $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $this->auth->user();

        if (is_null($user)) {
            return redirect(handles('app::login'));
        }

        if (! $this->authorize($request, $user)) {
            throw new HttpException(401);
        }

        set_meta('tenant::id', $user->getAuthIdentifier());

        return $next($request);
    }

    /**
     * Determine if user is authorize for this tenant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     *
     * @return bool
     */
    protected function authorize($request, $user)
    {
        $tenant = $request->route()->parameter('tenant');

        return $tenant === $user->username;
    }
}
