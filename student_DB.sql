CREATE DATABASE students_DB;
USE students_DB;
CREATE TABLE student_Records(
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(50) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    department VARCHAR(30) NOT NULL,
    matric_number VARCHAR(20) NOT NULL UNIQUE
    );