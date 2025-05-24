<?php
require_once __DIR__ . '/../models/Contrato.php';
require_once __DIR__ . '/../models/Beneficiario.php';

class ContratoController {
    private $modelContrato;
    private $modelBeneficiario;

    public function __construct() {
        $this->modelContrato = new Contrato();
        $this->modelBeneficiario = new Beneficiario();
    }

    public function listarBeneficiarios() {
        return $this->modelBeneficiario->getAll();
    }

    public function registrarContrato($data) {
        if (
            empty($data['idbeneficiario']) || empty($data['montos']) || empty($data['interes']) ||
            empty($data['fechainicio']) || empty($data['diapago']) || empty($data['numcuotas']) ||
            empty($data['estado'])
        ) {
            return false;
        }
        // Validaciones extras aquí si quieres
        return $this->modelContrato->create($data);
    }
}
