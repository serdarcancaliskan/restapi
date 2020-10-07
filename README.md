Basit Seviye // POST GET İşlemli REST Api
database.php kısmından gerekli veritabanı bilgilerinin girilmesi gerekmekte.

Urunler isimli tabloyu aşağıdaki biçimde oluşturabilirsiniz.

CREATE TABLE `Urunler` (
  `product_id` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `stock` int(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


ALTER TABLE `Urunler`
  ADD PRIMARY KEY (`product_id`);
COMMIT;
