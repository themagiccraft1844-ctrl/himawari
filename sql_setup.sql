-- File: sql_setup.sql
-- Script ini untuk membuat tabel 'users' di database Anda.

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Catatan:
-- 'password' menggunakan VARCHAR(255) untuk menyimpan hash yang aman.
-- 'role' menggunakan ENUM untuk membatasi nilai hanya 'user' atau 'admin'.
-- 'username' bersifat UNIQUE agar tidak ada nama pengguna yang sama.
