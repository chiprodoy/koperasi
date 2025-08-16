<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DetectRegion
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
        // Cek apakah session region sudah ada
        if (!$request->session()->has('region')) {

            // Ambil IP asli (support Cloudflare)
            $ip = $request->header('CF-Connecting-IP', $request->ip());

            // Kalau di lokal, ganti IP ke IP publik supaya API bisa bekerja
            if ($ip === '127.0.0.1' || $ip === '::1') {
                $ip = '8.8.8.8'; // Contoh IP Google
            }

            // Default data (fallback)
            $region  = 'Unknown';
            $country = 'Unknown';
            $city    = 'Unknown';

            // Ambil data lokasi dari API gratis
            $response = @file_get_contents("http://ip-api.com/json/{$ip}?fields=status,message,regionName,country,city");

            if ($response) {
                $data = json_decode($response, true);

                if (isset($data['status']) && $data['status'] === 'success') {
                    $region  = $data['regionName'] ?? 'Unknown';
                    $country = $data['country'] ?? 'Unknown';
                    $city    = $data['city'] ?? 'Unknown';
                }
            }

            // Simpan ke session
            session([
                'region'  => $region,
                'country' => $country,
                'city'    => $city,
                'ip'      => $ip
            ]);
        }

        return $next($request);
    }
}
