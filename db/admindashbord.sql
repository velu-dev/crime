-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2019 at 08:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admindashbord`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `firdetails`
--

CREATE TABLE `firdetails` (
  `id` int(11) NOT NULL,
  `policestationid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `against` varchar(50) NOT NULL,
  `date` varchar(15) NOT NULL,
  `description` varchar(500) NOT NULL,
  `officer` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firdetails`
--

INSERT INTO `firdetails` (`id`, `policestationid`, `name`, `address`, `city`, `mobile`, `reason`, `against`, `date`, `description`, `officer`, `status`) VALUES
(1, 1, 'manikandan', 'coimbatore, gandhipuram', 'coimbatore', ' 7654321890', ' distrup my work ', ' subha', '2019-03-11', 'daily distrup my work ', 'maniyhg', 0),
(2, 2, 'manikandan', 'mani@gmail.com', 'coimbatore', ' 9876543454', ' assign heavy work', ' vijay', '2019-03-07', 'he is give lot of work\r\n', '', 1),
(3, 1, 'maniya', 'coimbatore, gandhipuram', 'coimbatore', ' 98765544322', ' morder', ' ramu', '2019-03-22', 'sddddd', '', 1),
(4, 3, 'kavinesh', 'coimbatore, gandhipuram', 'coimbatore', ' 7654321890', ' distrup my work ', ' subha', '2019-03-23', 'weweewee', '', 1),
(5, 3, 'ram', 'coimbatore, gandhipuram', 'coimbatore', ' 75445454454', ' assign heavy work', ' vijay', '2019-03-21', 'sdssfdfdfdf', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `policestation`
--

CREATE TABLE `policestation` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `location` varchar(500) NOT NULL,
  `activecase` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policestation`
--

