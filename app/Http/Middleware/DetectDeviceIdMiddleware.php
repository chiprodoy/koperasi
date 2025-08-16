<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DetectDeviceIdMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Ambil UUID dari browser (jika dikirim lewat header)
        $uuidFromBrowser = $request->header('X-Device-UUID');

        // Kombinasi IP + User-Agent + UUID browser
        $deviceId = hash('sha256', $request->ip() . $request->userAgent() . ($uuidFromBrowser ?? ''));

        // Simpan ke session (jika session aktif) atau request attribute
        if (method_exists($request, 'hasSession') && $request->hasSession()) {
            $request->session()->put('device_id', $deviceId);
        }

        // Simpan juga di request agar bisa digunakan langsung
        $request->attributes->set('device_id', $deviceId);

        return $next($request);
    }
}
