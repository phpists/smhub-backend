<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


class DataController extends Controller
{
    public function getInfo()
    {
        $data = [
            "ethernet" => [
                "status" => "connect",
                "details" => [
                    "DHCP" => "on",
                    "IP Address" => "192.168.1.1",
                    "Subnet mask" => "192.168.1.1",
                    "Default gateway" => "192.168.1.1",
                    "Connection speed" => "100M",
                    "MAC address" => "D4:8A:FC:A2:02:A3",
                    "DNS1" => "192.168.1.1",
                    "DNS2" => "192.168.1.1",
                ],
            ],
            "wifi" => [
                "status" => "disabled",
                "details" => [
                    "SSID" => "-",
                    "DHCP" => "on",
                    "IP Address" => "-",
                    "Subnet mask" => "-",
                    "Connection speed" => "-",
                    "MAC address" => "D4:8A:FC:A2:02:A3",
                    "DNS1" => "192.168.1.1",
                    "DNS2" => "192.168.1.1",
                ],
            ],
            "lte4g" => [
                "status" => "no_connected",
                "details" => [
                    "Operator" => "Kyivstar",
                    "Internet" => "available",
                    "Signal level" => "-70dBm",
                    "IP" => "192.168.1.1",
                ],
            ],
            "bt" => [
                "status" => "no_connected",
                "details" => [
                    "Device name" => "xxxxxx",
                    "Pairing" => "disabled",
                ],
            ],
            "peripheralInterfaces" => [
                "details" => [
                    "UPS" => "installed",
                    "PoE" => "installed",
                    "4G" => "installed",
                    "Z-Wave" => "installed",
                    "IR receiver" => "enabled",
                    "IR transmitter" => "enabled",
                    "Buzzer" => [
                        "battery" => "12%",
                        "status" => "disabled",
                    ],
                    "Main LED" => "enabled",
                    "3.5 Audio Volume" => [
                        "battery" => "12%",
                    ],
                    "Service LED" => "enabled",
                    "USB devices" => "installed",
                    "SD-card" => "not installed",
                ],
            ],
            "vpns" => [
                "status" => "no_connected",
                "details" => [
                    "Tailscale" => "disabled",
                    "Wireguard" => "disabled",
                ],
            ],
            "temperature" => [20, 40, 15, 30, 80, 15, 20, 130, 20, 90, 25, 40, 30, 50, 60],
            "ram" => [20, 40, 15, 30, 80, 15, 20, 130, 20, 90, 25, 40, 30, 50, 60],
            "battery" => 11,
            "modules" => [
                "radio" => "active",
                "power" => "not_active",
                "mail" => "active",
                "zeeek" => "active",
                "zwave" => "active",
                "bluetooth" => "active",
                "port" => "active",
                "lta" => "active",
            ],
            "lang" => "en",
            "measurement" => "metric",
        ];

        return response()->json($data);
    }
}
