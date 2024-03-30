-- INFO TABLE

CREATE TABLE info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Government_department INT NOT NULL,
    image_name VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    type INT NOT NULL,
    date DATE NOT NULL,
    path_person VARCHAR(255) NOT NULL,
    note TEXT NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    department_id INT,
    user_type INT NOT NULL DEFAULT 0 -- 0: citizen, 1: employee, 2: admin
)

