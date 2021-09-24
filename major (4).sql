-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 10:14 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `ap` int(200) NOT NULL,
  `add1` varchar(200) NOT NULL,
  `add2` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `name`, `ap`, `add1`, `add2`, `city`, `zipcode`, `province`, `email`) VALUES
(6, '1st', 6, '9556 rue Jean MILOT (apt,6)', '', 'lasalle', 'h8r1x7', 'QC', 'sahill@gmail.com'),
(7, 'Address 1', 2, '434 rue abc', '', 'montreal', 'hr5rt5', 'QC', 'abcd@gmail.com'),
(10, 'Daljit Kaur', 4, '4650 Avenue Dupuis(apt,6)', '', 'Côte-Sainte-Catherine', 'H3W1N1', 'QC', 'abcd@gmail.com'),
(11, 'new flat', 4, 'qwerty', '', 'montreal', 'H3W1x2', 'NW', 'abcd@gmail.com'),
(12, 'Lucas', 5, 'xyz', '', 'Montreal', 'H3W234', 'AB', 'lucas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `babies`
--

CREATE TABLE `babies` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `detail` text NOT NULL,
  `pic` varchar(200) NOT NULL,
  `pic1` varchar(200) NOT NULL,
  `pic2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `babies`
--

INSERT INTO `babies` (`id`, `name`, `price`, `detail`, `pic`, `pic1`, `pic2`) VALUES
(1, 'Lennox Toddler bed', 80, 'Cradle mattress (mattress, bedding and pillow not included). Solid and sturdy wood construction. The components are assembled by an assembly of tenons and glued mortises. Assembly joints are reinforced with nails, staples or screws\r\nAssembled by the customer with nuts and bolts. Simple and solid assembly. Non-toxic finish: tinted and lacquered. Uniform quality finish.', 'baby1-1.jpg', 'baby1-2.jpg', 'baby1-3.jpg'),
(2, 'Spider-Man Toddler Bed', 80, 'Recommended for children 15 months and older. Can support up to 22.7 kg\r\nHas 2 attached guardrails. Uses a standard mattress (sold separately). Sturdy steel frame and high quality plastic construction. Assembled dimensions (L x W x H): 140 x 75 x 66 cm\r\nEasy to assemble. JPMA Certified to meet or exceed all safety standards set by CPSC and ASTM.', 'baby2-1.jpg', 'baby2-2.jpg', 'baby2-3.jpg'),
(4, 'Paw Patrol Toddler Bed', 135, 'Recommended for children from 15 months. Made of solid and sturdy wood. JPMA certified. Features two tall side rails to keep your little one safe while converting into a \'large kid\'s bed\'\r\nAssembled dimensions (L x W x H): 137 x 75 x 48 cm', 'baby3-1.jpg', 'baby3-2.jpg', 'baby3-2.jpg'),
(6, 'Mickey Mouse Bed', 150, 'Recommended for children from 15 months. Made of solid and sturdy wood. Bedtime checklist on the easy-to-clean foot board. dry erase marker not included. Interactive clock with day of the week rotation to make learning the days and the time fun', 'baby4-1.jpg', 'baby4-2.jpg', 'baby4-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bedroom`
--

CREATE TABLE `bedroom` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `detail` text NOT NULL,
  `pic` varchar(250) NOT NULL,
  `pic1` varchar(200) NOT NULL,
  `pic2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bedroom`
--

INSERT INTO `bedroom` (`id`, `name`, `price`, `detail`, `pic`, `pic1`, `pic2`) VALUES
(2, 'Zinus Lit-KS', 450, 'Classic styling and well-spaced wooden slatted support. Dark gray coating with diamond stitching. Headboard, frame and wooden slats included / mattress sold separately. All the parts to make the bed are located in the zippered compartment on the back of the headboard for easy assembly. Available in Full, Queen and King format', 'bed1-1.jpg', 'bed1-2.jpg', 'bed1-3.jpg'),
(5, 'Zinus 14 \'\' Bed', 150, '14 \'\' with 13 \'\' underframe clearance for valuable under bed storage. Compact design for tight spaces such as stairs and doors. Reliable and very durable steel slatted mattress base. The foam padded strip is added to the steel frame for noise-free use and the non-slip strip on the wooden slats keeps your mattress from moving. Easy assembly in minutes without tools. 5 year warranty', 'bed2-1.jpg', 'bed2-2.jpg', 'bed2-3.jpg'),
(7, 'Zinus OLB-MBBF', 199, '18 \'\' profile for memory foam, innerspring and hybrid mattresses\r\nUse with or without box spring to customize the height of your mattress, mattress sold separately. Sturdy steel structure with wooden slats preventing sagging and increasing the life of the mattress. The foam padded strip is added to the steel frame for noise-free use and the non-slip strip on the wooden slats keeps your mattress from moving\r\nEasy assembly in minutes.', 'bed3-1.jpg', 'bed3-2.jpg', 'bed3-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mess` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `mess`) VALUES
(13, 'abcd@gmail.com', 'dsfesf');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `detail` text NOT NULL,
  `pic` varchar(200) NOT NULL,
  `pic1` varchar(200) NOT NULL,
  `pic2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitchen`
--

INSERT INTO `kitchen` (`id`, `name`, `price`, `detail`, `pic`, `pic1`, `pic2`) VALUES
(1, 'Inspire dining table', 450, 'Classic Eames style table set, perfect for home and office. Table diameter: 90 cm - Height: 75 cm - Chair dimensions: 45.7 cm x 50.8 cm x 83.8 cm x 43.2 cm - Seat height: 43.2 cm. \"X\" iron bearing structure for added stability and strength. MDF top that makes cleaning quick and easy. Easy assembly. Hardware and manual included. Solid beech wood legs with floor protectors. The table legs connected with adjustable metal parts, if the floor is uneven, you can adjust the mat to balance the table.', 'kitchen1-1.jpg', 'kitchen1-2.jpg', 'kitchen1-3.jpg'),
(4, '5 piece dining table', 305, 'This kitchen table set includes tempered glass top and 4 PVC leather chairs, which will look great in any restaurant. The tables and chairs are slim and smaller, making them ideal for any family. When not in use, the chair can be pushed out to get more space. There is no doubt that this elegant black dining table set is suitable for any restaurant with a decorative style.', 'kitchen2-1.jpg', 'kitchen2-2.jpg', 'kitchen2-3.jpg'),
(5, 'BestMassage Dining Table', 255, 'Prime Quality Dining Table Set which made out of 100% smoothed solid pine wood. Our desktop of our Dining Table Set is also made of solid wood and is more durable than the MDF desktop. The table and chairs Set is bound to add a certain amount of elegance to your home that you and your guests will absolutely love. Dining table Set kitchen table Set table and chairs Set', 'kitchen3-1.jpg', 'kitchen3-2.jpg', 'kitchen3-3.jpg'),
(9, 'xo', 44, 'qwerty', 'kitchen5.jpg', 'kitchen6.jpg', 'kitchen6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `living`
--

CREATE TABLE `living` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `detail` text NOT NULL,
  `pic` varchar(200) NOT NULL,
  `pic1` varchar(200) NOT NULL,
  `pic2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `living`
--

INSERT INTO `living` (`id`, `name`, `price`, `detail`, `pic`, `pic1`, `pic2`) VALUES
(1, 'Moyedecor Art', 42, 'READY TO HANG: Wall decor printed on canvas with your photos, easy to hang, stretched and framed, ready to hang. A sturdy hook is already attached to each interior wooden frame for easy hanging. The edges are painted and each panel is wrapped in a plastic bag with a folded cardboard corner to protect the paintings.', 'living1-1.jpg', 'living1-2.jpg', 'living1-3.jpg'),
(2, 'Wall Clocks', 55, 'Material: Creative wall clock, made of 9mm MDF with environmentally friendly paint, will not fade. Dimensions: 42 x 65 cm (allowable error margin of ± 1 to 2 cm). The picture is only for reference, please note the size. Modern Design: The trendy clock is a great decoration for hotel, office, living room, bedroom and other rooms in your home. It can also be a good gift for housewarming, wedding, and holiday gatherings.\r\nQuiet movement: silent, sweeping, quartz movement, no ticking, enjoy a calm environment. Warranty: 12 months warranty for the movement (must be used with 1 AA carbon battery, not included)', 'living2-1.jpg', 'living2-2.jpg', 'living2-3.jpg'),
(5, 'Living Room Furniture Set', 700, 'EASY THROUGH YOUR DOOR: KD sectional sofa, the sofa packaging size suitable for the door makes the sofa easy to walk through your door. Easy to assemble and transport: this sectional sofa is easy to assemble. You just have to assemble the backrest and the 4 legs of the sofa. The sofa fits easily through the door into the house. Quite large: two people for the sectional sofa, very comfortable, you can sit on this sofa, probably 3 people if you squeeze a little. and enjoy your party or family moments on the sofa. Solid Structure: The sturdy design of the sectional sofa is backed with quality hardwood materials, the sofa\'s memory foam and padded back cushions provide superior stability and comfort of the sofa.', 'living3-1.jpg', 'living3-2.jpg', 'living3-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `price` int(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `date`, `price`, `email`) VALUES
(1, '2021-09-08', 450, 'abcd@gmail.com'),
(2, '2021-09-08', 300, 'abcd@gmail.com'),
(3, '2021-09-08', 400, 'abcd@gmail.com'),
(4, '2021-09-16', 150, 'abcd@gmail.com'),
(5, '2021-09-16', 150, 'daljit@jjhj.com'),
(6, '2021-09-16', 150, 'daljit@jjhj.com'),
(7, '2021-09-16', 55, 'daljit@jjhj.com'),
(8, '2021-09-16', 42, 'daljit@jjhj.com'),
(9, '2021-09-16', 80, 'daljit@jjhj.com'),
(10, '2021-09-16', 55, 'daljit@jjhj.com'),
(11, '2021-09-16', 55, 'daljit@jjhj.com'),
(12, '2021-09-16', 0, 'daljit@jjhj.com'),
(13, '2021-09-16', 55, 'daljit@jjhj.com'),
(14, '2021-09-16', 55, 'daljit@jjhj.com'),
(15, '2021-09-16', 3660, 'abcd@gmail.com'),
(16, '2021-09-16', 2135, 'abcd@gmail.com'),
(17, '2021-09-16', 305, 'abcd@gmail.com'),
(18, '2021-09-17', 450, 'abcd@gmail.com'),
(19, '2021-09-18', 610, 'abcd@gmail.com'),
(20, '2021-09-18', 305, 'abcd@gmail.com'),
(21, '2021-09-18', 55, 'abcd@gmail.com'),
(22, '2021-09-18', 305, 'abcd@gmail.com'),
(23, '2021-09-18', 305, 'abcd@gmail.com'),
(24, '2021-09-18', 300, 'lucas@gmail.com'),
(25, '2021-09-22', 55, 'lucas@gmail.com'),
(26, '2021-09-22', 700, 'lucas@gmail.com'),
(27, '2021-09-22', 42, 'lucas@gmail.com'),
(28, '2021-09-22', 150, 'lucas@gmail.com'),
(29, '2021-09-24', 915, 'abcd@gmail.com'),
(30, '2021-09-24', 305, 'abcd@gmail.com'),
(31, '2021-09-24', 305, 'abcd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `phone`, `email`, `pass`, `pic`) VALUES
(10, 'Brinda', 'fff', 1234567890, 'abcd@gmail.com', '124578', 'living5.jpg'),
(14, 'abcd', 'efg', 1234567890, 'ecd@gmail.com', '123456', ''),
(15, 'gjujh', 'hhu', 0, 'daljit@jjhj.com', '123456', 'bedroom5.jpg'),
(16, 'abcd', 'efg', 1234567890, 'gth@gmail.com', '123456', ''),
(17, 'Lucas', 'abc', 1234567890, 'lucas@gmail.com', '123456', ''),
(18, 'gfvd', 'dbfg', 1234567890, 'ama@gmsail.com', '123456', ''),
(19, 'abcd', 'efg', 1234567890, 'gth121@gmail.com', '123456', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `babies`
--
ALTER TABLE `babies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bedroom`
--
ALTER TABLE `bedroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `living`
--
ALTER TABLE `living`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `babies`
--
ALTER TABLE `babies`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bedroom`
--
ALTER TABLE `bedroom`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `living`
--
ALTER TABLE `living`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
