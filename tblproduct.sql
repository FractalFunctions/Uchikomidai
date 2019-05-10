--
-- Table structure for table tblproduct
--

CREATE TABLE tblproduct (
  id int(8) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  code varchar(255) NOT NULL,
  section varchar(255) NOT NULL,
  image text NOT NULL,
  price double(10,2) NOT NULL,
  PRIMARY KEY(id),
  UNIQUE KEY product_code (code)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table tblproduct
--

INSERT INTO tblproduct (name, code, section, image, price) VALUES
('Uchikomidai', 'UCHI01', 'main', 'product-images/uchi01.jpg', 200.00),
('Kote', 'KOTE01', 'parts', 'product-images/kote01.jpg', 50.00),
('Men and Tsuki', 'MEN01', 'parts', 'product-images/men01.jpg', 50.00),
('Shinai Connector', 'SHINAICON01', 'parts', 'product-images/shinaicon01.jpg', 50.00),
('Tripod Base Brace', 'TRIBASE01', 'parts', 'product-images/tribase01.jpg', 50.00),
('Tripod Top Connector', 'TRICON01', 'parts', 'product-images/tritop01.jpg', 50.00);

--
-- Indexes for table tblproduct
--
-- ALTER TABLE tblproduct
--  ADD PRIMARY KEY (id),
--  ADD UNIQUE KEY product_code (code);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tblproduct
--
-- ALTER TABLE tblproduct
--  MODIFY id int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
