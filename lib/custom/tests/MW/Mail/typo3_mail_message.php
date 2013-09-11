<?php

/**
 * TYPO3 mail stub required for tests.
 */
class t3lib_mail_Message
{
	public function setCharset( $charset ) {}
	public function addFrom( $email, $name ) {}
	public function addTo( $email, $name = null ) {}
	public function addCc( $email, $name = null ) {}
	public function addBcc( $email, $name = null ) {}
	public function addReplyTo( $email, $name = null ) {}
	public function setSender( $email, $name = null ) {}
	public function setSubject( $subject ) {}
	public function setBody( $message ) {}
	public function addPart( $message, $mimetype ) {}
	public function send() {}
}
