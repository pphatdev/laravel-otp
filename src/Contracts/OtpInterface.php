<?php

namespace Sophat\LaravelOtp\Contracts;

interface OtpInterface
{
    /**
     * Processes the OTP
     * @return mixed
     */
    public function process();
}
