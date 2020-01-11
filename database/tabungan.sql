

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(50) NOT NULL AUTO_INCREMENT,
  `nama` text COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` text COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `telepon` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=100001 ;

CREATE TABLE IF NOT EXISTS `tabungan` (
  `id_tabungan` int(50) NOT NULL AUTO_INCREMENT,
  `id_siswa` text COLLATE latin1_general_ci NOT NULL,
  `setoran` text COLLATE latin1_general_ci NOT NULL,
  `penarikan` text COLLATE latin1_general_ci NOT NULL,
  `saldo` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_tabungan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=100001 ;
