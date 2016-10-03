-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2016 at 02:47 PM
-- Server version: 5.5.50-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `daleacko_dalea`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`, `category_id`, `updated_at`, `created_at`) VALUES
(6, '<!-- DNA -->\n					\n					<div id="dna-cont">\n						<div class="container">\n							<div id="dna-icon" class="col-md-2 col-md-offset-5">\n								<img src="http://dalea.co.id/uploads/about/dna.png">\n							</div>\n							<div class="col-md-12">\n								<!--\n								<div id="dna-part-01" class="col-md-2 col-md-offset-1 dna-part">\n									<img src="http://dalea.co.id/uploads/about/frame-square.png"/>\n									<div class="front">INTEGRITY</div>\n									<div class="back">\n										<p>\n										Accountability<br /><br />\n										Fairness<br /><br />\n										Responsibility\n										</p>\n									</div>\n								</div>\n								<div id="dna-part-02" class="col-md-2 dna-part">\n									<img src="http://dalea.co.id/uploads/about/frame-square.png"/>\n									<div class="front">EXCELLENCE</div>\n									<div class="back">\n										<p>\n										Passion<br /><br />\n										Curiosity<br /><br />\n										Innovation\n										</p>\n									</div>\n								</div>\n								<div id="dna-part-03" class="col-md-2 dna-part">\n									<img src="http://dalea.co.id/uploads/about/frame-square.png"/>\n									<div class="front">SMARTWORK</div>\n									<div class="back">\n										<p>\n										<br />Judgement<br /><br />\n										Communication\n										</p>\n									</div>\n								</div>\n								<div id="dna-part-04" class="col-md-2 dna-part">\n									<img src="http://dalea.co.id/uploads/about/frame-square.png"/>\n									<div class="front">HUMILITY</div>\n									<div class="back">\n										<p>\n										Honesty<br /><br />\n										Selfessness<br /><br />\n										Respectfulness\n										</p>\n									</div>\n								</div>\n								<div id="dna-part-05" class="col-md-2 dna-part">\n									<img src="http://dalea.co.id/uploads/about/frame-square.png"/>\n									<div class="front">COMPASSION</div>\n									<div class="back">\n										<p>\n										Simpathy<br /><br />\n										Empathy<br /><br />\n										Sincerity\n										</p>\n									</div>\n								</div>\n								-->\n								<style>\n			ul.list-dna { text-align: center; margin: 0; padding: 0; }\n			ul.list-dna li { font: normal normal 1em "BigmouthBold", Arial, Helvetica, Geneva, sans-serif; font-size: 16px; cursor: pointer; margin-bottom: 10px; pointer; position: relative; margin-right: 20px; display: inline-block; }\n			ul.list-dna li .in-dna { color: #18365b; line-height: 100px; background: #ddeaf4; width: 100px; height: 100px; border-radius: 50%; text-align: center; }\n			ul.list-dna li .hover-dna { color: #eaca42; position: absolute; top: 0; left: 0; opacity: 0; background: #18365b; width: 100px; height: 100px; border-radius: 50%; text-align: center; }\n			ul.list-dna li:last-child { margin-right: 0x; }\n			ul.list-dna li:hover .hover-dna { opacity: 1; }\n		</style>\n		\n		<ul class="list-dna">\n			<li>\n				<div class="in-dna">S</div>\n				<div class="hover-dna">\n					<div class="tbl">\n						<div class="cell">Smart Work</div>\n					</div>\n				</div>\n			</li>\n			<li>\n				<div class="in-dna">E</div>\n				<div class="hover-dna">\n					<div class="tbl">\n						<div class="cell">Empathy</div>\n					</div>\n				</div>\n			</li>\n			<li>\n				<div class="in-dna">M</div>\n				<div class="hover-dna">\n					<div class="tbl">\n						<div class="cell">Modest</div>\n					</div>\n				</div>\n			</li>\n			<li>\n				<div class="in-dna">A</div>\n				<div class="hover-dna">\n					<div class="tbl">\n						<div class="cell">Ambitions</div>\n					</div>\n				</div>\n			</li>\n			<li>\n				<div class="in-dna">N</div>\n				<div class="hover-dna">\n					<div class="tbl">\n						<div class="cell">Nurture</div>\n					</div>\n				</div>\n			</li>\n			<li>\n				<div class="in-dna">G</div>\n				<div class="hover-dna">\n					<div class="tbl">\n						<div class="cell">Growth</div>\n					</div>\n				</div>\n			</li>\n			<li>\n				<div class="in-dna">A</div>\n				<div class="hover-dna">\n					<div class="tbl">\n						<div class="cell">Agility</div>\n					</div>\n				</div>\n			</li>\n			<li>\n				<div class="in-dna">T</div>\n				<div class="hover-dna">\n					<div class="tbl">\n						<div class="cell">Trustworth</div>\n					</div>\n				</div>\n			</li>\n		</ul>\n								\n							</div>\n						</div>\n					</div>\n							\n				', 5, '2016-05-07 16:33:38', '2015-12-19 08:22:57'),
(7, '<!-- Management System -->\n					\n					<div style="top: 180px; left: -250px;" id="management-icon">\n						<img style="display: inline-block; width: 120px;" src="http://dalea.co.id/uploads/about/management.png">\n					</div>\n					\n					<div id="management-cont">\n						<div class="container">\n							<div class="col-md-12 title">\n								<h3>MANAGEMENT SYSTEM</h3>\n							</div>\n							\n							<div style="opacity: 1;" id="management-part-01" class="management-part">\n								<h4>INDIVIDUAL</h4>\n								Knowledge/<br>\n								Skill/Character\n							</div>\n							\n							<div style="opacity: 1;" id="management-sub-part-01" class="management-sub-part">\n								<hr>\n								<p>\n								Third Level - represents the level of empowerment teams and individuals feel to apply the principles in day-to-day activities that affect company results.\n								</p>\n							</div>\n							\n							<div style="opacity: 1;" id="management-part-02" class="management-part">\n								<h4>TEAM</h4>\n								Trust/Teamwork\n							</div>\n							\n							<div style="opacity: 1;" id="management-sub-part-02" class="management-sub-part">\n								<hr>\n								<p>\n								Second Level - represents the application of the principles to team interactions and activities.\n								</p>\n							</div>\n							\n							<div style="opacity: 1;" id="management-part-03" class="management-part">\n								<h4>MANAGEMENT</h4>\n								Empowerment/Result\n							</div>\n							\n							<div style="opacity: 1;" id="management-sub-part-03" class="management-sub-part">\n								<hr>\n								<p>\n								Center - represents a deep personal understanding of the principles and your individual responsibiliity in demonstrating these principles each day.\n								</p>\n							</div>\n							\n							<div style="opacity: 1;" id="management-part-04" class="management-part">\n								<h4>ORGANIZATIONAL</h4>\n								Commitment/Alignment\n							</div>\n							<div style="clear: both;"></div>\n						</div>\n					</div>\n							\n				', 6, '2016-05-07 16:36:26', '2015-12-19 08:24:10'),
(11, '					\n					<div style="opacity: 0;" id="green-icon">\n						<img src="http://dalea.co.id/uploads/about/green.png">\n					</div>\n					\n					<div style="transform: scale(1); opacity: 1;" id="green-cont">\n						<div class="container">\n							<div class="row">\n							<div class="col-md-8 col-md-offset-2">\n								<div class="quote">\n									<h4>“It takes hands to build a house, but only hearts can build a home.”</h4>\n									<i>Anonymous</i>\n								</div>\n								\n								<div class="logo">\n									<img src="http://dalea.co.id/uploads/about/green-blue-big.png">\n								</div>\n								\n								<div class="desc">\n									<p>\n									Kami percaya bahwa alam dan air adalah kunci bagi kehidupan. Oleh karena itu, kami akan memanfaatkan alam sekitar demi menjaga apa yang telah cucu kita titipkan untuk kehidupan mereka kelak.<br><br>\n									Dalea memproduksi produk yang memadukan antara keindahan dengan konsep Green and Blue. Konsumen akan merasakan bahwa alam adalah bagian utama dari konsep Dalea. Selain itu kami juga menunjukan sisi modern dengan sistem pengairan yang canggih.<br><br>\n									Green and Blue diciptakan untuk seluruh umat manusia yang ingin menghargai alam. Tujuan dari Green and Blue ini sendiri adalah untuk menyadarkan kita akan pentingnya Green (alam) dan Blue (air). Dengan kampanye ini Dalea mengajak umat manusia untuk menjaga dan memperlakukan alam seperti mereka memperlakukan kita. Bantu mereka bertumbuh kembang, niscaya alam akan membalasnya untuk kita, anak kita,  serta seluruh umat manusia.</p><p>\n									</p>\n								</div>\n								\n							</div>\n						<!--\n						</div-->\n					</div>\n							\n				</div>\n				\n			</div>\n			\n		', 7, '2016-05-07 16:39:26', '2015-12-19 11:43:05'),
(12, '<!-- History -->\n				\n					<div class="col-md-2 history-icon">\n						<img src="http://dalea.co.id/uploads/about/history.png">\n					</div>\n					\n					<div class="col-md-10 history-desc">\n						<p>\n						Bermula dari dua orang mahasiswa tingkat dua yang berfikir \n						\n						\n						\n						 masa depan bangsa Indonesia. Mereka berfikir bahwa Negara ini memiliki terlalu banyak pengangguran dan orang miskin, dimana setiap warga Negara ikut andil di dalamnya. Maka dari itu, mereka sepakat untuk mendirikan sebuah unit bisnis yang melibatkan banyak orang untuk berkecimpung di dalamnya, sehingga dapat menaikan taraf hidup orang-orang yang bersangkutan. <br></p><div style="margin-top:10px;">Terdapat 2 cara untuk mengurangi tingkat kemiskinan, menurut kedua mahasiswa ini : </div> \n						<ol style="margin-top: 10px; padding-left: 17px;">\n							<li>Jadi Penguasa, dengan cara membuat program-program yang dapat mensejahterkan rakyat, atau</li>\n							<li>Jadi pengusaha, dengan cara melibatkan banyak sumber daya manusia untuk mesejahterakan mereka melalui pekerjaan yang layak dan kehidupan yang lebih baik.</li>\n						</ol>\n						Maka, mereka memilih opsi nomer 2,  yaitu menjadi pengusaha! \n						<p></p>\n					</div>\n					\n				', 1, '2016-05-07 16:26:19', '2016-01-22 22:02:20'),
(13, '<!-- Why Dalea -->\n				\n					<div id="why-bg" style=''background-image: url("http://dalea.co.id/uploads/about/why-dalea-bg.jpg"); opacity: 1; display: block;''>\n						<div class="why-left">\n							<h1>Why Property Development ?</h1>\n						</div>\n						<div class="why-right">\n							<h1>Kenapa Dalea ?</h1>\n						</div>\n					</div>\n					\n					<div id="why-cont">\n						<div class="container">\n							<div class="desc left whydesc-left" style="padding-top: 140px;">\n								<div class="col-md-9 col-md-offset-1">\n									<p>\n										Dengan berkembangnya masyarakat kelas menengah, Dalea melihat bahwa sektor property di Indonesia menjadi salah satu sektor yang menjanjikan. Namun, dengan banyaknya pesaing yang bermain pada sektor tersebut, Dalea harus menjadi penantang yang mempunyai nilai-nilai kuat agar tidak terseret ombak persaingin dengan para pesaing.  Dalea selalu mengembangkan konsep-konsep baru untuk hunian. Dengan perpaduan antara arsitekur moderen dan kelestarian lingkungan, Dalea yakin bahwa produk yang di tawarkan tidak akan dianggap sebelah mata oleh konsumen.<br>\n										<br>\n										Dalea ingin memberikan sebuah hunian dengan nilai-nilai yang kuat namun dengan harga yang terjangkau, karena kami mengerti apa yang konsumen butuh dan inginkan.<br>\n										<br>\n										Timbulah Singkata DALEA. Lalu setelah dibuat pengukuhan di depan notaris, kami baru sadar, bahwa akroinim yang kami buat salah. Tapi tak apalah, kami tetap berharap filosofi sunda kelapa tentap ada di perusahaan kami.\n									</p>\n								</div>\n							</div>\n							<div id="why-icon" class="col-md-2 col-md-offset-5 ">\n								<img src="http://dalea.co.id/uploads/about/why-dalea.png">\n							</div>\n							<div class="desc right whydesc-right" style="padding-top: 120px;">\n								<div class="col-md-9 col-md-offset-2">\n									<p>\n										Kenapa Dalea? Apa arti Dalea? Ini sebenarnya sebuah cerita lucu. Pada suatu hari, kedua pemuda berfikir tentang nama apa yang layak untuk mereka jadikan nama perusahaan. Sebuah nama yang memiliki karakter kuat. Saat adzan Maghrib berkumandang, mereka teringat akan nama “Sunda Kelapa”. Ya, Sunda Kelapa adalah nama Jakarta pada abad ke-19. Sunda Kelapa adalah kota perdagangan, begitu banyak orang berdatangan dari berbagai tempat ke kota ini. Ketika Sunda Kelapa berubah nama menjadi Jakarta, kota ini tidak dapat lagi dianggap sebelah mata di mata Asia, bahkan dunia.<br>\n										<br>\n										Selanjutnya, kedua pemuda itu sepakat untuk meng-akronimkan nama Sunda Kelapa. Mereka berharap dengan filosofi Sunda Kelapa, perusahaan ini akan menjadi perusahaan besar, hebat, dan mensejahterakan setiap orang yang terlibat di dalamnya.<br>\n										<br>\n										Muncul-lah singkatan DALEA. Lalu setelah dibuat pengukuhan di depan notaris, kami baru sadar bahwa akroinim yang kami buat salah. Tapi tak apalah, kami tetap berharap filosofi Sunda Kelapa tetap ada di perusahaan kami.\n									</p>\n								</div>\n							</div>\n						</div>\n					</div>\n					\n				', 2, '2016-05-07 16:45:23', '2016-01-22 22:02:39'),
(14, '<!-- Leadership Team -->\n				\n					<div style="opacity: 1; display: block;" id="team-bg">\n						<div class="team-left" style="background-image: url(''http://dalea.co.id/uploads/about/zakaria.jpg'');">\n							<div class="overlay"></div>\n						</div>\n						\n						<div class="team-right" style="background-image: url(''http://dalea.co.id/uploads/about/andrew.jpg'');">\n							<div class="overlay"></div>\n						</div>\n					</div>\n					\n					<div id="team-cont">\n						<div class="container">\n							<div class="col-md-5 desc left desc-left">\n								<h2>Zakaria Niode</h2>\n								<h4>President Director</h4>\n								<p>\n								DALEA was established back in 2009, starting from a late-night chat concerning the\n								living quality in Indonesia (with accompaniment from a cup of coffee, of course). <br>\n								<br>\n								The quality of live concerns mainly on its social and environmental issues, whereas\n								property provision and existing competition did not encourage the local players \n								to consider the aspects. <br>\n								<br>\n								DALEA started out of the purpose to provide high quality homes that coincide with\n								nature, as well as to broadly collect young minds from designers, architects, engineers,\n								and entrepreneurs to contribute their bright ideas for the future of the nation.\n								</p>\n							</div>\n							<div id="team-icon" class="col-md-2">\n								<img src="http://dalea.co.id/uploads/about/team.png">\n							</div>\n							<div class="col-md-5 desc right desc-right">\n								<h2>Andrew de Bratakusumah</h2>\n								<h4>Director</h4>\n								<p>\n								DALEA was established back in 2009, starting from a late-night chat concerning the\n								living quality in Indonesia (with accompaniment from a cup of coffee, of course). <br>\n								<br>\n								The quality of live concerns mainly on its social and environmental issues, whereas\n								property provision and existing competition did not encourage the local players \n								to consider the aspects. <br>\n								<br>\n								DALEA started out of the purpose to provide high quality homes that coincide with\n								nature, as well as to broadly collect young minds from designers, architects, engineers,\n								and entrepreneurs to contribute their bright ideas for the future of the nation.\n								</p>\n							</div>\n						</div>\n					</div>\n					\n					<div id="team-overlay">\n						<div class="team-overlay-left teams" data-overlay=".team-left" data-desc=".desc-left"></div>\n						<div class="team-overlay-right teams" data-overlay=".team-right" data-desc=".desc-right"></div>\n					</div>\n					\n				', 3, '2016-05-07 16:29:45', '2016-01-22 22:03:20'),
(15, '<!-- Vision & Mission -->\n				\n					<div id="vandm-cont">\n						<div class="container">\n							<div style="left: 0px; opacity: 1;" class="col-md-5 desc left">\n								<h3>VISI</h3>\n								<p>\n								Menjadi perusahaan dengan pengelolaan terbaik di Indonesia melalui pengembangan SDM dan struktur keuangan yang solid<br>\n								<br>\n								Membangun bangsa<br>\n								<br>\n								Menciptakan iklim perekonomian yang sehat\n								</p>\n							</div>\n							<div id="vandm-icon" class="col-md-2">\n								<img src="http://dalea.co.id/uploads/about/vandm.png">\n							</div>\n							<div style="left: 0px; opacity: 1;" class="col-md-5 desc right">\n								<h3>MISI</h3>\n								<p>\n								Membangun perumahan sesuai dengan kebutuhan konsumen<br>\n								<br>\n								Mensejahterakan para karyawan yang ada di dalamnya<br>\n								<br>\n								Memberdayagunakan dan mensejahterakan masyarakat sekitar<br>\n								<br>\n								Menciptakan pertumbuhan dan keuntungan bagi para stakeholders<br>\n								<br>\n								Aktif mendukung program pemerintah dalam pem-bangunan kota dan mengembangkan sumber daya manusa\n								</p>\n							</div>\n						</div>\n					</div>\n				\n				', 4, '2016-05-07 16:30:46', '2016-01-22 22:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `about_category`
--

CREATE TABLE IF NOT EXISTS `about_category` (
  `about_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`about_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `about_category`
--

INSERT INTO `about_category` (`about_category_id`, `about_category_name`) VALUES
(1, 'History'),
(2, 'Why Dalea'),
(3, 'Direksi'),
(4, 'Visi & Misi'),
(5, 'Semangat'),
(6, 'Sistem Manajemen'),
(7, 'Green & Blue');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `career_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `posting_date` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`career_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`career_id`, `role`, `posting_date`, `created_at`, `updated_at`) VALUES
(2, 'Structural Engineer', '2015-12-21', '2015-12-21', '2015-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `footer_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'PT Dalea Nusantara Mandiri<br>\r\nJalan Lamandau No. 8<br>\r\nJakarta Selatan, Indonesia', '2015-12-20', '2016-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`inbox_id`, `fullname`, `email`, `message`, `created_at`, `updated_at`) VALUES
(28, 'Tester', 'dalea@admin.com', 'asdasda', '2016-05-06', '2016-05-06'),
(29, 'Testing Email', 'hynospt@gmail.com', 'adminadmin', '2016-05-06', '2016-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `posting_date` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_image`, `posting_date`, `created_at`, `updated_at`) VALUES
(4, 'Dalea Nusantara Mandiri', '2016-05-0614404.jpg', '2016-05-12', '2016-05-06', '2016-05-12'),
(5, 'News 2', '2016-05-0665379.jpg', '2016-05-06', '2016-05-06', '2016-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_over_image` varchar(255) NOT NULL,
  `status` enum('Published','Unpublished') NOT NULL DEFAULT 'Unpublished',
  `published_at` datetime NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `product_over_image`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(4, 'Akasha Jagakarsa', 'main-product82035.jpg', 'overlay-product42922.png', 'Published', '0000-00-00 00:00:00', '2016-05-12', '2016-05-12'),
(5, 'Residia Cimanggis', 'main-product82184.jpg', 'overlay-product71061.png', 'Published', '0000-00-00 00:00:00', '2016-05-12', '2016-05-12'),
(6, 'Platara Pondok Pinang', 'main-product19656.jpg', 'overlay-product61485.png', 'Published', '0000-00-00 00:00:00', '2016-05-12', '2016-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE IF NOT EXISTS `product_detail` (
  `product_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_detail_slider_image` varchar(255) NOT NULL,
  `product_tag` text NOT NULL,
  `product_detail_header` varchar(255) NOT NULL,
  `product_detail_description` text NOT NULL,
  `product_detail_image` varchar(255) NOT NULL,
  `product_detail_map` mediumtext NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`product_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`product_detail_id`, `product_id`, `product_detail_slider_image`, `product_tag`, `product_detail_header`, `product_detail_description`, `product_detail_image`, `product_detail_map`, `created_at`, `updated_at`) VALUES
(1, 1, '["product-slider95114.jpg","product-slider91243.jpg","product-slider62361.jpg"]', '"It takes hands to build a house, but only hearts can build home." <br/> - Anonymous', 'product-logo23963.png', 'Cluster Akasha merupakan persembahan dari Dalea yang mengangkat konsep Modern Living. Karakter dan Jiwa dari Desain Akasha berfokus kepada Lingkungan. Representasi lingkungan menjadi dasar penciptaan cluster ini dalam menikmati keindahan di setiap sudut mata serta nyamannya fungsi di setiap bagian dari rumah anda.\r\n\r\nTerletak di lokasi yang strategis, anda akan terinspirasi oleh konsep Akasha yang berfokus pada tumbuhan dan air. Terlebih lagi, terdapat taman atap pada setiap unit Akasha untuk menghidupkan suasana hijau. Hal ini akan menciptakan keselarasan antara tubuh, pikiran, dan jiwa anda.\r\n\r\n<b>Lokasi</b>\r\nJalan Aselih, Cipedak\r\nJagakarsa\r\nJakarta Selatan', 'product-detail42759.jpg', '-6.311599899694445, 106.81995296554567', '2016-01-29', '2016-05-12'),
(2, 2, '["slider94570.jpg","slider18350.jpg","slider71772.jpg"]', '"It takes hands to build a house, but only hearts can build home."- Anonymous', 'product-logo81543.png', 'Residia Cimanggis Townhouse terdiri dari 8 unit rumah didirikan di atas lahan lebih dari 900 m2 dengan design exclusive dan harga terjangkau. Terletak di perbatasan selatan kota Jakarta. Residia Cimanggis terhindar dari hiruk pikuk kota dan memiliki aura alam dan kesejukan.\r\n\r\nLokasi strategis di apit 2 pintu tol, dan 2 jalan utama menuju kota Jakarta dikelilingi pusat perbelanjaan dan hiburan (Cibubur Junction, Giant, Hypermart, Margonda City), rumah sakit internasional (Mitra Keluarga, Melia, Permata Cibubur) dan sekolah (Al-Azhar Syifa Budi, Al-Azhar 20, Tiara Bangsa, Nirmala), Universitas (Universitas Indonesia, Jayabaya, Gunadharma),\r\nMenjadikan kelebihan RESIDIA CIMANGGIS sebagai aset investasi yang baik bagi anda, Residia Cimanggis your "Modern Village" for living.\r\n\r\nLokasi\r\nJalan Tipar, Radar Auri\r\nDepok\r\nJawa Barat', 'product-detail61089.jpg', '-6.344272767746814, 106.83585310058595', '2016-05-05', '2016-05-12'),
(3, 3, '["product-slider61733.jpg","product-slider80580.jpg","product-slider62587.jpg"]', '"It takes hands to build a house, but only hearts can build home." - Anonymous', 'product-logo91204.jpg', 'Cluster Akasha merupakan persembahan dari Dalea yang mengangkat konsep Modern Living. Karakter dan Jiwa dari Desain Akasha berfokus kepada Lingkungan. Representasi lingkungan menjadi dasar penciptaan cluster ini dalam menikmati keindahan di setiap sudut mata serta nyamannya fungsi di setiap bagian dari rumah anda. Terletak di lokasi yang strategis, anda akan terinspirasi oleh konsep Akasha yang berfokus pada tumbuhan dan air. Terlebih lagi, terdapat taman atap pada setiap unit Akasha untuk menghidupkan suasana hijau. Hal ini akan menciptakan keselarasan antara tubuh, pikiran, dan jiwa anda. Lokasi Jalan Aselih, Cipedak Jagakarsa Jakarta Selatan', 'product-detail31064.jpg', '-6.175, 106.82830000000001', '2016-05-12', '2016-05-12'),
(4, 4, '["product-slider38872.jpg","product-slider83845.jpg","product-slider70779.jpg"]', '"It takes hands to build a house, but only hearts can build home."- Anonymous', 'product-logo86105.png', 'Cluster Akasha merupakan persembahan dari Dalea yang mengangkat konsep Modern Living. Karakter dan Jiwa dari Desain Akasha berfokus kepada Lingkungan. Representasi lingkungan menjadi dasar penciptaan cluster ini dalam menikmati keindahan di setiap sudut mata serta nyamannya fungsi di setiap bagian dari rumah anda. Terletak di lokasi yang strategis, anda akan terinspirasi oleh konsep Akasha yang berfokus pada tumbuhan dan air. Terlebih lagi, terdapat taman atap pada setiap unit Akasha untuk menghidupkan suasana hijau. Hal ini akan menciptakan keselarasan antara tubuh, pikiran, dan jiwa anda. Lokasi Jalan Aselih, Cipedak Jagakarsa Jakarta Selatan', 'product-detail15408.jpg', '-6.175, 106.82830000000001', '2016-05-12', '2016-05-12'),
(5, 5, '["product-slider55103.jpg","product-slider63826.jpg","product-slider37925.jpg"]', '"It takes hands to build a house, but only hearts can build home."- Anonymous', 'product-logo92714.png', 'Residia Cimanggis Townhouse terdiri dari 8 unit rumah didirikan di atas lahan lebih dari 900 m2 dengan design exclusive dan harga terjangkau. Terletak di perbatasan selatan kota Jakarta. Residia Cimanggis terhindar dari hiruk pikuk kota dan memiliki aura alam dan kesejukan. Lokasi strategis di apit 2 pintu tol, dan 2 jalan utama menuju kota Jakarta dikelilingi pusat perbelanjaan dan hiburan (Cibubur Junction, Giant, Hypermart, Margonda City), rumah sakit internasional (Mitra Keluarga, Melia, Permata Cibubur) dan sekolah (Al-Azhar Syifa Budi, Al-Azhar 20, Tiara Bangsa, Nirmala), Universitas (Universitas Indonesia, Jayabaya, Gunadharma), Menjadikan kelebihan RESIDIA CIMANGGIS sebagai aset investasi yang baik bagi anda, Residia Cimanggis your "Modern Village" for living. Lokasi Jalan Tipar, Radar Auri Depok Jawa Barat', 'product-detail14876.jpg', '-6.175, 106.82830000000001', '2016-05-12', '2016-05-12'),
(6, 6, '["product-slider23058.jpg","product-slider19941.jpg","product-slider14742.jpg"]', '"It takes hands to build a house, but only hearts can build home."- Anonymous', 'product-logo56338.png', 'Setiap manusia melihat rumahnyalah yang terindah\r\n\r\nDalea berkomitmen untuk membangun pondasi impian anda, karena bagi setiap orang, tak peduli seberapa kecil atau besar, rumahnya akan selalu akan menjadi yang terindah.\r\n\r\nKami mempersembahkan kebanggan kami, Cluster Platara. Sebuah cluster eksklusif yang terdiri dari 4 unit rumah yang dilengkapi dengan konsep Green & Blue dimana elemen natural tidak hanya dihadirkan dalam bentuk penghijauan, namun juga air sebagai sumber daya kehidupan utama.\r\n\r\nSistem penampungan air hujan sebagai substitusi penggunaan air tanah akan menjadi salah satu aplikasinya', 'product-detail66052.jpg', '-6.175, 106.82830000000001', '2016-05-12', '2016-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(255) NOT NULL,
  `published_at` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `published_at`, `created_at`, `updated_at`) VALUES
(7, '2016-05-0518167.jpg', '0000-00-00', '2016-05-05', '2016-05-05'),
(10, '2016-05-1253695.jpg', '0000-00-00', '2016-05-12', '2016-05-12'),
(11, '2016-06-2881860.jpg', '0000-00-00', '2016-06-28', '2016-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `social_id` int(11) NOT NULL AUTO_INCREMENT,
  `social_name` varchar(255) NOT NULL,
  `social_nicename` varchar(255) NOT NULL,
  `social_link` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`social_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`social_id`, `social_name`, `social_nicename`, `social_link`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'Facebook', 'http://facebook.com', '2015-12-20', '2015-12-20'),
(2, 'twitter', 'Twitter', 'kosong', '2015-12-20', '2015-12-20'),
(3, 'linked-in', 'Linked In', 'kosong', '2015-12-20', '2015-12-20'),
(4, 'google', 'Google Plus', 'kosong', '2015-12-20', '2015-12-20'),
(5, 'instagram', 'Instagram', 'kosong', '2015-12-20', '2015-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@dalea.co.id', '$2y$10$Dp.hkVTYN7Fti.QPRr9L9esoVHUY8W9ffTCVp1qyu7zywK83dPAke', 'uiCpyWjBmMl9xeWA6wEFY0U9Cqqi00M1G1QRz4hB7AgnChHcZOkgmDe1TSZE', '2015-12-16 09:25:38', '2016-06-28 20:47:57'),
(2, 'Coba', 'hynospt@gmail.com', '$2y$10$f2b22c2g6guW4go7GsmL5u/H44NMFA2K0XVmJtCKb4leUSefsx3V2', 'yLQ1LkRnXGdTYffzvKGCQThbL0Qpbra4HvlBW8YtrAhIMZ0tLHOkFPG05nzQ', '2016-01-28 22:15:39', '2016-01-28 22:16:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
