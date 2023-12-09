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

ALTER TABLE link MODIFY link_embed TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE link MODIFY link_description TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
