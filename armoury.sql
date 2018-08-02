--
-- Database: `armoury`
--

-- --------------------------------------------------------

--
-- Table structure for table `export`
--

CREATE TABLE `export` (
  `wname` varchar(50) NOT NULL,
  `wid` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `sectorid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `export`
--

INSERT INTO `export` (`wname`, `wid`, `origin`, `type`, `distance`, `sectorid`) VALUES
('s', '10', 'land', 'primary', '10', '01');

-- --------------------------------------------------------

--
-- Table structure for table `future`
--

CREATE TABLE `future` (
  `wname` varchar(50) NOT NULL,
  `wid` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `secid` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `future`
--

INSERT INTO `future` (`wname`, `wid`, `distance`, `secid`, `origin`, `type`) VALUES
('BRAMOS', '10', '50000m', '01', 'land', 'primary');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('insas', 'charli');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `secname` varchar(50) NOT NULL,
  `secid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`secname`, `secid`) VALUES
('land', '01'),
('air', '02'),
('navy', '03');

-- --------------------------------------------------------

--
-- Table structure for table `soldiers`
--

CREATE TABLE `soldiers` (
  `sid` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `sectorid` varchar(50) NOT NULL,
  `weaponid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE `weapons` (
  `wid` varchar(50) NOT NULL,
  `wname` varchar(50) NOT NULL,
  `sectorid` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `export`
--
ALTER TABLE `export`
  ADD PRIMARY KEY (`wname`),
  ADD KEY `secid` (`sectorid`);

--
-- Indexes for table `future`
--
ALTER TABLE `future`
  ADD PRIMARY KEY (`wname`),
  ADD KEY `secid` (`secid`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`secid`);

--
-- Indexes for table `soldiers`
--
ALTER TABLE `soldiers`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `sectorid` (`sectorid`),
  ADD KEY `weaponid` (`weaponid`);

--
-- Indexes for table `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`wid`),
  ADD KEY `sectorid` (`sectorid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `export`
--
ALTER TABLE `export`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`sectorid`) REFERENCES `sector` (`secid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `future`
--
ALTER TABLE `future`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`secid`) REFERENCES `sector` (`secid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soldiers`
--
ALTER TABLE `soldiers`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`sectorid`) REFERENCES `sector` (`secid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk5` FOREIGN KEY (`weaponid`) REFERENCES `weapons` (`wid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `weapons`
--
ALTER TABLE `weapons`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`sectorid`) REFERENCES `sector` (`secid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
