<?php
    /**
     * response message
     * @param int $MOId
     * @param string $Telco
     * @param string $ServiceNum
     * @param string $Phone
     * @param string $Syntax
     * @param string $EncryptedMessage
     * @param string $Signature
     * @return string
     */
    function ReceiveResponse($MOId, $Telco, $ServiceNum, $Phone, $Syntax, $EncryptedMessage, $Signature)
    {
        if($MOId <= 0 || empty($Telco) || empty($ServiceNum) || empty($Phone) || empty($Syntax) || empty($EncryptedMessage) || empty($Signature))
        {
            // check param input empty reuturn text
            return "01|Param Invalid";
        }
        else
        {
            /**
             * 1. Check Signature = SHA1(MOId + ServiceNum + Phone + MessageRequest + PrivateKey)
             * 2. Decode base 64 EncryptedMessage
             * 3. return string Messages Respone
             */
            return "00|Message response";
        }
    }