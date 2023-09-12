--
-- Table structure for table `sample_data`
--

CREATE TABLE `sample_data` (
  `sample_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `sku` int(11) NOT NULL,
  `mpn` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `in_stock` varchar(20) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` text NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `sample_data`
--
ALTER TABLE `sample_data`
  ADD PRIMARY KEY (`sample_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sample_data`
--
ALTER TABLE `sample_data`
  MODIFY `sample_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
