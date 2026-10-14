
-- sql/eggroll_busri.sql
-- Buat database
CREATE DATABASE IF NOT EXISTS eggroll_busri CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE eggroll_busri;

-- Tabel produk
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(120) NOT NULL UNIQUE,
    description TEXT,
    price INT NOT NULL DEFAULT 0,
    label VARCHAR(20) DEFAULT NULL,
    image_url VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO products (name, slug, description, price, label, image_url) VALUES
('Eggroll Original', 'eggroll-original', 'Rasa original dengan taburan wijen yang membuatnya semakin gurih.', 10000, 'Best Seller', NULL),
('Eggroll Pandan', 'eggroll-pandan', 'Aroma pandan yang khas dengan rasa manis yang pas.', 12000, NULL, NULL),
('Eggroll Keju', 'eggroll-keju', 'Keju mozarella yang lumer dengan gurihnya telur.', 15000, 'New!', NULL),
('Eggroll Coklat', 'eggroll-coklat', 'Coklat premium yang lumer saat digigit.', 13000, NULL, NULL),
('Paket Kombo 1', 'paket-kombo-1', 'Paket isi 6 dengan berbagai rasa.', 70000, 'Paket', NULL),
('Paket Keluarga', 'paket-keluarga', 'Isi 12 pcs dengan 4 rasa berbeda.', 130000, 'Paket', NULL);

-- Tabel testimonials
CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    rating TINYINT NOT NULL DEFAULT 5,
    comment TEXT NOT NULL,
    avatar_url VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO testimonials (name, rating, comment) VALUES
('Dewi Sari', 5, 'Rasanya autentik banget, enak dan renyah. Anak-anak di rumah langsung habis dalam sekali makan. Sekarang selalu pesan paket keluarga setiap minggu.'),
('Budi Prakoso', 4, 'Pilihan oleh-oleh yang selalu dicari rekan kerja. Eggroll kejunya favorit saya, kejunya benar-benar melimpah dan gurih!'),
('Siti Aminah', 5, 'Sudah mencoba berbagai eggroll, tapi eggroll Bu Sri yang paling spesial. Teksturnya renyah tapi tidak berminyak, dan rasanya pas tidak terlalu manis.');

-- Tabel orders
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    address TEXT NOT NULL,
    total INT NOT NULL DEFAULT 0,
    status ENUM('pending','paid','shipped','done','cancelled') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Tabel order_items
CREATE TABLE IF NOT EXISTS order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    price INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- Tabel contact_messages
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
