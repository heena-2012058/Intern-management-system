SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `login_user` (
  `a_id` int(25) NOT NULL,
  `a_user` text NOT NULL,
  `a_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login_user` (`a_id`, `a_user`, `a_password`) VALUES
(1, 'heena', 'shafila123'),
(2, 'taylor', 'reputation');

CREATE TABLE `u_reg` (
  `u_name` text NOT NULL,
  `u_email` text NOT NULL,
  `u_contact` bigint(10) NOT NULL,
  `u_degree` text NOT NULL,
  `u_college` text NOT NULL,
  `u_dur` varchar(20) DEFAULT NULL,
  `u_tech` text NOT NULL,
  `u_com` text NOT NULL,
  `u_jdate` date NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `u_reg` (`u_name`, `u_email`, `u_contact`, `u_degree`, `u_college`, `u_dur`, `u_tech`, `u_com`, `u_jdate`, `u_id`) VALUES
('Sushmitha', 'sushmithasaro@gmail.com', 9845673456, 'B.E(CSE)', 'NEC', '2 months', 'IOT', 'Ms.Santhiya', '2023-04-13',  1);

ALTER TABLE `login_user`
  ADD PRIMARY KEY (`a_id`);

ALTER TABLE `u_reg`
  ADD PRIMARY KEY (`u_id`);

ALTER TABLE `login_user`
  MODIFY `a_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `u_reg`
--
ALTER TABLE `u_reg`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

COMMIT;