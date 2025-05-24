USE prestamos;

INSERT INTO beneficiarios
	(apellidos, nombres, dni, telefono) VALUES
    ('Francia Minaya', 'Jhon Edward', '45454545', '956734234');

INSERT INTO contratos
	(idbeneficiario, montos, interes, fechainicio, diapago, numcuotas) VALUES
    (1, 3000, 5, '2025-03-10', 15, 12);
    
INSERT INTO pagos
	(idcontrato, numcuota, fechapago, monto, penalidad, medio) VALUES
		(1, 1, '2025-04-15', 348.48, 0, 'EFC'),
		(1, 2, '2025-05-17', 348.48, 33.85, 'DEP'),
		(1, 3, NULL, 348.48, 0, NULL),
        (1, 4, NULL, 348.48, 0, NULL),
        (1, 5, NULL, 348.48, 0, NULL),
        (1, 6, NULL, 348.48, 0, NULL),
        (1, 7, NULL, 348.48, 0, NULL),
        (1, 8, NULL, 348.48, 0, NULL),
        (1, 9, NULL, 348.48, 0, NULL),
        (1, 10, NULL, 348.48, 0, NULL),
        (1, 11, NULL, 348.48, 0, NULL),
        (1, 12, NULL, 348.48, 0, NULL);

