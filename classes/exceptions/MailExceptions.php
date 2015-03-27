<?php

/*
 * FileSender www.filesender.org
 * 
 * Copyright (c) 2009-2012, AARNet, Belnet, HEAnet, SURFnet, UNINETT
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * 
 * *    Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 * *    Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in the
 *     documentation and/or other materials provided with the distribution.
 * *    Neither the name of AARNet, Belnet, HEAnet, SURFnet and UNINETT nor the
 *     names of its contributors may be used to endorse or promote products
 *     derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */


/**
 * Invalid address format exception
 * @todo rename
 */
class InvalidAddressFormatException extends DetailedException {
    /**
     * Constructor
     * 
     * @param string $selector column used to select user
     */
    public function __construct($selector) {
        parent::__construct(
            'invalid_address_format', // Message to give to the user
            $selector // Real message to log
        );
    }
}


/**
 * Invalid address format exception
 * @todo rename
 */
class NoAddressesFoundException extends DetailedException {
    /**
     * Constructor
     * 
     * @param string $selector column used to select user
     */
    public function __construct() {
        parent::__construct(
            'no_addresses_found' // Message to give to the user
        );
    }
}

/**
 * Bad attachment disposition
 */
class MailAttachmentBadDispositionException extends DetailedException {
    /**
     * Constructor
     * 
     * @param string $disposition
     */
    public function __construct($disposition) {
        parent::__construct(
            'mail_attachment_bad_disposition', // Message to give to the user
            'disposition = '.$disposition // Real message to log
        );
    }
}

/**
 * Bad attachment transfer encoding
 */
class MailAttachmentBadTransferEncodingException extends DetailedException {
    /**
     * Constructor
     * 
     * @param string $transfer_encoding
     */
    public function __construct($transfer_encoding) {
        parent::__construct(
            'mail_attachment_bad_transfer_encoding', // Message to give to the user
            'transfer_encoding = '.$transfer_encoding // Real message to log
        );
    }
}

/**
 * No attachment content
 */
class MailAttachmentNoContentException extends DetailedException {
    /**
     * Constructor
     * 
     * @param string $path
     */
    public function __construct($path) {
        parent::__construct(
            'mail_attachment_no_content', // Message to give to the user
            'path = '.$path // Real message to log
        );
    }
}
