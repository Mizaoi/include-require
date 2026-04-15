CREATE DATABASE IF NOT EXISTS db_tancak_panti;
USE db_tancak_panti;

CREATE TABLE IF NOT EXISTS wisatawan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    asal VARCHAR(100)
);

INSERT INTO wisatawan (nama, asal) VALUES 
('Rendi Fitrah', 'Jember'), 
('Siti Aisyah', 'Lumajang');
