-- Contact FORM SQL
CREATE TABLE contact (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    number INT(11),
    purpose TEXT NOT NULL,
    course VARCHAR(255),
    message TEXT NOT NULL,
    send_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);
