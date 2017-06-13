-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2017 at 02:16 PM
-- Server version: 10.0.30-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wittproj_cakethr`
--

-- --------------------------------------------------------

--
-- Table structure for table `convents`
--

CREATE TABLE `convents` (
  `id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
      `viaf_url` varchar(255) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

      --
      -- Dumping data for table `convents`
      --


      -- --------------------------------------------------------

      --
      -- Table structure for table `roles`
      --

      CREATE TABLE `roles` (
        `id` int(11) NOT NULL,
	  `woman_id` int(11) NOT NULL,
	    `convent_id` int(11) NOT NULL,
	      `role` varchar(255) DEFAULT NULL,
	      	     `start_date` int(4) DEFAULT NULL,
		     		  `end_date` int(4) DEFAULT NULL
				  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

				  --
				  -- Dumping data for table `roles`
				  --


				  -- --------------------------------------------------------

				  --
				  -- Table structure for table `women`
				  --

				  CREATE TABLE `women` (
				    `id` int(11) NOT NULL,
				      `name` varchar(255) NOT NULL,
				      	     `viaf_url` varchar(255) DEFAULT NULL
					     ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

					     --
					     -- Dumping data for table `women`
					     --

					     CREATE TABLE `portraits` (
					     	    `id` int(11) NOT NULL,
						    	 `title` varchar(255) NOT NULL,
							 	 `woman_id` int(11) NOT NULL,
								 	    `viaf_url` varchar(255) DEFAULT NULL
									    );
									    --
									    -- Indexes for dumped tables
									    --

									    --
									    -- Indexes for table `convents`
									    --
									    ALTER TABLE `convents`
									      ADD PRIMARY KEY (`id`);

									      --
									      -- Indexes for table `roles`
									      --
									      ALTER TABLE `roles`
									        ADD PRIMARY KEY (`id`),
										  ADD KEY `convent_key` (`convent_id`),
										    ADD KEY `women_key` (`woman_id`);

										    ALTER TABLE `portraits`
										    	  ADD PRIMARY KEY (`id`),
											      ADD KEY `woman_portrait_key` (`woman_id`);


											      --
											      -- Indexes for table `women`
											      --
											      ALTER TABLE `women`
											        ADD PRIMARY KEY (`id`);

												--
												-- AUTO_INCREMENT for dumped tables
												--

												--
												-- AUTO_INCREMENT for table `convents`
												--
												ALTER TABLE `convents`
												  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
												  --
												  -- AUTO_INCREMENT for table `roles`
												  --
												  ALTER TABLE `roles`
												    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
												    --
												    -- AUTO_INCREMENT for table `women`
												    --
												    ALTER TABLE `women`
												      MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
												      --
												      -- Constraints for dumped tables
												      --

												      --
												      -- Constraints for table `roles`
												      --
												      ALTER TABLE `roles`
												        ADD CONSTRAINT `convent_key` FOREIGN KEY (`convent_id`) REFERENCES `convents` (`id`),
													  ADD CONSTRAINT `women_key` FOREIGN KEY (`woman_id`) REFERENCES `women` (`id`);

													  ALTER TABLE `portraits`
													  	ADD CONSTRAINT `portrait_women_key` FOREIGN KEY (`woman_id`) REFERENCES `women` (`id`);

														