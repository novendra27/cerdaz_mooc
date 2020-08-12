<?php

function generateUserId($totalUser)
{
    if ($totalUser >= 1) {
        $totalUser = $totalUser + 1;
        $usrlen = strlen($totalUser) + 2;
        $generateCode = "USR-" . str_pad($totalUser, $usrlen, "0", STR_PAD_LEFT);
        return $generateCode;
    } else {
        $totalUser = 1;
        $usrlen = strlen($totalUser) + 2;
        $generateCode = "USR-" . str_pad($totalUser, $usrlen, "0", STR_PAD_LEFT);
        return $generateCode;
    }
}
