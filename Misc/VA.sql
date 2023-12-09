CREATE TABLE IF NOT EXISTS link (
    link_id INT AUTO_INCREMENT PRIMARY KEY,
    link_date DATE,
    link_embed TEXT,
    link_description TEXT
);

CREATE TABLE IF NOT EXISTS visit (
    visit_id INT AUTO_INCREMENT PRIMARY KEY,
    visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
