-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2020 at 06:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb-sma`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `nopen` varchar(9) NOT NULL DEFAULT '0',
  `nik` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `school` varchar(128) NOT NULL,
  `year_graduated` varchar(4) NOT NULL,
  `noun` varchar(100) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `born_place` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT '0',
  `father_name` varchar(100) NOT NULL,
  `father_job` varchar(100) NOT NULL,
  `father_address` varchar(100) NOT NULL,
  `father_phone` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mother_job` varchar(100) NOT NULL,
  `mother_address` varchar(100) NOT NULL,
  `mother_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`nopen`, `nik`, `nisn`, `school`, `year_graduated`, `noun`, `fullname`, `gender`, `born_place`, `date`, `alamat`, `user_id`, `verified`, `father_name`, `father_job`, `father_address`, `father_phone`, `mother_name`, `mother_job`, `mother_address`, `mother_phone`) VALUES
('20200001', '320112', '', 'smpn 1 soreang', '', '34212', 'amelia cintya dewi', 'Female', 'Bandung', '15 Juli 2004', 'jl du no 4', 0, 0, '', '', '', '', '', '', '', ''),
('20200002', '320110', '', 'SMPN 5 Bandung', '', '13344', 'amelia cintya dewi', 'Female', 'bandung', '14 januari 1999', 'jl. cihanjuang', 0, 0, '', '', '', '', '', '', '', ''),
('20200004', '320112', '', 'smpn 1 soreang', '', '34212', 'Rizkana', 'Female', 'bandung', '14 januari 1999', 'Jl Dipatiukur', 13, 1, '', '', '', '', '', '', '', ''),
('20200005', '32037887', '', 'SMPN 5 Bandung', '', '899302667', 'Amelia Cintya D', 'Female', 'Bandung', '14 januari 1999', 'Soreang', 12, 1, '', '', '', '', '', '', '', ''),
('20200007', '123123', '12312312', 'mts', '2020', '12312312312', 'udin', 'Male', 'bandung', '2000-01-01', 'jl sukajadi 3', 16, 1, 'Karim', 'Swasta', 'bandung', '123123', 'Indah', 'IRT', 'Bandung', '123123'),
('20200008', '75409645', '41376619', 'Hettinger, Kuhlman and Cartwright', '2019', '96444160', 'Miss Rahsaan Schamberger', 'Female', 'Bandung', '8May2001', '73349 McLaughlin Ways\nRandyton, IL 44483-9305', 119, 1, 'Franz Stokes', 'Brazing Machine Operator', '662 Kayleigh Avenue Apt. 163\nPort Zechariah, SD 29922', '737.708.1045 x518', 'Alisha Langosh', 'Textile Worker', '30002 Justyn Canyon Suite 392\nSouth Lindahaven, WV 42254-2183', '+1 (968) 936-3670'),
('20200009', '47661172', '11236542', 'Dibbert-Powlowski', '2019', '28145858', 'Jaleel Muller', 'Female', 'Kab. Bandung', '24March2004', '51321 Hollie Shoal Apt. 371\nPort Cortney, ME 32095-1280', 120, 1, 'Glennie Graham V', 'Mixing and Blending Machine Operator', '1452 Ardella Stravenue\nThompsonshire, SC 19054', '279.418.8322', 'Chloe Lakin', 'Environmental Science Teacher', '4420 Wilderman Union\nJocelynfurt, NY 80258-8673', '719.579.3202 x341'),
('20200010', '78809438', '18895305', 'Halvorson, Daniel and Volkman', '2018', '75194547', 'Prof. Ladarius Erdman II', 'Female', 'Bandung', '15July2004', '83951 Geovanny Manors\nLadariuschester, FL 99122-5438', 121, 1, 'Bart Brekke', 'Choreographer', '3046 Elena Loop\nNew Oswaldmouth, CO 42802-4945', '(656) 939-4718 x98122', 'Ms. Christy Sawayn', 'Environmental Engineer', '991 Volkman Underpass\nSouth Lemuel, OH 13767', '+1-369-659-5257'),
('20200011', '32759556', '36522780', 'Konopelski-Dietrich', '2020', '60977478', 'Kallie Larkin PhD', 'Male', 'Cimahi', '9January1998', '19110 Maurine Ford Apt. 392\nSantinoville, AR 19004', 122, 1, 'Enoch Prosacco', 'Movers', '8940 Linwood Forest\nReannafurt, DC 69309-9359', '735.957.0827 x622', 'Gabriella Larkin', 'Cartoonist', '1012 Alfonzo Ridge\nLake Pietrostad, MN 06124-3206', '1-752-325-2337 x920'),
('20200012', '87833154', '3875303', 'Dickens, Cremin and Hermiston', '2019', '55385771', 'Jaden Gusikowski MD', 'Female', 'Kab. Bandung', '13April2000', '729 Jacobson Dale Suite 618\nSouth Dameon, ME 33327', 123, 1, 'Rudolph Gerhold', 'Clinical Psychologist', '8352 Allene Spur Suite 240\nSchroedermouth, GA 19849-2384', '(230) 758-4596', 'Shaylee Kuhic', 'Biological Science Teacher', '9690 Yost Crossroad Apt. 776\nMcLaughlinport, CA 80738', '461.791.9021 x12493'),
('20200013', '65252592', '29388230', 'McKenzie, Bayer and Macejkovic', '2020', '40294556', 'Frieda Labadie', 'Female', 'Bandung', '4October2003', '4785 Ritchie Gardens\nStellamouth, UT 60763', 124, 1, 'Blair Wolff', 'Postmasters', '830 Homenick Parks Suite 080\nMarinachester, WA 76056', '(513) 397-2410 x119', 'Susie Grimes', 'Janitor', '50253 Block Haven Apt. 990\nEast Garnetthaven, MS 48073-7765', '+1-610-608-2468'),
('20200014', '89824393', '5998085', 'Windler and Sons', '2018', '61922092', 'Ms. Adaline Kshlerin V', 'Male', 'Bandung', '7May2003', '251 Yost Cape\nLake Aftonton, MS 07672-7191', 125, 1, 'Prof. Jerome Hoppe', 'Animal Care Workers', '5855 Price Wall\nDedrickland, WV 41777', '802.342.6037 x2092', 'Alyce Harber', 'Interviewer', '65888 Thomas Club\nChaimberg, MD 16810', '(716) 587-4240 x01600'),
('20200015', '21018105', '75516260', 'Stoltenberg, Mueller and Schimmel', '2020', '42411635', 'Margarita Quigley', 'Male', 'Bandung', '2June2001', '5854 Tyshawn Run Suite 200\nPort Joel, TN 95802-5061', 126, 1, 'Emmet Grant Jr.', 'Armored Assault Vehicle Officer', '12021 Pfeffer Loop\nLake Jo, CA 74491', '871.258.5169 x234', 'Carley Feeney', 'Copy Machine Operator', '359 Wolf Union Suite 078\nNelsfurt, NH 71302-6958', '534.904.1137'),
('20200016', '95337102', '28259687', 'Kessler, Hegmann and Emmerich', '2019', '20323420', 'Prof. Hosea Bruen', 'Male', 'Kab. Bandung', '1August2001', '66968 Candido Valley\nArvillahaven, WV 09568', 127, 1, 'Francis Pfeffer DVM', 'Historian', '2614 Amaya Turnpike Apt. 437\nEarlshire, GA 85775', '+1-494-576-2885', 'Caroline Cronin', 'Real Estate Broker', '744 Dicki Valley Suite 983\nWest Ceasarville, WA 25192', '406.602.4896'),
('20200017', '11394753', '8886273', 'Weber Ltd', '2018', '92185146', 'Mr. Wilfredo Tillman Jr.', 'Male', 'Bandung', '4September2002', '53521 Alexandro Cape\nSouth Brannon, VA 61169', 128, 1, 'Turner Lowe', 'Metal Molding Operator', '753 Sofia Alley\nLake Shawnchester, NV 21641', '1-376-850-1264 x33019', 'Carmela Grimes', 'Production Worker', '1407 Berge Passage Suite 793\nElmorebury, GA 86439', '1-487-920-3924 x4205'),
('20200018', '58014435', '54983221', 'Lemke-Mertz', '2018', '81096696', 'Dr. Jordyn Klocko', 'Male', 'Kab. Bandung', '20May2003', '5552 Rudolph Canyon\nNew Sadye, MA 96058-9874', 129, 1, 'Clifton Torphy', 'Reservation Agent OR Transportation Ticket Agent', '4949 Lysanne Cliffs\nSouth Alvertahaven, NH 45679-9884', '912-950-2921 x049', 'Noemi Auer', 'Merchandise Displayer OR Window Trimmer', '5101 Johnson Glen\nMedhurstfurt, AL 50115', '(708) 227-2042 x49667'),
('20200019', '73275535', '60400199', 'Lind-Dicki', '2019', '94384063', 'Schuyler Fay', 'Male', 'Kab. Bandung', '10August2004', '654 Hans Cove Suite 105\nLake Malinda, NC 56445', 130, 1, 'Russell Hettinger', 'Museum Conservator', '2766 Augusta Ways\nNasirview, MI 75958', '938-964-1426', 'Baby Jacobi V', 'Protective Service Worker', '5633 Bergnaum Drive\nSouth Jacktown, CT 55967-1337', '+1.643.737.2692'),
('20200020', '64690629', '23736850', 'Considine, Bergstrom and Nicolas', '2020', '32252082', 'Ally Kunde', 'Female', 'Cimahi', '11June2001', '730 Darius Burgs\nMooreborough, VT 94739', 131, 1, 'Warren Deckow', 'Aircraft Engine Specialist', '876 Ariane Harbors\nNorth Jaidenchester, NJ 99969', '(903) 491-4605', 'Alaina Kulas', 'Retail Salesperson', '69047 Bins Terrace\nEast Jazminmouth, AZ 87134', '747-801-9982'),
('20200021', '9532352', '4468953', 'Konopelski Group', '2020', '78094863', 'Prof. Carissa Pfeffer Jr.', 'Male', 'Bandung', '24August2003', '6732 Giovanna Hills\nFeeneyside, MS 34220', 132, 1, 'Grady Schimmel', 'Protective Service Worker', '17095 O\'Connell Branch\nPagacside, LA 81601-9011', '364.931.1190 x69698', 'Meghan Stiedemann', 'Physical Therapist Assistant', '32704 Matteo Views Suite 292\nGloverchester, MT 12533', '1-853-255-6558 x87471'),
('20200022', '95295826', '24365812', 'Williamson-Kautzer', '2018', '55273150', 'Jairo McGlynn III', 'Male', 'Bandung', '21June2002', '27501 Gislason Village\nAliciastad, DC 77680', 133, 1, 'Prof. Demarcus Cruickshank III', 'Loading Machine Operator', '8667 Cremin Ports\nSouth Emmie, WY 60436-1193', '+1.761.526.9754', 'Adrienne Greenfelder', 'Machine Feeder', '451 Kuhic Parkway Suite 055\nTaureanmouth, FL 22795', '+1 (937) 619-3644'),
('20200023', '76003454', '66708617', 'Runolfsdottir Group', '2018', '5349778', 'Janessa Batz', 'Female', 'Cimahi', '28March2001', '79700 Prohaska Creek Apt. 479\nMorissettehaven, CO 52757', 134, 1, 'Ottis Beer', 'Computer Specialist', '26461 Rice Courts\nLake Brandtmouth, NH 80282-4845', '+1.843.608.5958', 'Ms. Alicia Hilpert Sr.', 'Cook', '48339 Haley Manor Apt. 294\nDaphnebury, KY 55818-5798', '786.879.3704 x760'),
('20200024', '85964739', '17601946', 'Schmitt PLC', '2019', '80231843', 'Thurman Klocko', 'Male', 'Bandung', '1April2001', '27493 Bernier Camp\nNew Alfonso, OK 43230-6339', 135, 1, 'Harley Von Jr.', 'Private Household Cook', '113 Luciano Forge\nPort Clyde, FL 22363-9352', '1-450-877-6889', 'Connie Turner', 'Metal-Refining Furnace Operator', '9858 Orn Gateway\nNorth Emelia, SD 10864', '+1-368-289-3258'),
('20200025', '20628713', '84104503', 'Rosenbaum-Hagenes', '2018', '9851208', 'Brielle Towne', 'Male', 'Cimahi', '4June2002', '95766 Schumm Vista\nNorth Jackiestad, AL 23250-8049', 136, 1, 'Jett Lubowitz', 'Glazier', '59415 Korbin Tunnel Apt. 141\nNorth Christy, AK 64728-7336', '957.782.7306 x71265', 'Magdalena D\'Amore III', 'Crossing Guard', '9429 Weimann Fords\nEast Obie, ME 94430-4453', '771-769-2357 x876'),
('20200026', '27672784', '50808642', 'Gaylord, Hammes and Emmerich', '2020', '86168662', 'Alejandrin Carter', 'Male', 'Kab. Bandung', '8December2004', '199 Rose Dam Apt. 513\nLake Jeromeport, CT 22246-2466', 137, 1, 'Norval Lebsack', 'Fashion Designer', '25884 Roob Light\nHansenchester, TX 40801-1514', '979.206.9970', 'Miss Matilda Hegmann DDS', 'Survey Researcher', '9533 Connelly Path\nStarkmouth, NV 44994', '(910) 791-0737 x1912'),
('20200027', '92912983', '68532701', 'Schaefer, Ruecker and Mertz', '2020', '19822323', 'Dorthy Heaney III', 'Male', 'Cimahi', '7February2002', '4193 Golda Orchard\nHellerton, VA 29851-1585', 138, 1, 'Agustin Friesen', 'Production Planning', '444 Bahringer Path\nSouth Marta, SC 66524', '778.836.6454', 'Miss Clarissa Ferry', 'Short Order Cook', '921 Pouros Highway\nLisettefort, IN 56932-9589', '663-807-4816 x35794'),
('20200028', '16641790', '4103042', 'Legros-Huels', '2019', '33889592', 'Kraig Brown DVM', 'Female', 'Cimahi', '21September1999', '1004 Stroman Ridge\nDeckowfort, FL 26762-7167', 139, 1, 'Roman Marks', 'Sawing Machine Setter', '456 Ricky Locks\nElenaport, MS 26262-2228', '+1 (986) 791-3625', 'Lisa Emard III', 'Glass Cutting Machine Operator', '13842 Treutel Coves Apt. 612\nBoyleborough, WA 63793', '889-837-2720 x2209'),
('20200029', '74792156', '78586965', 'Hill-Windler', '2020', '39477190', 'Kiana Rogahn', 'Male', 'Cimahi', '20September1998', '1236 Beatrice Hollow\nMarjolainemouth, MO 48642', 140, 1, 'Arno Lockman MD', 'Automotive Glass Installers', '3946 Leuschke Ferry\nHamillton, IL 32153-4823', '274-675-2486', 'Ariane Fadel', 'Pest Control Worker', '73159 Athena Springs\nAnkundingstad, NY 93106', '548-658-9187 x7516'),
('20200030', '31856651', '37688175', 'Torp-Vandervort', '2019', '90186168', 'Dr. Trey Schmidt III', 'Female', 'Cimahi', '8June2000', '709 Jazmin Isle Suite 241\nPort Ezekiel, VA 51977-9994', 141, 1, 'Dr. Mohammad Cassin', 'Board Of Directors', '12056 Forest Isle Suite 463\nWunschhaven, NC 42076-6800', '293-374-8510 x7535', 'Prof. Kelli Streich I', 'Engineering Technician', '953 Nellie Locks\nLenoreville, MA 22556-5733', '(282) 671-5253 x570'),
('20200031', '81965802', '83689650', 'Kassulke-Sanford', '2018', '35918709', 'Narciso Tremblay', 'Female', 'Bandung', '1August2001', '1346 Kshlerin Road Apt. 271\nSouth Arvilla, KS 82093', 142, 1, 'Steve Cremin', 'Social Scientists', '59374 Jake Dale\nNew Donna, LA 01191-9494', '(216) 807-4966 x41659', 'Heidi Orn', 'Administrative Services Manager', '39202 Wintheiser Pines\nPadbergstad, TX 59935-9032', '584-204-4981 x9608'),
('20200032', '13374683', '46567374', 'Ankunding-Wisoky', '2020', '65796818', 'Miss Lavonne Larkin', 'Male', 'Bandung', '30May2004', '609 Jessie Alley\nNorth Harryton, MT 14791', 143, 1, 'Jan Runolfsson', 'Mechanical Door Repairer', '41553 Wolf Locks Suite 953\nSouth Gus, CO 35699-6806', '+1-572-320-8653', 'Ivah Dicki', 'Plating Operator', '9862 Macejkovic Plains\nEast Katarinashire, AR 18491-7185', '+1.532.297.3965'),
('20200033', '14893811', '59526957', 'Schmeler, Hills and Huel', '2019', '31963482', 'Cletus Schultz II', 'Female', 'Bandung', '5April2003', '72873 Aletha Grove Apt. 016\nBuckridgebury, AR 29619-0349', 144, 1, 'Broderick Flatley', 'Title Examiner', '10619 Otho Loaf Apt. 321\nEugenetown, AL 86494-1090', '743.725.3501 x7173', 'Sarina Hessel', 'RN', '964 Jared Bridge Apt. 902\nSouth Fanny, NC 24296', '1-332-298-2111'),
('20200034', '87496007', '76510863', 'Rowe Inc', '2019', '11830507', 'Miss Alia Becker IV', 'Male', 'Cimahi', '4December1999', '6339 Pierce Court Apt. 945\nJonville, KS 35004-2604', 145, 1, 'Bobby Jones V', 'Occupational Therapist Aide', '4994 Bruce Summit Apt. 580\nNew Fredericside, MT 37864', '+12925681108', 'Clarissa Trantow', 'Ship Engineer', '491 Buckridge Cliff Suite 236\nO\'Connellburgh, FL 66452', '+18159252449'),
('20200035', '61062713', '67345042', 'Ondricka, Hintz and Mertz', '2018', '31517189', 'Hilda Kreiger', 'Female', 'Cimahi', '3April1999', '281 Aric Squares Suite 599\nWest Geovanny, CA 99366-2797', 146, 1, 'Carter Bernhard', 'Civil Drafter', '147 Legros Lights\nNew Adityamouth, NJ 35261', '905.364.9264 x19294', 'Annetta Becker', 'Farmer', '718 Mosciski Trace Apt. 085\nCorineview, TX 40601', '+1.217.440.5375'),
('20200036', '41010007', '73159898', 'Goldner-Powlowski', '2018', '24901988', 'Wendell Ziemann', 'Male', 'Kab. Bandung', '8October2002', '3103 Kali Summit\nSouth Kolbyview, OR 45837-2410', 147, 1, 'Prof. Tobin Gulgowski IV', 'Locomotive Engineer', '39745 Ted Run Suite 418\nSouth Charlottehaven, OR 50881', '(803) 871-9591', 'Annabelle Hammes MD', 'Real Estate Appraiser', '734 Darlene Causeway Apt. 645\nWest Drew, ME 23505-8836', '1-590-904-0665 x39716'),
('20200037', '16452021', '3083975', 'Schinner, Kub and Anderson', '2018', '28321297', 'Jayda Koepp', 'Female', 'Bandung', '18October1998', '970 Brown Inlet\nCassinbury, RI 23168', 148, 1, 'Carey McLaughlin V', 'Funeral Attendant', '438 Rubie Walks\nArmandoland, OH 76778-6935', '712-601-1263', 'Avis Schinner', 'Technical Specialist', '857 Gulgowski Ranch\nWest Delphinechester, GA 15520', '496-654-7286'),
('20200038', '81235743', '75962934', 'Hagenes, Berge and Roberts', '2020', '33983641', 'Mr. Chase Carroll', 'Female', 'Kab. Bandung', '1February1998', '976 Bernard Village\nBlaiseton, NH 77872', 149, 1, 'Lambert Leuschke', 'Insulation Installer', '38541 Crooks Port Suite 520\nWest Luz, CO 89268', '1-751-982-3717 x89695', 'Destini Sawayn', 'Answering Service', '6347 Jace Light\nEast Bernitaview, MD 80185-2511', '1-761-918-9509 x7944'),
('20200039', '62437598', '66138325', 'Tillman, Dickinson and Kutch', '2019', '47536990', 'Eldridge Bayer', 'Male', 'Cimahi', '14August2001', '481 Ondricka Turnpike Suite 332\nCharlesland, FL 43950-8429', 150, 1, 'Floyd McGlynn', 'Artist', '9185 Reinger Mission Apt. 910\nBeahanfort, MT 05262-5334', '607.930.1584 x170', 'Margot Schneider', 'Financial Examiner', '25450 Josianne Cliffs\nWest Danielleborough, UT 80361-1167', '(376) 500-1077'),
('20200040', '16352479', '72320003', 'Kuhic-Doyle', '2019', '19387857', 'Geovanni Hintz V', 'Male', 'Kab. Bandung', '30September2001', '62401 Oral Shores Suite 485\nSpinkahaven, UT 27234-5102', 151, 1, 'Ansel Senger', 'Drywall Installer', '1838 Audreanne Junctions\nPort Carolanne, AL 70402-5138', '(708) 617-7330 x271', 'Serenity Schaden', 'Real Estate Sales Agent', '929 Towne Trace Suite 560\nNew Maryjane, VT 58012', '926-206-3730 x41802'),
('20200041', '25359499', '61546279', 'Stoltenberg and Sons', '2019', '27284127', 'Prof. Foster Mueller Jr.', 'Female', 'Cimahi', '19October2004', '919 Schoen Union Apt. 054\nRathstad, NJ 61901-4001', 152, 1, 'Ramiro Bins', 'Solderer', '534 Melisa Shores Apt. 885\nHartmannfort, SC 17298-4780', '262.731.9502 x5693', 'Bernadine Rodriguez I', 'Plant Scientist', '9590 Karley Ways Apt. 118\nSouth Ova, MA 83005-7862', '1-750-290-9349 x5736'),
('20200042', '69725348', '49879195', 'Haag, Hayes and Skiles', '2018', '67401177', 'Jena Reilly', 'Female', 'Bandung', '2January2001', '4218 Runolfsson Valley\nNew Dewayne, IA 56257', 153, 1, 'Mr. Louie Schumm', 'Material Moving Worker', '2526 Sporer Drive Suite 194\nWest Curt, NY 47905', '1-265-562-6086 x84072', 'Amya Bauch', 'Broadcast News Analyst', '6840 Koss Wall\nDomenicview, NC 51559', '590-264-9715 x55497'),
('20200043', '71348481', '32815625', 'Keebler-Dare', '2019', '90563154', 'Elsa Wunsch DDS', 'Male', 'Cimahi', '14August2004', '153 Daugherty Shores\nLesleymouth, WV 50818-8192', 154, 1, 'Dr. Olaf Klein I', 'Curator', '853 Kihn Road Suite 276\nPort Newtonhaven, ME 04210-5013', '708-678-1029', 'Prof. Eldora Wintheiser IV', 'Dredge Operator', '94382 Jazlyn Stravenue\nHansenmouth, VA 47142-7949', '(824) 535-1826'),
('20200044', '34703956', '73795740', 'Senger Inc', '2018', '42642918', 'Mrs. Eve Homenick IV', 'Female', 'Cimahi', '18January2000', '38981 Kiehn Brooks Suite 345\nLake Deannamouth, MA 60934-2827', 155, 1, 'Isaiah Feest', 'Auditor', '414 Thompson Highway\nAndrewland, VT 19996', '350.355.7621', 'Earnestine Collier III', 'Drilling and Boring Machine Tool Setter', '4096 Dalton Lodge Apt. 340\nSchimmelton, LA 15155-9187', '+1.396.317.8363'),
('20200045', '9314883', '17899711', 'Lueilwitz-Kirlin', '2018', '55257319', 'Travon Dickens', 'Female', 'Bandung', '7December2004', '752 Auer Junction Apt. 117\nLarkinfort, TX 34423-8667', 156, 1, 'Abel Conn', 'Engineering', '292 Merle Skyway\nGarrystad, NV 91203', '+1 (986) 529-9762', 'Prof. Missouri Halvorson Sr.', 'Interpreter OR Translator', '651 Cormier Meadows Suite 650\nWest Itzelfurt, VA 10230', '+1 (985) 565-5004'),
('20200046', '73462517', '31104319', 'Sanford Ltd', '2020', '92081184', 'Oda Heathcote', 'Male', 'Bandung', '28July2001', '61987 Emard Walk Apt. 807\nPeytonport, MD 57684-5282', 157, 1, 'Samir Effertz', 'General Farmworker', '831 Dock Skyway Suite 498\nSchambergerview, HI 58441', '1-314-607-6996 x9085', 'Stefanie Reichert', 'Operations Research Analyst', '99530 Aron Unions\nSouth Missouriville, MA 80131-5256', '1-740-944-4430 x701'),
('20200047', '4720448', '88499855', 'Carroll-Schowalter', '2020', '7195204', 'Dino Walker PhD', 'Male', 'Bandung', '7February1999', '1922 Julio Meadows\nHomenickhaven, WI 76432-0446', 158, 1, 'Devan Terry', 'Operating Engineer', '816 Zulauf Shoal\nNew Deondrestad, TX 83041', '598.392.7934', 'Prof. Isobel Lemke', 'Commercial and Industrial Designer', '94888 Mueller Curve\nNew Carlos, MN 96937', '1-529-599-1542'),
('20200048', '45625587', '23765501', 'Ernser-Smith', '2020', '23732550', 'Dustin Kassulke', 'Male', 'Cimahi', '25June1998', '357 Lynch Walk\nMaritzatown, WA 40431', 159, 1, 'Juvenal Parisian', 'Commercial Diver', '76485 Jared Glen Suite 635\nLake Nichole, NV 42914-8943', '1-861-541-9337', 'Josefina Hermann', 'Plumber', '39121 Joshua Parkway Suite 496\nEast Petraport, MN 78123', '(654) 904-7588 x17149'),
('20200049', '27769587', '6603827', 'Goyette, Heathcote and Abbott', '2018', '65460658', 'Hyman Blanda', 'Female', 'Kab. Bandung', '18October2000', '4207 Gleason Plains Apt. 798\nGudrunhaven, TX 89460', 160, 1, 'Prof. Franco Reilly', 'Psychiatric Technician', '35222 Friesen Canyon\nMosciskibury, KS 05581-0050', '+1 (948) 606-7176', 'Elinor Zieme', 'Pharmacist', '29252 Cartwright Extension\nEmoryfort, OR 78174-3825', '(481) 305-8507 x10076'),
('20200050', '75338629', '94069640', 'Kub-Larkin', '2020', '63789179', 'Darien Labadie Jr.', 'Male', 'Bandung', '26September1998', '5554 Pollich Fields Apt. 066\nSouth Clotildeville, KS 11193-3121', 161, 1, 'Jean Cummerata', 'Designer', '2250 Cummerata Lakes\nNadermouth, TX 63024-8052', '(395) 224-5096 x105', 'Kathleen Cartwright', 'Shuttle Car Operator', '81422 Ondricka Fort\nMcCulloughberg, NJ 94489-2212', '1-625-863-9136'),
('20200051', '84363770', '95581942', 'Altenwerth, Gulgowski and Cremin', '2020', '20848033', 'Carolanne Walsh', 'Female', 'Cimahi', '23July1999', '94134 Cassin Gardens\nLake Gilberto, ME 29519-5875', 162, 1, 'Prof. Javonte Barton', 'Telecommunications Line Installer', '6962 Sven Plaza Suite 225\nNew Callie, PA 90838-2531', '1-318-927-7967 x14961', 'Ms. Vilma Kessler', 'Sailor', '323 Dach Highway Apt. 756\nNorth Vernice, NY 96335-7412', '759-332-5044'),
('20200052', '28331910', '45234559', 'Cruickshank, Hagenes and Gutmann', '2019', '80222703', 'Heath Schamberger', 'Male', 'Cimahi', '14April2003', '91722 Bayer Ports\nEast Allenfurt, NY 30265-9769', 163, 1, 'Aurelio Johns', 'Executive Secretary', '6225 Rhianna Curve\nLake Marta, IN 18776', '(964) 783-8912 x3943', 'Bonnie Ziemann', 'Engineering Teacher', '17021 Cara Pass Suite 754\nLake Kylee, CO 23030-4181', '558-417-6233'),
('20200053', '17040718', '95885104', 'Marquardt Ltd', '2018', '16112334', 'Deondre Ward', 'Male', 'Cimahi', '16June2002', '2439 Nicolas Street Suite 799\nMateomouth, VA 82747', 164, 1, 'Cade Bins II', 'Aircraft Launch Specialist', '78624 Ava Parkways\nNew Jaunita, DC 57544', '+18125945049', 'Ms. Ettie Lubowitz Sr.', 'Forensic Investigator', '93796 Tony Mills\nEast Louie, NV 27780', '+1-449-927-0597'),
('20200054', '37786803', '38189019', 'Bechtelar-Lesch', '2020', '55217389', 'Wilford McLaughlin', 'Male', 'Cimahi', '13January2002', '89098 Reilly Circle Suite 254\nLake Pearlhaven, MT 98573-6753', 165, 1, 'Grady Spinka', 'Logistician', '27315 Nienow Crossing\nJuliannebury, WY 53081-5985', '(663) 844-9677', 'Prof. Vena Lebsack', 'Urban Planner', '6673 Marlee Wall\nNew Carmen, MO 33489', '765-841-1408'),
('20200055', '15453715', '91603742', 'Halvorson Ltd', '2018', '14455862', 'Carmen Schumm', 'Female', 'Cimahi', '23October2003', '432 Tromp Fork Apt. 270\nSouth Nathen, VA 81603-5814', 166, 1, 'Geovanny Koss II', 'Materials Scientist', '76559 Celia Stream\nLake Tyrese, SD 28230-2367', '610-679-0026', 'Tyra Kulas', 'Exhibit Designer', '59924 Breitenberg Mission Apt. 938\nNew Adellport, WA 85116-1807', '+1.215.550.5923'),
('20200056', '33186808', '15126605', 'Kris-Zboncak', '2018', '29944271', 'Jaycee White', 'Female', 'Kab. Bandung', '29March2004', '116 Kirk Islands Suite 195\nKunzebury, LA 99551-4598', 167, 1, 'Jasmin Marquardt DVM', 'Wind Instrument Repairer', '96815 McClure Oval Apt. 009\nGuillermobury, KY 33942-6582', '(483) 249-0649', 'Thea Cassin', 'Agricultural Technician', '421 Diamond Meadows\nLake Daniella, AZ 98156', '1-939-205-3815'),
('20200057', '80441080', '51443518', 'Cormier-Goyette', '2020', '78392403', 'Jayson Nitzsche MD', 'Male', 'Cimahi', '24March1999', '412 Alvah Shoals\nNew Robynborough, ME 18735', 168, 1, 'Howard Hartmann Jr.', 'Retail Salesperson', '92657 Sam Brook Suite 543\nSchultzfurt, AL 15331-3329', '593.266.3918', 'Meredith Keeling DVM', 'Spraying Machine Operator', '63554 Aida Fort\nEast Waltontown, OR 93514', '1-839-284-7980 x057');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_seleksi`
--

