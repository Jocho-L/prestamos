USE prestamos;

SELECT * FROM contratos

-- ¿Cuántos pagos tiene pendiente Jhon?
SELECT COUNT(*) FROM pagos WHERE idcontrato = 1 AND fechapago IS NULL;

-- ¿Cuánto es ek total de la deuda actual?
SELECT COUNT(*) * monto FROM pagos WHERE idcontrato = 1 AND fechapago IS NULL;

-- ¿Cuatos pagos se han realizado?
SELECT COUNT(*) FROM pagos WHERE idcontrato = 1 AND fechapago IS NOT NULL;

-- ¿Cuántos pagos se realizaron en EFECTIVO?
SELECT COUNT(*) FROM pagos WHERE idcontrato = 1 AND medio = 'EFC';

-- ¿Cuanto es el total de penalidades pagadas por depósito? 
SELECT SUM(penalidad) FROM pagos WHERE idcontrato = 1 AND MEDIO = 'DEP';