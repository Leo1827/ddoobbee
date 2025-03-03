<?php
require_once '../../Models/Contact.php';

class ContactController {
    private $contact;

    public function __construct() {
        $this->contact = new Contact();
    }

    public function getContacts() {
        $contacts = $this->contact->getAllContacts();
        echo json_encode($contacts);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new ContactController();
    $controller->getContacts();
}
?>