CREATE TABLE `hasil_seleksi` (
  `id` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_seleksi`
--

INSERT INTO `hasil_seleksi` (`id`, `user_id`, `score`) VALUES
('20200001', 143, 435.286),
('20200002', 161, 433.857),
('20200003', 138, 433.714),
('20200004', 119, 433.286),
('20200005', 149, 432.429),
('20200006', 126, 431.429),
('20200007', 158, 431.429),
('20200008', 144, 431.286),
('20200009', 121, 430.571),
('20200010', 146, 430.571),
('20200011', 142, 430.143),
('20200012', 153, 430),
('20200013', 124, 429),
('20200014', 154, 428.286),
('20200015', 164, 428.286),
('20200016', 137, 428.143),
('20200017', 131, 428),
('20200018', 16, 428),
('20200019', 132, 427.571),
('20200020', 120, 427.143),
('20200021', 127, 427),
('20200022', 165, 426.571),
('20200023', 162, 425.857),
('20200024', 134, 425.143),
('20200025', 155, 424.857),
('20200026', 141, 424.857),
('20200027', 122, 424.714),
('20200028', 125, 424),
('20200029', 140, 423.857),
('20200030', 163, 423.286);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_raport`
--

CREATE TABLE `nilai_raport` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  `semester_1` int(11) NOT NULL,
  `semester_2` int(11) NOT NULL,
  `semester_3` int(11) NOT NULL,
  `semester_4` int(11) NOT NULL,
  `semester_5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_raport`
--

INSERT INTO `nilai_raport` (`id`, `user_id`, `mata_pelajaran`, `semester_1`, `semester_2`, `semester_3`, `semester_4`, `semester_5`) VALUES
(1, 16, 'agama', 85, 86, 87, 85, 86),
(2, 16, 'ppkn', 84, 87, 88, 88, 85),
(3, 16, 'b_indonesia', 85, 86, 86, 87, 88),
(4, 16, 'matematika', 83, 83, 86, 84, 85),
(5, 16, 'ipa', 85, 85, 85, 85, 86),
(6, 16, 'ips', 80, 86, 85, 87, 88),
(7, 16, 'b_inggris', 85, 85, 85, 88, 87),
(708, 119, 'agama', 94, 93, 77, 83, 81),
(709, 119, 'ppkn', 84, 88, 84, 94, 84),
(710, 119, 'b_indonesia', 90, 75, 83, 86, 89),
(711, 119, 'matematika', 83, 94, 89, 95, 88),
(712, 119, 'ipa', 88, 95, 88, 83, 86),
(713, 119, 'ips', 77, 87, 88, 78, 80),
(714, 119, 'b_inggris', 93, 78, 92, 93, 93),
(715, 120, 'agama', 81, 81, 93, 89, 75),
(716, 120, 'ppkn', 81, 95, 85, 91, 88),
(717, 120, 'b_indonesia', 79, 85, 80, 92, 90),
(718, 120, 'matematika', 83, 93, 88, 81, 95),
(719, 120, 'ipa', 92, 80, 86, 95, 79),
(720, 120, 'ips', 75, 80, 88, 87, 92),
(721, 120, 'b_inggris', 81, 77, 83, 78, 92),
(722, 121, 'agama', 95, 86, 79, 92, 95),
(723, 121, 'ppkn', 86, 91, 77, 90, 87),
(724, 121, 'b_indonesia', 78, 93, 93, 81, 82),
(725, 121, 'matematika', 93, 82, 89, 95, 83),
(726, 121, 'ipa', 94, 77, 89, 91, 85),
(727, 121, 'ips', 86, 76, 94, 89, 84),
(728, 121, 'b_inggris', 81, 82, 75, 88, 76),
(729, 122, 'agama', 86, 94, 93, 91, 86),
(730, 122, 'ppkn', 83, 88, 84, 76, 77),
(731, 122, 'b_indonesia', 95, 82, 87, 80, 90),
(732, 122, 'matematika', 76, 89, 87, 91, 87),
(733, 122, 'ipa', 94, 86, 79, 76, 77),
(734, 122, 'ips', 75, 94, 81, 76, 78),
(735, 122, 'b_inggris', 93, 80, 79, 92, 91),
(736, 123, 'agama', 88, 80, 78, 88, 78),
(737, 123, 'ppkn', 79, 87, 85, 92, 75),
(738, 123, 'b_indonesia', 88, 91, 76, 90, 79),
(739, 123, 'matematika', 81, 75, 92, 81, 76),
(740, 123, 'ipa', 80, 77, 85, 92, 88),
(741, 123, 'ips', 76, 76, 75, 93, 92),
(742, 123, 'b_inggris', 93, 94, 89, 95, 81),
(743, 124, 'agama', 83, 80, 80, 76, 78),
(744, 124, 'ppkn', 91, 86, 94, 91, 93),
(745, 124, 'b_indonesia', 75, 93, 88, 75, 80),
(746, 124, 'matematika', 94, 83, 95, 92, 86),
(747, 124, 'ipa', 76, 89, 88, 92, 86),
(748, 124, 'ips', 91, 79, 88, 95, 86),
(749, 124, 'b_inggris', 84, 78, 81, 86, 91),
(750, 125, 'agama', 81, 91, 86, 82, 89),
(751, 125, 'ppkn', 89, 81, 80, 88, 80),
(752, 125, 'b_indonesia', 92, 76, 86, 91, 81),
(753, 125, 'matematika', 90, 79, 75, 93, 90),
(754, 125, 'ipa', 79, 79, 89, 84, 90),
(755, 125, 'ips', 84, 82, 93, 88, 76),
(756, 125, 'b_inggris', 89, 86, 87, 81, 81),
(757, 126, 'agama', 85, 84, 89, 79, 80),
(758, 126, 'ppkn', 89, 88, 90, 93, 89),
(759, 126, 'b_indonesia', 91, 86, 93, 76, 93),
(760, 126, 'matematika', 90, 83, 88, 95, 90),
(761, 126, 'ipa', 81, 95, 81, 90, 88),
(762, 126, 'ips', 76, 85, 79, 81, 77),
(763, 126, 'b_inggris', 80, 88, 90, 94, 84),
(764, 127, 'agama', 80, 88, 79, 82, 88),
(765, 127, 'ppkn', 91, 76, 88, 90, 87),
(766, 127, 'b_indonesia', 92, 94, 93, 93, 87),
(767, 127, 'matematika', 84, 88, 76, 76, 76),
(768, 127, 'ipa', 78, 94, 89, 86, 93),
(769, 127, 'ips', 80, 79, 82, 88, 86),
(770, 127, 'b_inggris', 84, 88, 88, 80, 86),
(771, 128, 'agama', 85, 80, 88, 86, 89),
(772, 128, 'ppkn', 87, 95, 77, 79, 93),
(773, 128, 'b_indonesia', 76, 78, 78, 90, 94),
(774, 128, 'matematika', 83, 77, 83, 95, 93),
(775, 128, 'ipa', 94, 75, 76, 85, 78),
(776, 128, 'ips', 80, 90, 88, 79, 75),
(777, 128, 'b_inggris', 95, 79, 78, 85, 82),
(778, 129, 'agama', 95, 79, 88, 95, 88),
(779, 129, 'ppkn', 90, 82, 81, 77, 94),
(780, 129, 'b_indonesia', 75, 85, 77, 87, 89),
(781, 129, 'matematika', 82, 80, 83, 91, 92),
(782, 129, 'ipa', 82, 79, 75, 77, 86),
(783, 129, 'ips', 82, 83, 76, 76, 84),
(784, 129, 'b_inggris', 84, 87, 90, 88, 89),
(785, 130, 'agama', 84, 75, 88, 91, 93),
(786, 130, 'ppkn', 89, 89, 78, 94, 89),
(787, 130, 'b_indonesia', 91, 81, 75, 88, 76),
(788, 130, 'matematika', 84, 75, 90, 94, 92),
(789, 130, 'ipa', 75, 79, 80, 84, 79),
(790, 130, 'ips', 77, 84, 93, 93, 75),
(791, 130, 'b_inggris', 83, 88, 90, 75, 89),
(792, 131, 'agama', 83, 75, 93, 85, 95),
(793, 131, 'ppkn', 83, 76, 95, 81, 85),
(794, 131, 'b_indonesia', 81, 93, 84, 76, 93),
(795, 131, 'matematika', 79, 84, 91, 77, 85),
(796, 131, 'ipa', 84, 93, 89, 91, 84),
(797, 131, 'ips', 90, 95, 90, 90, 75),
(798, 131, 'b_inggris', 75, 92, 75, 91, 88),
(799, 132, 'agama', 90, 76, 83, 82, 81),
(800, 132, 'ppkn', 91, 92, 88, 80, 87),
(801, 132, 'b_indonesia', 87, 80, 95, 93, 87),
(802, 132, 'matematika', 80, 94, 75, 83, 82),
(803, 132, 'ipa', 91, 78, 92, 94, 79),
(804, 132, 'ips', 84, 78, 75, 94, 92),
(805, 132, 'b_inggris', 84, 95, 89, 79, 83),
(806, 133, 'agama', 88, 84, 75, 77, 91),
(807, 133, 'ppkn', 87, 82, 87, 93, 91),
(808, 133, 'b_indonesia', 94, 94, 87, 83, 84),
(809, 133, 'matematika', 78, 93, 75, 83, 87),
(810, 133, 'ipa', 85, 87, 79, 77, 89),
(811, 133, 'ips', 80, 84, 87, 83, 79),
(812, 133, 'b_inggris', 77, 84, 83, 81, 75),
(813, 134, 'agama', 83, 94, 77, 77, 81),
(814, 134, 'ppkn', 75, 84, 82, 93, 82),
(815, 134, 'b_indonesia', 88, 92, 90, 92, 86),
(816, 134, 'matematika', 89, 89, 77, 75, 87),
(817, 134, 'ipa', 87, 93, 79, 88, 78),
(818, 134, 'ips', 93, 94, 78, 83, 90),
(819, 134, 'b_inggris', 92, 75, 86, 91, 76),
(820, 135, 'agama', 83, 85, 82, 90, 88),
(821, 135, 'ppkn', 82, 90, 78, 81, 86),
(822, 135, 'b_indonesia', 90, 92, 75, 89, 82),
(823, 135, 'matematika', 79, 89, 82, 85, 89),
(824, 135, 'ipa', 88, 85, 82, 76, 78),
(825, 135, 'ips', 86, 77, 89, 82, 76),
(826, 135, 'b_inggris', 81, 83, 87, 77, 78),
(827, 136, 'agama', 83, 86, 75, 87, 85),
(828, 136, 'ppkn', 88, 91, 88, 81, 79),
(829, 136, 'b_indonesia', 84, 77, 83, 86, 80),
(830, 136, 'matematika', 95, 95, 85, 75, 81),
(831, 136, 'ipa', 83, 93, 81, 85, 82),
(832, 136, 'ips', 95, 76, 77, 86, 79),
(833, 136, 'b_inggris', 94, 90, 86, 84, 82),
(834, 137, 'agama', 84, 91, 75, 91, 83),
(835, 137, 'ppkn', 82, 93, 82, 93, 94),
(836, 137, 'b_indonesia', 93, 85, 77, 89, 87),
(837, 137, 'matematika', 90, 82, 81, 81, 85),
(838, 137, 'ipa', 94, 82, 83, 87, 77),
(839, 137, 'ips', 79, 78, 93, 84, 76),
(840, 137, 'b_inggris', 89, 88, 93, 84, 92),
(841, 138, 'agama', 93, 83, 88, 92, 95),
(842, 138, 'ppkn', 87, 93, 92, 76, 88),
(843, 138, 'b_indonesia', 80, 91, 77, 76, 92),
(844, 138, 'matematika', 95, 94, 92, 89, 93),
(845, 138, 'ipa', 83, 92, 92, 82, 86),
(846, 138, 'ips', 76, 89, 86, 83, 88),
(847, 138, 'b_inggris', 86, 84, 81, 80, 82),
(848, 139, 'agama', 82, 81, 92, 79, 92),
(849, 139, 'ppkn', 81, 89, 90, 76, 75),
(850, 139, 'b_indonesia', 76, 88, 75, 82, 84),
(851, 139, 'matematika', 84, 78, 92, 85, 90),
(852, 139, 'ipa', 88, 94, 90, 77, 75),
(853, 139, 'ips', 92, 87, 88, 75, 76),
(854, 139, 'b_inggris', 91, 83, 77, 75, 86),
(855, 140, 'agama', 94, 95, 76, 75, 88),
(856, 140, 'ppkn', 93, 83, 82, 87, 86),
(857, 140, 'b_indonesia', 89, 78, 90, 90, 93),
(858, 140, 'matematika', 87, 85, 80, 83, 95),
(859, 140, 'ipa', 80, 80, 80, 87, 78),
(860, 140, 'ips', 93, 84, 75, 76, 75),
(861, 140, 'b_inggris', 82, 94, 92, 76, 86),
(862, 141, 'agama', 80, 76, 80, 95, 83),
(863, 141, 'ppkn', 93, 92, 89, 85, 93),
(864, 141, 'b_indonesia', 90, 78, 85, 84, 92),
(865, 141, 'matematika', 79, 90, 79, 95, 75),
(866, 141, 'ipa', 93, 93, 84, 79, 84),
(867, 141, 'ips', 79, 81, 77, 79, 75),
(868, 141, 'b_inggris', 92, 75, 91, 84, 95),
(869, 142, 'agama', 80, 91, 81, 82, 92),
(870, 142, 'ppkn', 92, 79, 85, 79, 89),
(871, 142, 'b_indonesia', 87, 75, 87, 92, 93),
(872, 142, 'matematika', 88, 87, 84, 82, 88),
(873, 142, 'ipa', 93, 79, 93, 90, 92),
(874, 142, 'ips', 86, 90, 84, 84, 88),
(875, 142, 'b_inggris', 80, 94, 78, 80, 87),
(876, 143, 'agama', 85, 83, 94, 83, 83),
(877, 143, 'ppkn', 93, 95, 93, 78, 85),
(878, 143, 'b_indonesia', 95, 91, 78, 87, 95),
(879, 143, 'matematika', 79, 77, 89, 93, 88),
(880, 143, 'ipa', 84, 95, 92, 92, 77),
(881, 143, 'ips', 81, 92, 91, 86, 88),
(882, 143, 'b_inggris', 90, 94, 79, 82, 80),
(883, 144, 'agama', 92, 90, 85, 95, 95),
(884, 144, 'ppkn', 89, 89, 88, 83, 92),
(885, 144, 'b_indonesia', 75, 76, 91, 89, 80),
(886, 144, 'matematika', 94, 95, 76, 91, 77),
(887, 144, 'ipa', 83, 95, 81, 79, 79),
(888, 144, 'ips', 86, 76, 75, 94, 92),
(889, 144, 'b_inggris', 82, 83, 94, 85, 93),
(890, 145, 'agama', 94, 83, 80, 86, 75),
(891, 145, 'ppkn', 79, 75, 78, 90, 94),
(892, 145, 'b_indonesia', 86, 94, 89, 87, 91),
(893, 145, 'matematika', 92, 88, 79, 94, 78),
(894, 145, 'ipa', 76, 82, 80, 77, 94),
(895, 145, 'ips', 82, 79, 78, 83, 89),
(896, 145, 'b_inggris', 81, 88, 81, 89, 90),
(897, 146, 'agama', 77, 87, 93, 93, 95),
(898, 146, 'ppkn', 83, 85, 86, 82, 95),
(899, 146, 'b_indonesia', 75, 88, 80, 93, 93),
(900, 146, 'matematika', 91, 76, 78, 95, 84),
(901, 146, 'ipa', 91, 86, 83, 93, 94),
(902, 146, 'ips', 82, 83, 81, 81, 91),
(903, 146, 'b_inggris', 85, 78, 89, 86, 82),
(904, 147, 'agama', 83, 87, 91, 75, 81),
(905, 147, 'ppkn', 84, 76, 77, 89, 87),
(906, 147, 'b_indonesia', 95, 80, 83, 84, 80),
(907, 147, 'matematika', 78, 85, 83, 79, 80),
(908, 147, 'ipa', 90, 85, 79, 81, 82),
(909, 147, 'ips', 94, 85, 94, 80, 81),
(910, 147, 'b_inggris', 84, 80, 86, 78, 78),
(911, 148, 'agama', 75, 85, 90, 75, 81),
(912, 148, 'ppkn', 93, 76, 85, 85, 81),
(913, 148, 'b_indonesia', 85, 89, 85, 89, 77),
(914, 148, 'matematika', 84, 92, 92, 83, 94),
(915, 148, 'ipa', 83, 82, 78, 90, 77),
(916, 148, 'ips', 76, 77, 86, 95, 95),
(917, 148, 'b_inggris', 83, 80, 83, 86, 77),
(918, 149, 'agama', 79, 79, 92, 88, 95),
(919, 149, 'ppkn', 92, 90, 81, 84, 82),
(920, 149, 'b_indonesia', 84, 86, 91, 78, 94),
(921, 149, 'matematika', 93, 85, 80, 85, 84),
(922, 149, 'ipa', 92, 86, 89, 94, 81),
(923, 149, 'ips', 95, 89, 82, 91, 93),
(924, 149, 'b_inggris', 80, 75, 93, 82, 83),
(925, 150, 'agama', 92, 78, 91, 92, 75),
(926, 150, 'ppkn', 88, 81, 87, 75, 95),
(927, 150, 'b_indonesia', 95, 80, 93, 92, 93),
(928, 150, 'matematika', 79, 86, 79, 82, 87),
(929, 150, 'ipa', 83, 81, 77, 89, 91),
(930, 150, 'ips', 79, 75, 88, 75, 78),
(931, 150, 'b_inggris', 80, 84, 79, 77, 84),
(932, 151, 'agama', 81, 82, 75, 75, 78),
(933, 151, 'ppkn', 88, 94, 93, 89, 93),
(934, 151, 'b_indonesia', 80, 82, 78, 85, 87),
(935, 151, 'matematika', 80, 87, 89, 81, 78),
(936, 151, 'ipa', 82, 95, 81, 75, 93),
(937, 151, 'ips', 83, 78, 80, 94, 79),
(938, 151, 'b_inggris', 77, 88, 85, 78, 90),
(939, 152, 'agama', 78, 80, 89, 94, 91),
(940, 152, 'ppkn', 83, 89, 90, 78, 83),
(941, 152, 'b_indonesia', 87, 91, 90, 79, 87),
(942, 152, 'matematika', 85, 85, 81, 85, 89),
(943, 152, 'ipa', 76, 79, 93, 87, 82),
(944, 152, 'ips', 87, 81, 81, 88, 86),
(945, 152, 'b_inggris', 79, 84, 84, 86, 76),
(946, 153, 'agama', 80, 93, 82, 87, 82),
(947, 153, 'ppkn', 78, 92, 84, 89, 80),
(948, 153, 'b_indonesia', 79, 88, 79, 94, 82),
(949, 153, 'matematika', 87, 92, 94, 77, 94),
(950, 153, 'ipa', 77, 84, 90, 92, 91),
(951, 153, 'ips', 80, 93, 77, 84, 94),
(952, 153, 'b_inggris', 82, 93, 91, 92, 77),
(953, 154, 'agama', 91, 76, 83, 93, 75),
(954, 154, 'ppkn', 83, 91, 94, 81, 92),
(955, 154, 'b_indonesia', 95, 84, 77, 92, 89),
(956, 154, 'matematika', 76, 83, 91, 93, 92),
(957, 154, 'ipa', 81, 79, 90, 88, 78),
(958, 154, 'ips', 91, 81, 94, 81, 92),
(959, 154, 'b_inggris', 76, 82, 85, 78, 91),
(960, 155, 'agama', 88, 87, 82, 91, 81),
(961, 155, 'ppkn', 82, 77, 75, 87, 84),
(962, 155, 'b_indonesia', 83, 78, 92, 90, 86),
(963, 155, 'matematika', 76, 82, 75, 89, 84),
(964, 155, 'ipa', 92, 82, 83, 80, 91),
(965, 155, 'ips', 86, 92, 76, 87, 87),
(966, 155, 'b_inggris', 93, 88, 94, 95, 79),
(967, 156, 'agama', 83, 95, 94, 88, 75),
(968, 156, 'ppkn', 88, 89, 76, 92, 82),
(969, 156, 'b_indonesia', 85, 86, 94, 83, 82),
(970, 156, 'matematika', 76, 83, 80, 86, 85),
(971, 156, 'ipa', 76, 78, 87, 87, 87),
(972, 156, 'ips', 95, 92, 75, 76, 86),
(973, 156, 'b_inggris', 79, 86, 75, 89, 77),
(974, 157, 'agama', 76, 76, 82, 80, 79),
(975, 157, 'ppkn', 87, 94, 90, 81, 95),
(976, 157, 'b_indonesia', 84, 79, 93, 75, 90),
(977, 157, 'matematika', 76, 82, 95, 93, 90),
(978, 157, 'ipa', 92, 78, 79, 76, 88),
(979, 157, 'ips', 82, 87, 77, 91, 92),
(980, 157, 'b_inggris', 75, 82, 95, 77, 76),
(981, 158, 'agama', 88, 82, 83, 80, 83),
(982, 158, 'ppkn', 89, 94, 95, 78, 91),
(983, 158, 'b_indonesia', 84, 83, 95, 87, 85),
(984, 158, 'matematika', 90, 83, 88, 87, 90),
(985, 158, 'ipa', 87, 75, 89, 81, 92),
(986, 158, 'ips', 85, 92, 75, 93, 94),
(987, 158, 'b_inggris', 78, 89, 78, 88, 89),
(988, 159, 'agama', 75, 92, 81, 78, 83),
(989, 159, 'ppkn', 91, 84, 92, 88, 79),
(990, 159, 'b_indonesia', 79, 80, 78, 84, 94),
(991, 159, 'matematika', 76, 86, 78, 90, 80),
(992, 159, 'ipa', 80, 92, 93, 88, 86),
(993, 159, 'ips', 95, 89, 86, 82, 85),
(994, 159, 'b_inggris', 85, 84, 77, 77, 78),
(995, 160, 'agama', 78, 76, 79, 94, 80),
(996, 160, 'ppkn', 76, 87, 84, 81, 75),
(997, 160, 'b_indonesia', 77, 79, 79, 83, 82),
(998, 160, 'matematika', 85, 90, 83, 86, 91),
(999, 160, 'ipa', 79, 78, 88, 86, 95),
(1000, 160, 'ips', 90, 84, 92, 79, 92),
(1001, 160, 'b_inggris', 94, 84, 89, 87, 83),
(1002, 161, 'agama', 81, 90, 85, 84, 80),
(1003, 161, 'ppkn', 80, 79, 88, 83, 95),
(1004, 161, 'b_indonesia', 95, 89, 85, 92, 91),
(1005, 161, 'matematika', 76, 91, 79, 94, 93),
(1006, 161, 'ipa', 86, 84, 93, 84, 81),
(1007, 161, 'ips', 95, 93, 86, 90, 76),
(1008, 161, 'b_inggris', 89, 86, 91, 87, 86),
(1009, 162, 'agama', 95, 78, 84, 75, 90),
(1010, 162, 'ppkn', 95, 84, 92, 93, 80),
(1011, 162, 'b_indonesia', 88, 75, 90, 80, 94),
(1012, 162, 'matematika', 81, 84, 83, 89, 87),
(1013, 162, 'ipa', 77, 79, 87, 76, 86),
(1014, 162, 'ips', 77, 88, 88, 82, 89),
(1015, 162, 'b_inggris', 94, 79, 84, 83, 95),
(1016, 163, 'agama', 76, 75, 91, 86, 90),
(1017, 163, 'ppkn', 90, 95, 80, 77, 86),
(1018, 163, 'b_indonesia', 79, 76, 90, 83, 92),
(1019, 163, 'matematika', 77, 87, 77, 81, 94),
(1020, 163, 'ipa', 90, 90, 80, 75, 76),
(1021, 163, 'ips', 92, 88, 80, 95, 91),
(1022, 163, 'b_inggris', 78, 85, 90, 90, 81),
(1023, 164, 'agama', 91, 95, 90, 77, 75),
(1024, 164, 'ppkn', 83, 89, 87, 82, 84),
(1025, 164, 'b_indonesia', 95, 78, 82, 82, 94),
(1026, 164, 'matematika', 77, 90, 93, 77, 81),
(1027, 164, 'ipa', 75, 91, 78, 86, 89),
(1028, 164, 'ips', 78, 80, 76, 84, 95),
(1029, 164, 'b_inggris', 92, 90, 95, 93, 94),
(1030, 165, 'agama', 87, 87, 78, 93, 80),
(1031, 165, 'ppkn', 77, 84, 95, 81, 94),
(1032, 165, 'b_indonesia', 90, 86, 86, 83, 75),
(1033, 165, 'matematika', 87, 90, 80, 89, 89),
(1034, 165, 'ipa', 78, 76, 80, 81, 79),
(1035, 165, 'ips', 95, 83, 91, 78, 94),
(1036, 165, 'b_inggris', 91, 88, 91, 80, 90),
(1037, 166, 'agama', 92, 78, 90, 88, 91),
(1038, 166, 'ppkn', 77, 77, 75, 81, 89),
(1039, 166, 'b_indonesia', 84, 89, 85, 82, 80),
(1040, 166, 'matematika', 78, 80, 85, 86, 95),
(1041, 166, 'ipa', 91, 75, 77, 77, 93),
(1042, 166, 'ips', 88, 91, 93, 81, 89),
(1043, 166, 'b_inggris', 94, 79, 83, 75, 92),
(1044, 167, 'agama', 75, 79, 76, 83, 92),
(1045, 167, 'ppkn', 85, 94, 85, 80, 81),
(1046, 167, 'b_indonesia', 85, 86, 87, 91, 79),
(1047, 167, 'matematika', 92, 88, 84, 90, 81),
(1048, 167, 'ipa', 79, 88, 87, 81, 75),
(1049, 167, 'ips', 92, 76, 89, 77, 84),
(1050, 167, 'b_inggris', 76, 86, 93, 81, 92),
(1051, 168, 'agama', 75, 88, 79, 82, 93),
(1052, 168, 'ppkn', 88, 88, 75, 76, 87),
(1053, 168, 'b_indonesia', 89, 76, 82, 76, 86),
(1054, 168, 'matematika', 75, 78, 88, 92, 82),
(1055, 168, 'ipa', 86, 80, 84, 76, 77),
(1056, 168, 'ips', 94, 88, 78, 81, 93),
(1057, 168, 'b_inggris', 83, 84, 92, 81, 88);

-- --------------------------------------------------------

--
-- Table structure for table `scan_raport`
--

CREATE TABLE `scan_raport` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scan_raport`
--

INSERT INTO `scan_raport` (`id`, `filename`, `user_id`) VALUES
(4, '8-DFD.pdf', 16),
(105, 'document.pdf', 119),
(106, 'document.pdf', 120),
(107, 'document.pdf', 121),
(108, 'document.pdf', 122),
(109, 'document.pdf', 123),
(110, 'document.pdf', 124),
(111, 'document.pdf', 125),
(112, 'document.pdf', 126),
(113, 'document.pdf', 127),
(114, 'document.pdf', 128),
(115, 'document.pdf', 129),
(116, 'document.pdf', 130),
(117, 'document.pdf', 131),
(118, 'document.pdf', 132),
(119, 'document.pdf', 133),
(120, 'document.pdf', 134),
(121, 'document.pdf', 135),
(122, 'document.pdf', 136),
(123, 'document.pdf', 137),
(124, 'document.pdf', 138),
(125, 'document.pdf', 139),
(126, 'document.pdf', 140),
(127, 'document.pdf', 141),
(128, 'document.pdf', 142),
(129, 'document.pdf', 143),
(130, 'document.pdf', 144),
(131, 'document.pdf', 145),
(132, 'document.pdf', 146),
(133, 'document.pdf', 147),
(134, 'document.pdf', 148),
(135, 'document.pdf', 149),
(136, 'document.pdf', 150),
(137, 'document.pdf', 151),
(138, 'document.pdf', 152),
(139, 'document.pdf', 153),
(140, 'document.pdf', 154),
(141, 'document.pdf', 155),
(142, 'document.pdf', 156),
(143, 'document.pdf', 157),
(144, 'document.pdf', 158),
(145, 'document.pdf', 159),
(146, 'document.pdf', 160),
(147, 'document.pdf', 161),
(148, 'document.pdf', 162),
(149, 'document.pdf', 163),
(150, 'document.pdf', 164),
(151, 'document.pdf', 165),
(152, 'document.pdf', 166),
(153, 'document.pdf', 167),
(154, 'document.pdf', 168);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pendaftar',
  `date_created` int(11) NOT NULL,
  `score` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `status`, `date_created`, `score`) VALUES
(11, 'PPDB SMAN', 'ppdbsma@sch.id', 'default.jpg', '$2y$10$u/UVL9eYryp71aBQ/aYcUu/vRQG0lN/Op2y1dkZv9kq8b2JZKbu/i', 1, 1, 'terdaftar', 1595730082, 0),
(12, 'Amelia Cintya Dewi', 'amel@gmail.com', 'default.jpg', '$2y$10$ZvjET48wXLmfyFLE6rUFuuaIi3OoRCQorW94BlwO23ufJqonCHE4m', 2, 1, 'terdaftar', 1595730092, 0),
(13, 'udin', 'udin@gmail.com', 'default.jpg', '$2y$10$XWD0eq186UfFcE6bUzG9oeW02PdTEaBOHIgbqETx7ZEg2jnGDU73K', 1, 1, 'terdaftar', 1596036920, 0),
(16, 'user', 'user@gmail.com', '73.jpg', '$2y$10$XvNqvKixVABmrK2r/O5u8.uOMjBxE5vcq5n12kmYNwhVS2GP1wIhO', 2, 1, 'terdaftar', 1596068864, 428),
(119, 'Mr. Durward Monahan Sr.', 'jennyfer.thiel@kemmer.net', 'default.jpg', '$2y$10$91Sw7GPxwNeonwR/pbbeXeSaYevHpPdSuZx6C9jbLIEkLWY9AimBi', 2, 1, 'terdaftar', 1596162559, 433.286),
(120, 'Hester Miller', 'dicki.retha@ernser.org', 'default.jpg', '$2y$10$hgn3fkDtGhAUHR.z4QRgwek2URvWjEn/XNO3MGrRIEQXtt.Aholvu', 2, 1, 'terdaftar', 1596162560, 427.143),
(121, 'Arno O\'Conner', 'wbeahan@zieme.info', 'default.jpg', '$2y$10$UoReLR6W20aPe/gatdfcsODzIx.4zhNKLiNOdAJUvhy4BiZUkpB2i', 2, 1, 'terdaftar', 1596162560, 430.571),
(122, 'Prudence Kris', 'oshanahan@medhurst.com', 'default.jpg', '$2y$10$3ZRsjsZ/6yZx3PV4eyN0U.3mXPU4HLtvm60ToVdpsbITnMtyo2S0u', 2, 1, 'terdaftar', 1596162560, 424.714),
(123, 'Damian Keebler', 'annabell.flatley@halvorson.com', 'default.jpg', '$2y$10$GrCYxofPFiXldfrGJSS5COVs2TqvS09wvDL3iLONR7oPqS.m8.W6i', 2, 1, 'terdaftar', 1596162560, 420.714),
(124, 'Carolyne White', 'wjohnston@hotmail.com', 'default.jpg', '$2y$10$cg3hc6CGmc0hjRfNGrv8Num.wST2yBaDPi.tBdhQq7IxHKMI2UJrK', 2, 1, 'terdaftar', 1596162560, 429),
(125, 'Alexane O\'Connell', 'schultz.wilhelmine@schinner.com', 'default.jpg', '$2y$10$RGrPdjOBgv4rY7ar.Rq78.wcQF4dHgawfMUb6v3gekvy6N2L58bgm', 2, 1, 'terdaftar', 1596162560, 424),
(126, 'Eileen Halvorson', 'retha.hartmann@sporer.biz', 'default.jpg', '$2y$10$E8tnxFQiLW515gnuANe3jeeSB3XyMzL8th73HanJPQD5dI5xPSgMe', 2, 1, 'terdaftar', 1596162560, 431.429),
(127, 'Johanna Murray Jr.', 'cedrick.jakubowski@gmail.com', 'default.jpg', '$2y$10$X6/YbXAQ2djXufK4XeIBG.3cr1NGIYugXI0tuDcSVyE.ytGcnGWYO', 2, 1, 'terdaftar', 1596162560, 427),
(128, 'Eunice Altenwerth', 'magali85@krajcik.com', 'default.jpg', '$2y$10$c3MT3QTWZpppvoiiX1koFecJe7FhisjicxB8LeRh7pkd8VJx8mKHC', 2, 1, 'terdaftar', 1596162560, 420.714),
(129, 'Stewart Schumm', 'lindgren.wilmer@yahoo.com', 'default.jpg', '$2y$10$7mMRbqh2fxRRZRYE2WwzhuIN32YnaJmseLIO2H65PP3vnzlRZe0Ya', 2, 1, 'terdaftar', 1596162560, 421.143),
(130, 'Aryanna Mueller', 'abarton@reynolds.info', 'default.jpg', '$2y$10$vYINhckVIveS.KyNpdI82.L6Wn//Txo0M2C4j/o/RAPXwRu5.McC.', 2, 1, 'terdaftar', 1596162561, 422.857),
(131, 'Miss Malvina Bins DVM', 'lharvey@hotmail.com', 'default.jpg', '$2y$10$RO1UiJIdWzC0OFTTQVMqleTk.opOOCLQwHiH8WWhGfnx/vCb1FOGW', 2, 1, 'terdaftar', 1596162561, 428),
(132, 'Emilie Schamberger DDS', 'elian05@schneider.com', 'default.jpg', '$2y$10$7x6cie3K0Bq2xYXa5FBSm.04sNFu3mvOPIwTNzzskGDVfjMxOP2vu', 2, 1, 'terdaftar', 1596162561, 427.571),
(133, 'Buford Orn II', 'taylor.quitzon@hotmail.com', 'default.jpg', '$2y$10$dELDaurJPhT3xOY8B0Homul60DP3V08gxQPuHWjPtcBvmQTQBX.42', 2, 1, 'terdaftar', 1596162561, 420.429),
(134, 'Mckenzie Wisozk', 'reynolds.lucy@yahoo.com', 'default.jpg', '$2y$10$Uiwts0N2pWe2psWM40v3jeN.Hlr0xfjXV3OcpSwod.FiWnZlrUY5i', 2, 1, 'terdaftar', 1596162561, 425.143),
(135, 'Ms. Angelita Conn III', 'felicia.runolfsdottir@beer.com', 'default.jpg', '$2y$10$2ECxQnxRqC6tUTnOPO.V1usTbXRPoev2b/x48WR5lbD.g.R/YoMFK', 2, 1, 'terdaftar', 1596162561, 417.429),
(136, 'Myrtie Ferry', 'zaria29@orn.com', 'default.jpg', '$2y$10$F5rmFOjlwN4UD3hRBwtfP.kmjmlZfs50vluSnuktZ4WvnOdNz2vSS', 2, 1, 'terdaftar', 1596162561, 422.429),
(137, 'Delfina Kreiger', 'jimmy.cole@gmail.com', 'default.jpg', '$2y$10$7bzkgT81.xyWuAk//68QEODl1Dh64A.aSm.FpyVSJcjJq4vjaqpEu', 2, 1, 'terdaftar', 1596162561, 428.143),
(138, 'Jerry Runte', 'rjerde@hane.info', 'default.jpg', '$2y$10$hmKKL.BzV7G21Z820Sp66OEk/.yjjGYoJKY.nZPiVV9du9EC5xt6.', 2, 1, 'terdaftar', 1596162561, 433.714),
(139, 'Maryjane Yost', 'tromp.tanner@stamm.com', 'default.jpg', '$2y$10$QcMzZ..ix8nwYTnHF9ECaeDR/UkXUEQZ1vMvJfk2KOwB70o6TWGRq', 2, 1, 'terdaftar', 1596162561, 417.857),
(140, 'Abagail Gislason', 'abelardo.hammes@macejkovic.com', 'default.jpg', '$2y$10$ckj5yfWFj2EyhRVx33pbk.dImwZj5KIdR/mDyJ8E8B4EpUJKvsyLy', 2, 1, 'terdaftar', 1596162561, 423.857),
(141, 'Elsa Padberg I', 'sporer.katharina@schulist.info', 'default.jpg', '$2y$10$eclYA.OHisjJvPE417YkUeDFrSxeaOECQg2pfg7h53gKEa8JgMPCi', 2, 1, 'terdaftar', 1596162562, 424.857),
(142, 'Mrs. Wilma Gerhold', 'stacy.mckenzie@yahoo.com', 'default.jpg', '$2y$10$mIWQG1nYC.Q8tDQJEmtZAuqfPKW6tj55yT2Z/zWU/.Hcag.lU9X6q', 2, 1, 'terdaftar', 1596162562, 430.143),
(143, 'Mittie Schneider', 'wilkinson.clarabelle@heller.com', 'default.jpg', '$2y$10$RBouVFexBb.WuUVVSUpnfuet3qbHZ3sXgJRbTMLFLhQOUDOoTpaku', 2, 1, 'terdaftar', 1596162562, 435.286),
(144, 'Rebeka Wisoky', 'pfeffer.neha@hamill.net', 'default.jpg', '$2y$10$k7q0XlDz.IO9ErPd7IlUSeVgRKMupOpVRWLpydtmZMO4zVIo0nkcy', 2, 1, 'terdaftar', 1596162562, 431.286),
(145, 'Justen Mosciski IV', 'micheal84@yahoo.com', 'default.jpg', '$2y$10$q1ZDGcsnCki.QHpnzAGH7OSmBBTssAVRPzNaTGlE.52j3as6jN62e', 2, 1, 'terdaftar', 1596162562, 423),
(146, 'Trey Bergstrom', 'vflatley@gmail.com', 'default.jpg', '$2y$10$dSvpYorXPLslT3zlTJCF.ujX3pL7/8j59tfZIsFrC9G4V.DMVrD8G', 2, 1, 'terdaftar', 1596162562, 430.571),
(147, 'Ms. Shanny Rippin II', 'margarita.wintheiser@gmail.com', 'default.jpg', '$2y$10$8nHSFjDOCb3yjNuhjJ06je5UUgvZ5oUI6.mdLA1QhIZhUKq3pRnHa', 2, 1, 'terdaftar', 1596162562, 416.286),
(148, 'Stan Howe', 'bvon@gmail.com', 'default.jpg', '$2y$10$AFHU5rWaktYk64VpGiHM9OEF2ZSezYNOStsowi38ELavbApYRsL6G', 2, 1, 'terdaftar', 1596162562, 420.571),
(149, 'Mary Monahan DDS', 'cvolkman@marvin.com', 'default.jpg', '$2y$10$q73dhd2bJCqezKtDPR2BOeU2ukx6y.CmbpZCopyjewOHD0y20mPHe', 2, 1, 'terdaftar', 1596162562, 432.429),
(150, 'Stanley Wilkinson', 'kessler.rosemary@schmeler.info', 'default.jpg', '$2y$10$29Jo5H0hNhdVk11VSkcL1epzs5Ij2/Zvz4K/x5KC5YXNNE7evT97i', 2, 1, 'terdaftar', 1596162562, 420),
(151, 'Filomena Deckow', 'deshawn19@labadie.org', 'default.jpg', '$2y$10$Y39..hc7XOAuHy69iPX/oufatRfYC0OaFqRCUqRzbvY7U6MyO6pYe', 2, 1, 'terdaftar', 1596162563, 419),
(152, 'Adam King', 'watsica.ricky@ziemann.com', 'default.jpg', '$2y$10$gGQpgIf7cZqg9uiuTQ2imuJ5KgkHyYbBiQVhdl3ToHM63.uIdnYKO', 2, 1, 'terdaftar', 1596162563, 423.286),
(153, 'Alexa Williamson', 'king.vivian@gmail.com', 'default.jpg', '$2y$10$PWk7a9bPAb2Vr9Y8Q.YW..bGf.xNnHFJipS8zdwxqr.qwBv69kPzi', 2, 1, 'terdaftar', 1596162563, 430),
(154, 'Maritza Kerluke', 'awalter@howe.com', 'default.jpg', '$2y$10$rNsVdzh017cuIzujoVzjNO7yJJkTKOHGQAU76ntzY18FCyHt7VpGq', 2, 1, 'terdaftar', 1596162563, 428.286),
(155, 'Kamille Wilderman PhD', 'pwindler@russel.com', 'default.jpg', '$2y$10$csy9Hin.WrqBt6lbkNfwpuKZbo/IShlDwliff8jEAonj5W9r1UCkC', 2, 1, 'terdaftar', 1596162564, 424.857),
(156, 'Raleigh Moen', 'yvette.parisian@hotmail.com', 'default.jpg', '$2y$10$IGe6Qvl9srLSZp0BGgkHf.hMEmPi2P9SFo2/Ob2OUcdONvdfm7Hwy', 2, 1, 'terdaftar', 1596162564, 421),
(157, 'Adonis Lockman', 'scrooks@kuhic.com', 'default.jpg', '$2y$10$eOx9csBn5Ey.HkP7I0HpIOCalWsfyC9C7Nsf65l2DgTU5PRpZQmAe', 2, 1, 'terdaftar', 1596162564, 420.571),
(158, 'Dr. Edwardo Cummerata PhD', 'kcole@bartell.com', 'default.jpg', '$2y$10$YRmVCix/ZbVdYfVbtNeFXuHULSwFq9cn6B6VnbrEFRsG6dlfh4JPK', 2, 1, 'terdaftar', 1596162564, 431.429),
(159, 'Jeffry Wilkinson', 'dave.hoeger@schulist.com', 'default.jpg', '$2y$10$gc29IBlQsVnUR4ojjImzku3Wa7HiddlPTXvERRBkiOwpTVilymm82', 2, 1, 'terdaftar', 1596162564, 420.714),
(160, 'Miss Christine Pfannerstill Sr.', 'hegmann.hugh@yahoo.com', 'default.jpg', '$2y$10$CjXx0FBXFcixAOfD.bzGhOMgmSrfIC3vk8Ild7rbksZ7hY56P03OW', 2, 1, 'terdaftar', 1596162564, 420.714),
(161, 'Nicholas Nitzsche', 'hayden.emard@hotmail.com', 'default.jpg', '$2y$10$kZQ87NwrEEQO./vIBAYffOkWapUUqu84dtpYhWTuOvaowduD9NZDu', 2, 1, 'terdaftar', 1596162565, 433.857),
(162, 'Lou Bogan', 'emmerich.natalia@batz.com', 'default.jpg', '$2y$10$2wXj8Fg0VwkG.scEBcKqb.bVqTQVDimZmIH/FXuclPEK59onLNzmK', 2, 1, 'terdaftar', 1596162565, 425.857),
(163, 'Fermin Champlin', 'graham.bernice@kihn.biz', 'default.jpg', '$2y$10$yxTrdcnUrkd7F1dyBPttjOm7rTL58oxQf24y/NUioPn4W9rLkmIym', 2, 1, 'terdaftar', 1596162565, 423.286),
(164, 'Jermain Kreiger Sr.', 'wmckenzie@kunde.org', 'default.jpg', '$2y$10$nP7q2TKVnkVvIW4UJpvPIu8LgrtIhoZuEAZhfsJlg6m1yRE6DywGi', 2, 1, 'terdaftar', 1596162565, 428.286),
(165, 'Selina Stamm', 'shirley82@hamill.com', 'default.jpg', '$2y$10$RjhoEAG8EdL9h8hNldOLFeF5SFLMw7iw28sAnbP9wPR/uCU9FoRVm', 2, 1, 'terdaftar', 1596162565, 426.571),
(166, 'Dr. Ken Koepp', 'lacy16@nader.com', 'default.jpg', '$2y$10$K6J8jVXEYjYM.gH8wLbn6eJX8iOIeJfE9xKbBwmLYrY.O8Eaxx4Gu', 2, 1, 'terdaftar', 1596162565, 422.857),
(167, 'Santos Gleason', 'emma15@rempel.com', 'default.jpg', '$2y$10$9AASgQss01UIxZXRj7mcnOmHwMK8x3UFj9VZ1qRQ//0pcmA8m6IHe', 2, 1, 'terdaftar', 1596162565, 421.286),
(168, 'Dakota Lakin', 'russel.weissnat@schumm.com', 'default.jpg', '$2y$10$OpVY0OBXPAUTZE6RBzo9guPbWUwiukUZfMetVFucaFZtRQGL9ZWza', 2, 1, 'terdaftar', 1596162565, 417.143);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(7, 1, 3),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(15, 2, 10),
(16, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'menu'),
(10, 'Pendaftaran'),
(11, 'Siswa'),
(13, 'Seleksi');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt\r\n', 1),
(2, 2, 'My profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-cog', 1),
(5, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-cog', 1),
(7, 1, 'role', 'admin/role', 'fas fa-fw fa-users', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(13, 11, 'Daftar Siswa', 'siswa', 'fas fa-fw fa-users', 1),
(14, 10, 'Biodata', 'pendaftaran', 'fas fa-fw fa-file-alt', 1),
(15, 10, 'Isi biodata', 'pendaftaran/biodata', 'far fa-fw fa-edit', 1),
(16, 10, 'Raport', 'pendaftaran/raport', 'fab fa-fw fa-wpforms', 1),
(18, 13, 'Data Pendaftar', 'seleksi', 'fab fa-fw fa-wpforms', 1),
(19, 13, 'Hasil Seleksi', 'seleksi/hasilseleksi', 'fab fa-fw fa-wpforms', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`nopen`);

--
-- Indexes for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scan_raport`
--
ALTER TABLE `scan_raport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1058;

--
-- AUTO_INCREMENT for table `scan_raport`
--
ALTER TABLE `scan_raport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
