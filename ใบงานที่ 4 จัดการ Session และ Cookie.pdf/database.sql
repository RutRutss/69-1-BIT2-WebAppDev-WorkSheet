-- สร้างฐานข้อมูล
CREATE DATABASE IF NOT EXISTS w4_db
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

-- เลือกฐานข้อมูล
USE w4_db;

-- สร้างตาราง users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- เพิ่มข้อมูลตัวอย่าง
INSERT INTO users (username, password, fname, lname) VALUES
('admin', '1234', 'Wisarut', 'Yuensuk'),
('user1', '1234', 'Somchai', 'Jaidee');