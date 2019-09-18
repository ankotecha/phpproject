-- phpMyAdmin SQL Dump
-- versimale 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generatimale Time: Apr 08, 2019 at 08:26 AM
-- Server versimale: 10.1.37-MariaDB
-- PHP Versimale: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_male_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTImale;
SET time_zmalee = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATImale_CmaleNECTImale=@@COLLATImale_CmaleNECTImale */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `groupdatabse`
--

CREATE TABLE `groupdatabse` (
  `Collegeid` varchar(10) NOT NULL,
  `Name1` varchar(20) NOT NULL,
  `Name2` varchar(20) NOT NULL,
  `Name3` varchar(20) NOT NULL,
  `Name4` varchar(20) NOT NULL,
  `Name5` varchar(20) NOT NULL,
  `EventName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupdatabse`
--

INSERT INTO `groupdatabse` (`Collegeid`, `Name1`, `Name2`, `Name3`, `Name4`, `Name5`, `EventName`) VALUES
('saa', 'A', 'B', 'C', 'D', 'E', 'Sherlock Holmes'),
('1234567891', 'a', 'b', 'c', 'd', 'e', 'Box Cricket'),
('1234567891', 'a', 'b', 'c', 'd', 'e', 'Box Cricket'),
('1234567891', 'xyz', 'a', 'b', 'c', 'd', 'PaintBall'),
('123456789', 'dasdj', 'jdaidh', 'hdhsldhh', 'hhfh', 'kfsakjasf', 'Box Cricket'),
('17ceuog005', 'Hash', 'Ash', 'Sam', 'Root', 'Root1', 'PaintBall'),
('17ceumale035', 'A', 'B', 'C', 'D', 'E', 'Box Cricket'),
('17ceuog056', 'A', 'B', 'C', 'D', 'E', 'Box Cricket'),
('17ceumale035', 'ASh', 'SAM', 'ROOT', 'HASH', 'ANS', 'Sherlock Holmes'),
('17ceumale035', 'root123', 'A', 'B', 'CD', 'EFG', 'Sherlock Holmes'),
('17ceuog000', 'harsh1868', 'SAM', 'Ash', 'Hash', 'Abcd', 'Sherlock Holmes');

-- --------------------------------------------------------

--
-- Table structure for table `individualeventregistratimale`
--

CREATE TABLE `individualeventregistratimale` (
  `Collegeid` varchar(10) NOT NULL,
  `EventName` varchar(20) NOT NULL,
  `StudentName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individualeventregistratimale`
--

INSERT INTO `individualeventregistratimale` (`Collegeid`, `EventName`, `StudentName`) VALUES
('17ceuog056', 'PaintBall', 'Harsh'),
('17ceuog056', 'Sherlock Holmes', 'Hash'),
('123', 'Sherlock Holmes', 'Has'),
('123456', 'Box Cricket', 'xyz'),
('123456788', 'Box Cricket', 'xyz'),
('1234567891', 'PaintBall', 'Harsh'),
('1234567891', 'Box Cricket', 'Harsh'),
('17ceuog005', 'PaintBall', 'hashy1868'),
('17ceuog005', 'PaintBall', 'has'),
('17ceuog005', 'Box Cricket', 'has'),
('17ceumale035', 'PaintBall', 'root123'),
('17ceumale035', 'Box Cricket', 'root123'),
('17ceuos066', 'PaintBall', 'ashsih'),
('17ceuos066', 'PaintBall', 'ashish'),
('17ceuog081', 'codejam', 'hashy1868'),
('17ceuog081', 'Box Cricket', 'hashy1868'),
('17ceuog081', 'Box Cricket', 'hashy1868'),
('17ceuog056', 'Box Cricket', 'hashy1868'),
('17ceumale035', 'Sherlock Holmes', 'root'),
('17ceumale0', 'PaintBall', 't7ghy'),
('17ceuog777', 'Huntrmaleics', 'has123'),
('17ceuog000', 'PaintBall', 'harsh1868');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `collegeid` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `collegeid`, `gender`, `mobileno`, `email`) VALUES
('abc', '25f9e794323b453885f5181f1b624d0b', '+-987456', 'male', '454', '13131'),
('Has', '26174f32dc06a3a1da63', '123', 'male', '123', '123'),
('Has', '7d96c64fe787fd03b289', '12345', 'male', '123', '123'),
('Has', '7d96c64fe787fd03b289', '123456789', 'male', '123456', '123'),
('FinalPro', 'c164bbc9d6c72a52c599bbb43d8db8e1', '123456hash', 'male', '123456', '123456'),
('xyz', 'e10adc3949ba59abbe56e057f20f883e', '123has', 'male', '9874563210', 'hasfgqg@gmail.com'),
('HarshPhp', '5559172fe6eae4dada87', '16ceuog056', 'male', '7016529237', 'harsh1868@gmail.com'),
('FinalPro', 'd41d8cd98f00b204e9800998ecf8427e', '1723456789', 'male', '1234568789', '123@gmail.com'),
('has123', 'c164bbc9d6c72a52c599bbb43d8db8e1', '17234567895456', 'male', '123456897', '123@gmail.com'),
('', '12345', '17ce', 'male', '', ''),
('Has', '7d96c64fe787fd03b289', '17ceuog000', 'male', '9874563210', '123@gmail.com'),
('hashy1868', '9611d977bc4d29abac2ab76080540884', '17ceuog0056', 'male', '7016529237', 'harsh1868@gmail.com'),
('', '1868', '17ceuog056', 'male', '', ''),
('hashy1868', '1ece697a1e4071944bd568782d38637d', '17ceuog081', 'male', '7894563210', 'harsh@gmail.com'),
('has123', '296981114792c2146f947d4a32525923', '17ceuog777', 'male', '9874563210', 'has817872@gmail.com'),
('root123', '2d091ebadd06a3bdba3323b96d29a8c7', '17ceumale035', 'female', '9773178541', 'samyak@gmail.com'),
('ashish', 'b118bddd438f56dbf1829fb9a46e4be6', '17ceuos066', 'male', '7894561230', 'ashish@gmail.com'),
('HAS', 'c63a943758897475bf8c', '17CEUOXXX1', 'male', '9874563210', '182223@gmail.com'),
('FinalPro', 'has123', '17CEUOXXXX', 'male', '', ''),
('', '1868', '1868', 'male', '', ''),
('Harsh', 'c164bbc9d6c72a52c599bbb43d8db8e1', '1868123', 'male', '1868123', '1868123'),
('Harsh', 'c164bbc9d6c72a52c599bbb43d8db8e1', '1sasd', 'male', '12354', '12344'),
('Has', '7d96c64fe787fd03b289', '2345', 'male', '123', '123@gmail.com'),
('ashish', 'e10adc3949ba59abbe56e057f20f883e', '2387416293', 'male', '786947236', 'sfshgf7r'),
('Has', '7d96c64fe787fd03b289', 'has123', 'male', '123', '123@gmail.com'),
('harsh1868', 'c164bbc9d6c72a52c599', 'has1234', 'male', '1234', '1234'),
('harsh1868', 'c164bbc9d6c72a52c599bbb43d8db8e1', 'LastTest', 'male', '1868', '1868@gmail.com'),
('Abc', 'e10adc3949ba59abbe56e057f20f883e', 'qwerty123', 'male', '7896542687', 'hash@gmail.com'),
('Testing', 'c164bbc9d6c72a52c599', 'Test18', 'male', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`collegeid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATImale_CmaleNECTImale=@OLD_COLLATImale_CmaleNECTImale */;
