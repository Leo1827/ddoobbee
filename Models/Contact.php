<?php
require_once __DIR__ . "/../config/Conexion.php";

class Contact {
    private $db;

    public function __construct() {
        $this->db = (new Conexion())->getConexion();

    }

    public function getAllContacts() {
        $stmt = $this->db->prepare("SELECT id, nombre, email, telefono, pais, ciudad, mensaje, fecha FROM contactos ORDER BY fecha DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
