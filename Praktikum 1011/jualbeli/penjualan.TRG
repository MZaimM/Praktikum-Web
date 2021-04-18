TYPE=TRIGGERS
triggers='CREATE DEFINER=`admin`@`localhost` TRIGGER `jual` AFTER INSERT ON `penjualan` FOR EACH ROW BEGIN\n	UPDATE barang\n	SET stok = stok-NEW.jumlah\n	WHERE barang.id_barang = NEW.id_barang;\nEND'
sql_modes=1411383296
definers='admin@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='latin1_swedish_ci'
created=161874768594
