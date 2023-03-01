<?php

// config for Invoate/WebAuthn
return [

    'registration' => [
        // can be "discouraged", "preferred" or "required"
        'resident-key' => 'preferred',

        // can be "discouraged", "preferred" or "required"
        'user-verification' => 'preferred',

        // allowed transports "usb", "nfc", "ble", and "internal"
        'exclude-credentials' => ['usb', 'nfc', 'ble', 'internal'],

        // allowed formats "apple", "packed", "tpm", "android-key", "android-safetynet", "fido-u2f" and "none"
        'formats' => ['apple', 'packed', 'tpm', 'android-key', 'android-safetynet', 'fido-u2f', 'none'],
    ],

    'authentication' => [

    ],

];
