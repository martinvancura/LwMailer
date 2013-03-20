<?php
/**
 * LoMailer
 * Default mailer for Lectura Online
 *
 * @package de.lectura.lw.lectura-online
 * @author  Petr Brabac <pb@lectura.de>
 */
class LwMailer extends PHPMailer {

    /**
     * Custructor with basic properties set
     *
     * @return \LoMailer
     */
    public function __construct() {
        $this->CharSet = "utf-8";
        $this->From = "info@lectura.de";
        $this->FromName = "Lectura Bridge";
        $this->MailerDebug = false;
        $this->Host = "smtp.gmail.com";
        $this->Port = 465;
        $this->Username = "info@lectura.de";
        $this->Password = "informationLectura--13";
        $this->SMTPAuth = true;
        $this->SMTPSecure = "ssl";
        $this->isSMTP();
        $this->SMTPDebug = 0;
        $this->isHTML(true);
    }
    
    /**
     * Set current email subject
     *
     * @param string $_subject A subject to assign
     * 
     * @return void
     */
    public function setSubject($_subject) {
        $this->Subject = $_subject;
    }
    
    /**
     * Set current email content
     *
     * @param string $_content A content to assign
     *
     * @return void
     */
    public function setContent($_content) {
        $this->Body = $_content;
    }
    
    /**
     * Add recipient
     *
     * @param string $email A recipient email address
     * @param string $name  A recipient name
     *
     * @return void
     */
    public function addTo($email, $name = "") {
        $this->AddAddress($email, $name);
    }
}