INSERT INTO `policestation` (`id`, `name`, `password`, `address`, `contactno`, `location`, `activecase`, `status`) VALUES
(1, 'Perumanallur Police Station', '9917fb9c736c0bde035895ed306dba29', 'Perumanallur PS,Coimbatore - 641601', '0421-2350070', 'https://www.google.com/maps/place/Police+Station/@11.2042081,77.3605027,15z/data=!4m5!3m4!1s0x0:0x862856347276f94c!8m2!3d11.2042081!4d77.3605027', 1, 1),
(2, 'Karumathampatty Police Station', '39911597bb98df4a30c32e953227de6c', 'Karumathampatty PS, Coimbatore - 641601', '0421-2333053', 'https://www.google.com/maps/place/Police+Station/@11.1094899,77.1803981,15z/data=!4m5!3m4!1s0x0:0x3e93fcdeaa8f6cf8!8m2!3d11.1094899!4d77.1803981', 1, 1),
(3, 'Annur Police Station', '3661685bb1975205b5a9a663d7d9b6ae', 'Annur PS, Coimbatore -641601', '04254-262239', 'https://www.google.com/maps/place/Annur+Police+Station/@11.2315866,77.1011992,15z/data=!4m5!3m4!1s0x0:0xf7c5d130aa520da7!8m2!3d11.2315866!4d77.1011992', 2, 1),
(4, 'Negamam Police Station', '19189d9b78f64758788c689f9cc95581', ' Negamam PS,Coimbatore - 641120', '04259-244224', 'https://www.google.com/maps/place/Periya+Negamam+Police+Station/@10.7475444,77.0956745,15z/data=!4m5!3m4!1s0x0:0x64cf321b2dee84b8!8m2!3d10.7475444!4d77.0956745', 0, 1),
(5, 'Kovilpalayam Police Station', 'd63177d7e8b1736d211bde3b947a7252', ' Kovilpalayam PS,\r\nCoimbatore – 641664', '0422 -2654246', 'https://www.google.com/maps/place/Kovilpalayam+Police+Station/@11.1364961,77.0353966,15z/data=!4m5!3m4!1s0x0:0x3d61ded558dd04aa!8m2!3d11.1364961!4d77.0353966', 0, 1),
(6, 'Pollachi Town West Police Station', 'b63fff2d5e29976c754a48584d85d9da', 'Pollachi TownPS, Coimbatore - 641601', '04259-224633', 'https://www.google.com/maps/place/Pollachi+West+Police+Station/@10.8402184,76.8593794,11z/data=!4m19!1m13!4m12!1m4!2m2!1d76.9746323!2d11.0167007!4e1!1m6!1m2!1s0x3ba8382d12712f95:0xae500e41bb154b2e!2sPollachi+Town+West+Police+Station!2m2!1d77.0004973!2d10.6638035!3m4!1s0x3ba8382d12712f95:0xae500e41bb154b2e!8m2!3d10.6638035!4d77.0004973', 0, 1),
(7, 'Sulur Police Station', '4d29c4262e33e756e07ab035f0427c9b', 'Sulur PS, Coimbatore -641402', '0422 - 2680100', 'https://www.google.com/maps/place/Sulur+Police+Station/@11.0244979,77.1201091,15z/data=!4m2!3m1!1s0x0:0x205b9308ab17acab?ved=2ahUKEwj0u9iGxbrgAhVWbn0KHUjICN0Q_BIwGHoECAIQCA', 0, 1),
(8, 'Pollachi Bazaar East Police Station', 'c7c4d6357397a78864646dd5bd459e57', ' PollachiBazaar PS, Coimbatore', '04259-224433', 'https://www.google.com/search?safe=active&q=Pollachi+Bazaar+East+Police+Station+map&npsic=0&rflfq=1&rlha=0&rllag=10665073,77006459,657&tbm=lcl&ved=2ahUKEwi05o2kxrrgAhVbU30KHZ5pDycQtgN6BAgAEAQ&tbs=lrf:!2m1!1e2!2m1!1e16!3sIAE,lf:1,lf_ui:2&rldoc=1#rlfi=hd:;si:;mv:!1m2!1d10.6663439!2d77.0130731!2m2!1d10.663803!2d76.9998464;tbs:lrf:!2m1!1e2!2m1!1e16!3sIAE,lf:1,lf_ui:2', 0, 1),
(9, 'Pollachi Taluk Police Station', '1d4921ddf12e2b8512bf1117abd21d77', 'Pollachi Taluk PS,Coimbatore - 641601', '04259-226733', 'https://www.google.com/maps/dir//pollachi+taluk+police+station/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x3ba839d4e36bddd7:0x8190e32185c43fa1?ved=2ahUKEwiL3vL1xbrgAhUKWysKHY7oB64Q9RcwAHoECAEQCA', 0, 1),
(10, 'kottur police station', '657726daf969ba41cf5ef0748a26f32a', 'Kottur PS, Coimbatore -641601', ' 04259-286233', 'https://www.google.com/maps?q=kottur+police+station&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjzxoDKxrrgAhVDfSsKHTx4B1AQ_AUIDigB', 0, 1),
(11, 'Anamalai Police Station', '644bdd87ed84c4d701fa59acff7ff18a', 'Anamalai PS,Coimbatore - 641601', '04253-282230', 'https://www.google.com/maps?q=anamalai+police+station&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiqysrOxrrgAhUOfisKHfV2DcgQ_AUIDigB', 0, 1),
(12, 'Valaparai Police Station', '81c1836e2d290011955688c06d5708cd', 'Valaparai PS,Coimbatore - 641601', '04253-222201', 'https://www.google.com/maps/dir/11.0167007,76.9746323/Valparai+Police+Station/@10.6728057,76.7472889,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3b0789b619dd8e77:0xfd167c7976be2e81!2m2!1d76.9573724!2d10.329058', 0, 1),
(13, 'Mudis Police Station', '212810054d847cc322ad340031f45f24', 'Mudis PS, Coimbatore -641601', ' 04253-234240', 'https://www.google.com/maps/place/Mudis+Police+Station/@10.2768699,76.9240165,17z/data=!3m1!4b1!4m5!3m4!1s0x3b07895bafc193e1:0xa6ab3760b9e1caa3!8m2!3d10.2768699!4d76.9262052', 0, 1),
(14, 'Kadamparai Police Station', 'adbd059b13a850bb2c1b38d2adb7571e', 'Kadamparai PS,Coimbatore - 641601', '04253-236331', 'https://www.google.com/maps/search/Kadamparai+Police+Station/@10.3698194,76.9654183,13z/data=!3m1!4b1', 0, 1),
(15, 'Gomangalam Police Station', '198a5ea5f68e7940b7672f88ac90477b', 'Gomangalam PS,Coimbatore - 641601', '04252-280226', 'https://www.google.com/maps?q=gomangalam+police+station&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiM3LzXx7rgAhVVJHIKHfMmBLEQ_AUIDigB', 0, 1),
(16, 'Periyanaickenpalayam Police Station', 'f49ae2b41ee6f83099d693d9a9d1e70c', 'Periyanaickenpalayam PS, Coimbatore - 641020', '0422-2692228', 'https://www.google.com/maps/place/Periyanaickenpalayam+Police+Station/@11.152821,76.9434752,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8f136c7754261:0x453d2cf16879cff8!8m2!3d11.152821!4d76.9456639', 0, 1),
(17, 'Thudiyalur Police Station', 'c3dc5a3644b827035b30657ab228261a', 'Thudiyalur PS,Coimbatore - 641034', '0422 -2642990', 'https://www.google.com/maps?q=thudiyalur+police+station&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjOyb-RyLrgAhXCWysKHf6BDPIQ_AUIDigB', 0, 1),
(18, 'Mettupalayam Police Station', ' f7faa8b975e24b8893e76e6f9ca08da6', 'Mettupalayam PS,Coimbatore - 641301', '04254-222222', 'https://www.google.com/maps/place/Mettupalayam+Police+Station/@11.3075394,76.9324118,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8eebbe852b81b:0x4cf7e922758e9891!8m2!3d11.3075394!4d76.9346005', 0, 1),
(19, 'Karamadai Police Station', 'f1868c4b2eda9abb16bacbbb66aeedf2', 'Karamadai PS,\r\nCoimbatore – 641104', '04254-272444', 'https://www.google.com/maps/place/Karamadai+Police+Station/@11.2395786,76.9573714,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8ee2b8d4d6841:0x378cf8a14e294213!8m2!3d11.2395786!4d76.9595601', 0, 1),
(20, 'Pillur-Dam Police Station', '23d1fd84332932e37cf21f4e0d88c441', 'Pullur-Dam PS,Coimbatore - 641301', '04254-224650', 'https://www.google.com/maps/search/Pillur-Dam+Police+Station/@11.0195739,76.9087809,12z/data=!3m1!4b1', 0, 1),
(21, 'Sirumugai Police Station', 'd2a5262034869cdae3fad1264efaabca', 'Sirumugai PS,\r\nCoimbatore – 641301', '04254-252094', 'https://www.google.com/maps/place/Sirumugai+Police+Station/@11.328798,77.0212975,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8e608425706af:0xd27cf58406fd3991!8m2!3d11.328798!4d77.0234862', 0, 1),
(22, 'Pollachi West Police Station', '201fd9de705881049f59387dd97f3411', 'Pollachi\r\nWPS,Coimbatore – 641301', '04259-227733', 'https://www.google.com/maps/place/Pollachi+West+Police+Station/@10.6638035,76.9983086,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8382d12712f95:0xae500e41bb154b2e!8m2!3d10.6638035!4d77.0004973', 0, 1),
(23, 'Perinacikenpallyam W Police Station', 'db6919aa851bf9cb910f0d30fbe1fcc8', 'Perinacikenpallyam WPS,Coimbatore – 641029', '04259-227876', 'https://www.google.com/maps/place/Periyanaickenpalayam+Police+Station/@11.152821,76.9434752,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8f136c7754261:0x453d2cf16879cff8!8m2!3d11.152821!4d76.9456639', 0, 1),
(24, 'perur police station', '1e7ad57d0c277829e0e3533b9436c710', 'Perur PS – 641 010', '0422 -2607924', 'https://www.google.com/maps/search/perur+police+station/@11.0195818,76.9700667,15z/data=!3m1!4b1', 0, 1),
(25, 'Madukkarai Police Station', 'fdbd3130eaffca4a0c2ddf90615e5bc5', 'Madukkarai PS – 641\r\n105', '0422-2622222', 'https://www.google.com/maps/place/Madukkarai+Police+Station/@10.9114718,76.9470647,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba85b11afe6b077:0x960fa98a59de2f19!8m2!3d10.9114718!4d76.9492534', 0, 1),
(26, 'Alandurai Police Station', '5813b9e0e018fad47edbfa87929f05c5', 'Alandurai PS – 641 101', '0422-2650231', 'https://www.google.com/maps?q=Alandurai+Police+Station&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiyx_OG-LrgAhUQSo8KHQFFAeQQ_AUIDigB', 0, 1),
(27, 'Thondamuthur Police Station', 'f1ffae7674efac5f6c423633a258e621', 'Thondamuthur PS -641 109', '0422 - 2617258', 'https://www.google.com/maps/place/Thondamuthur+Police+Station/@10.991239,76.8402202,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba85e3c0f433f2f:0xe67b13e7204ef996!8m2!3d10.991239!4d76.8424089', 0, 1),
(28, 'Kinathukadavu Police Station', '6e58c30c3e774219125adc2ac897db94', 'Kinathukadavu PS –\r\n642 109', '04259-242040', 'https://www.google.com/maps/search/Kinathukadavu+Police+Station/@11.0195799,76.9438019,13z/data=!3m1!4b1', 0, 1),
(29, 'Karunyanagar Police Station', 'd22de48f62d30d36df5567f4c98024e7', 'Karunyanagar PS –\r\n641 114', '0422 - 2615701', 'https://www.google.com/search?q=Karunyanagar+Police+Station&oq=Karunyanagar+Police+Station&aqs=chrome..69i57j0.568j0j7&sourceid=chrome&ie=UTF-8', 0, 1),
(30, 'Vada valli Police Station', '4330565a6355ad150071a73cd67b3315', 'Vada valli PS – 641 041', '0422 -2423100', 'https://www.google.com/maps/search/Vada+valli+Police+Station/@11.0195799,76.9438019,13z/data=!3m1!4b1', 0, 1),
(31, 'Chetti palayam Police Station', 'bcaed2614632945fdf7abd10b0ccd870', 'Chetti palayam PS\r\n – 641 201', '0422 - 2655228', 'https://www.google.com/maps/place/Chettipalayam+Police+Station/@10.9174972,77.0355024,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8505cca867069:0xa1b352d6eda733d9!8m2!3d10.9174972!4d77.0376911', 0, 1),
(32, 'B1 Bazzar Police Station', 'f8724db64d044b00fbcf82fcaa5f3c51', 'Perur Mian Raod,Coimbatore. .- 641018', '0422 - 2391000', 'https://www.google.com/maps?q=B1+Bazaar+Police+Station&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiXr42p-7rgAhVIq48KHQv2CUQQ_AUIDigB', 0, 1),
(33, 'B2 R.S.Puram Police Station', '18120db3ca8f2d391a6bc2f43190ef19', 'SubramaniamRoad, R.S. Puram, Coimbatore.- 641002', '0422 - 2475777?', 'https://www.google.com/maps/place/B.2+R.S+Puram+Police+Station/@11.0051175,76.947792,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8591b07ed49e3:0xa89cd047dfb7567e!8m2!3d11.0051175!4d76.9499807', 0, 1),
(34, 'B3 Kattur (Ram nagar) Police Station', 'f7463837f6720f7c3bdcf4579b3f6efe', 'Dr.Nanjappa Road, Gandhipuram, Coimbatore. .-641018.', '0422 - 2302005', 'https://www.google.com/search?q=B3+Kattur+(Ram+nagar)+Police+Station&oq=B3+Kattur+(Ram+nagar)+Police+Station&aqs=chrome..69i57.479j0j7&sourceid=chrome&ie=UTF-8', 0, 1),
(35, 'B4 Race course Police Station', 'd4a40f12442be79912620c7fa72d2028', 'Huzur Raod,Coimbatore. .- 641018', '0422 - 2316749', 'https://www.google.com/maps/place/Race+Course+Police+Station/@11.0002411,76.9694331,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba859a5eb1c04d7:0xc10d952a52f24958!8m2!3d11.0002411!4d76.9716218', 0, 1),
(36, 'B5 Singanallur Police Station', '0f66aaa05f59dae7e76e8d4988d7ab3a', 'Trichy Road,Singanallur, Coimbatore.- 641005', '0422 -2573254', 'https://www.google.com/maps/place/E1+Singanallur+Police+Station/@11.000274,77.0274088,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8576c76e7f0eb:0x6df6e84cd8f2802!8m2!3d11.000274!4d77.0295975', 0, 1),
(37, 'B6 Peelamedu Police Station', 'a3dfca670d00b506f028c2d87f41c1b1', 'Avinashi Road,Peelamedu, Coimbnatore.- 641004', '0422 -2571804', 'https://www.google.com/maps?safe=active&q=B6+Peelamedu+Police+Station&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjV_PPPgLvgAhUaXn0KHcGOAagQ_AUIDigB', 0, 1),
(38, 'B7 Ramanathapuram Police Station', 'b13317fe65b94e2431c00f8523346b38', 'PuliakulamMain Raod, Ramanathapuram, Coimbatore. -641045', '0422 - 2318195', 'https://www.google.com/maps?q=B7+Ramanathapuram+Police+Station&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiP5PjEgLvgAhUWXysKHfQGARoQ_AUIDigB', 0, 1),
(39, 'B8 Variety hall road Police Station', '6eabf0b456c6b742ef2079b8717f3e99', ' Variety HallRaod, Coimbatore.- 641001', '0422 - 2397121', 'https://www.google.com/maps/search/B8+Variety+hall+road+Police+Station/@10.998014,76.9614146,18z/data=!3m1!4b1', 0, 1),
(40, 'B9 Saravanapatti Police Station', 'da4dc7f597d4374ed2c1762b861a6646', 'SathyamangalamRoad, Saravanampatty, Coimbatore.- 641035', '0422 - 2666445', 'https://www.google.com/maps/place/E3+Police+Station/@11.074758,77.0007685,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8f7f10d9b882b:0xf4c7458012d2357f!8m2!3d11.074758!4d77.0029626', 0, 1),
(41, 'B10 Selvapuram Police Station', 'b505f29250669ff0e753c879e34316d8', 'RamamurthyRoad, Selvapuram, Coimbatore.- 641026', '0422 - 2342477', 'https://www.google.com/maps/place/B10+Police+Station/@10.9883762,76.9334554,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba85940d0438e5d:0x6f5454b1a7ba305b!8m2!3d10.9883762!4d76.9356495', 0, 1),
(42, 'B11 Saibabacolony Police Station', 'c0b3bd49cf4f41579b2d27e77ca71d64', 'MettupalayamRoad, Saibaba Colony, Coimbatore.- 641043', '0422 - 2437100', 'https://www.google.com/maps/place/B11+Police+Station/@11.0265968,76.9493204,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba858efc9a85cc3:0xc6d19c309e5810d2!8m2!3d11.0265968!4d76.9515145', 0, 1),
(43, 'B12 Ukkadam Police Station,', '82ff7eb57db2a0c684476836cd0775a6', 'Palakkad MainRoad, Ukkadam, Coimbatore. 641001', '0422 -2392838', 'https://www.google.com/maps/search/B12+Ukkadam+Police+Station,/@10.9914511,76.9598597,17z/data=!3m1!4b1', 0, 1),
(44, 'B13 Podanur Police Station', '10555d59ec48845ee326a3b71e12ec1d', 'Podanur Main Road,Podanur, Coimbatore. - 641023', '0422 -2345838', 'https://www.google.com/maps/place/Podanur+Police+Station/@10.9658357,76.9832411,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba85a2191832293:0xa53fc804809171a!8m2!3d10.9658357!4d76.9854352', 0, 1),
(45, 'B14 Kuniamuthur Police Station', 'a26f395ef751dbb4f26185ea00e63fbb', 'Palakkad MainRoad, Kuniamuthur, Coimbatore. - 641008', '0422 - 2437800', 'https://www.google.com/maps/place/B14+Kuniamuthur+Police+Station/@10.9388611,76.948928,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba85bbaf198c08f:0x683df590527b30d7!8m2!3d10.9388611!4d76.9511221', 0, 1),
(46, 'B15 Rathinapuri Police Station', '9602b8d02b1ff6409003efa7686d7efb', 'P.M. SamyColony, Rathinapuri, Coimbatore 641027', '0422 - 2437110', 'https://www.google.com/maps/place/Rathinapuri+Police+Station+Road,+Rathinapuri,+Coimbatore,+Tamil+Nadu+641027/@11.02559,76.9654181,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba858582369d925:0x9d55c54a527188bf!8m2!3d11.02559!4d76.9676122', 0, 1),
(47, 'B2 R.S. Puram CRIME Police Station', '332c25d98f7f9c64be182fe66259e19f', 'Subramaniam Road, R.S. Puram,Coimbatore.641002', ' 0422 -2392883', 'https://www.google.com/maps/place/B.2+R.S+Puram+Police+Station/@11.0051175,76.9477866,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8591b07ed49e3:0xa89cd047dfb7567e!8m2!3d11.0051175!4d76.9499807', 0, 1),
(48, 'AW (E) Police Station', 'f739755aee0afd3e895ea3e2099b28c5', 'Puliakulam Main Raod,Ramanathapuram, Coimbatore.641045', '0422 -2580315', 'https://www.google.com/maps/search/AW+(E)+Police+Station/@11.005117,76.9324174,14z/data=!3m1!4b1', 0, 1),
(49, 'AW (W) Police Station', 'f02a758eed9da27ba37f1ab3b03f1013', 'Subramaniam Road, R.S.Puram, Coimbatore.- 641002', '0422 -2476869', 'https://www.google.com/maps/place/All+Women+Police+Station/@11.0051814,76.9478006,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba8591b00c82245:0x42c7cc7877a6d23e!8m2!3d11.0051814!4d76.9499947', 0, 1),
(50, 'AW {C} Police Station', '4f615939be12fc14adb6c04ebeccebf1', 'Dr. Nanjappa Road,Gandhipuram, Coimbatore.641018', '0422 -2301633', 'https://www.google.com/maps/search/AW+%7BC%7D+Police+Station/@11.005116,76.9323315,14z/data=!3m1!4b1', 0, 1),
(51, 'Tiruppur North Police Station', '740659c39a2f4553872f9aa10e9bc979', 'Tiruppur North PS,Coimbatore - 641601', '0421-2239380', 'https://www.google.com/maps/search/Tiruppur+North+Police+Station/@11.1064644,77.3404932,17z/data=!3m1!4b1', 0, 1),
(52, 'Tiruppur South Police Station', '3768af95d434bcb3ce733eb661a42afa', 'Tiruppur South PS,Coimbatore - 641601', '0421-2251189', 'https://www.google.com/maps/search/Tiruppur+South+Police+Station/@11.1086349,77.3194628,14z/data=!3m1!4b1', 0, 1),
(53, 'Tiruppur Rural Police Station', '19c219ae82fec1c197ca5817bfb42dbf', 'Tiruppur Rural PS,Coimbatore - 641601', '0421-2219880', 'https://www.google.com/maps/search/Tiruppur+Rural+Police+Station/@11.1064644,77.3404825,17z/data=!3m1!4b1', 0, 1),
(54, 'Anuppar Palayam Police Station', '2f0972ff9c698f43dedb911393e650de', 'Anuppar Palayam PS, Coimbatore - 641601', '0421-2238580', 'https://www.google.com/maps/search/Anuppar+Palayam+Police+Station/@11.1064644,77.3404718,17z/data=!3m1!4b1', 0, 1),
(55, 'Avinashi Police Station', '79fa669fa7199d9afac723e235236300', 'Avinashi PS, Coimbatore -641601', '04296-273149', 'https://www.google.com/maps/place/Avinashi+Police+station/@11.1885639,77.2687272,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba9039169ca6c01:0xe73466ade38e468a!8m2!3d11.1885639!4d77.2709213', 0, 1),
(56, 'Cheyar Police Station', '4afd6f9067769185298fb528adcfeac4', 'Cheyar PS, Coimbatore -641601', '04296-287244', 'https://www.google.com/maps/search/Cheyar+Police+Station/@12.7403991,79.5463205,12z/data=!3m1!4b1', 0, 1),
(57, 'Palladam Police Station,', '4d4164c0a7e737986c135dededcb0b36', 'Palladam PS, Coimbatore- 641664', '04255-252100', 'https://www.google.com/maps/search/Palladam+Police+Station,/@11.1885557,77.2006977,12z/data=!3m1!4b1', 0, 1),
(58, 'Kamanaickenpalayam Police Station', 'ee095efc81fa31554c200302810bb9ce', 'Kamanaickenpalayam PS, Coimbatore - 641658', '04255-266222', 'https://www.google.com/maps/search/Kamanaickenpalayam+Police+Station/@10.9073506,77.2169231,17z/data=!3m1!4b1', 0, 1),
(59, 'Avinashipalayam Police Station', 'd5ab72f69ab542aa51d41b6d10c76a40', 'AvinashipalayamPS, Coimbatore - 641665', '0421-2312255', 'https://www.google.com/maps/place/Avinashipalayam+Police+Station/@10.9700369,77.4324077,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba9a4379e3e4645:0x84ec04005a7d9064!8m2!3d10.9700369!4d77.4346018', 0, 1),
(60, 'Udumalpet Police Station', '3fff37282358bc35cf85d1997cd784ff', 'Udumalpet PS,Coimbatore - 641601', '04252-223841', 'https://www.google.com/maps/place/Udumalpet+Police+Station/@10.5850401,77.24148,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba9cc54e09cc733:0xe7516ed544a30225!8m2!3d10.5850401!4d77.2436741', 0, 1),
(61, 'Gudimangalam Police Station', 'f5d080846baa77c7730803252cf4e5cf', 'GudimangalamPS, Coimbatore - 641601', '04252-273344', 'https://www.google.com/maps/place/Gudimangalam+Police+Station/@10.6939675,77.2789887,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba9ca218c8d1b33:0x4bcd4a1f3a12fb6a!8m2!3d10.6939675!4d77.2811828', 0, 1),
(62, 'Komaralingam Police Station', '7769f7eb857a17564c29f661d97d0fbe', 'Komaralingam PS,Coimbatore - 641601', '04252-278232', 'https://www.google.com/maps/place/Komaralingam+Police+Station./@10.4886301,77.3514935,17z/data=!3m1!4b1!4m5!3m4!1s0x3ba9d0ed61740723:0x8ed09c18113e049a!8m2!3d10.4886301!4d77.3536876', 0, 1),
(63, 'Dhally Police Station', 'f4336f6be680f0f518cb0b59908bf55f', 'Dhally PS, Coimbatore -641601', '04252-265250', 'https://www.google.com/maps/search/KDhally+Police+Station/@23.6390695,85.51113,17z/data=!3m1!4b1', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `posting` varchar(50) NOT NULL,
  `E-Mail` varchar(50) NOT NULL,
  `policestationid` int(11) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Staffid` varchar(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`id`, `Name`, `posting`, `E-Mail`, `policestationid`, `Mobile`, `Staffid`, `Address`, `City`, `Status`) VALUES
(1, 'manikandan', 'inspector', 'kavinesh@gmail.com', 1, '7654321890', 'rs3', 'coimbatore', 'coimbatore, gandhipuram', 1),
(2, 'maniyhg', 'inspector', 'mani@gmail.com', 1, '7654321890', 'ds4rb', 'coimbatore', 'coimbatore, gandhipuram', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firdetails`
--
ALTER TABLE `firdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policestation`
--
ALTER TABLE `policestation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `firdetails`
--
ALTER TABLE `firdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `policestation`
--
ALTER TABLE `policestation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `staffinfo`
--
ALTER TABLE `staffinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
