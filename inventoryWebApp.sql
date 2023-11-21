CREATE DATABASE megadata;
USE megadata;
CREATE TABLE inventory (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100),
    merek VARCHAR(100),
    serial_number VARCHAR(100),
    jumlah INT
);