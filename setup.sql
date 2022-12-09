-----------------------------------------------------------------------------------
-- 
-- Members table for spikeballdb (for storing all club members and relevent member information)
--
-----------------------------------------------------------------------------------
USE spikeballdb;
DROP TABLE IF EXISTS members;
CREATE TABLE IF NOT EXISTS members (
  id        INTEGER NOT NULL AUTO_INCREMENT,
  nameFirst VARCHAR(50) NOT NULL,
  nameLast  VARCHAR(50) NOT NULL,
  startDate DATE NOT NULL,
  gradYear  INTEGER,
  email     VARCHAR(100) NOT NULL,
  UNIQUE INDEX email_UNIQUE (email ASC),
  UNIQUE INDEX id_UNIQUE (id ASC),
  PRIMARY KEY (id))
ENGINE = InnoDB
AUTO_INCREMENT = 1;

INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Aiden', 'Walmer', '2022-02-07', '2024', 'walmera1@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Dylan', 'Holland', '2022-02-07', '2024', 'hollandd1@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Dylan', 'Zambo', '2022-02-07', '2024', 'zambod@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Alec', 'Delgado', '2022-02-07', '2024', 'delgagoa@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Adam', 'Johnson', '2022-02-07', '2024', 'johnsona3@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Kyle', 'Ament', '2022-02-07', '2024', 'amentk@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Scott', 'Reagan', '2022-02-07', '2024', 'reagans@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Megan', 'Nauroth', '2022-02-07', '2024', 'naurothm@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Eric', 'Hierl', '2022-02-07', '2024', 'hierle@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Matteo', 'Pinnero', '2022-02-07', '2025', 'pinnerom@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Alex', 'Lynch', '2022-02-08', '2024', 'lyncha2@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Alex', 'Fox', '2022-02-08', '2024', 'foxa1@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Nathan', 'Seager', '2022-02-08', '2024', 'seegern@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Ryan', 'Geist', '2022-02-08', '2025', 'geistr@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Keegan', 'Donaher', '2022-02-21', '2025', 'donaherk@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Ryan', 'Ramler', '2022-02-23', '2025', 'ramlerr@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Ernie', 'Dennison', '2022-02-24', '2025', 'dennisone@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Hannah', 'Steenkamer', '2022-03-16', '0', 'steenkamerh@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Jordan', 'Figueroa', '2022-08-04', '2024', 'figueroaj@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Christopher', 'Talluto', '2022-08-04', '2024', 'tallutoc@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Blake', 'Samsel', '2022-08-04', '2025', 'samselb@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Matthew', 'Thomas', '2022-08-04', '0', 'thomasm5@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Nathan', 'Wiser', '2022-08-04', '0', 'wisern@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Mason', 'Palmer', '2022-08-26', '0', 'palmerm2@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Christiana', 'Mood', '2022-08-26', '2024', 'moodc@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Victor', 'Witkofsky', '2022-08-26', '2024', 'witkofskyv@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Marissa', 'Tuman', '2022-08-27', '2024', 'tumanm@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Christy', 'Martin', '2022-08-29', '2024', 'martinc@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Jackson', 'Lager', '2022-08-31', '0', 'lagerj@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Jaden', 'Thomas', '2022-09-01', '2025', 'thomasj3@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Evan', 'Carneal', '2022-09-01', '0', 'carneale@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Hannah', 'Lewiski', '2022-11-11', '2025', 'lewiskih@etown.edu');
INSERT INTO members(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Christain', 'Ramos', '2022-11-11', '2026', 'ramosc@etown.edu');


-----------------------------------------------------------------------------------
-- 
-- Users table for spikeballdb (For storing the admin username and login)
--
-----------------------------------------------------------------------------------
USE spikeballdb;
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'spikeballclub', '$2y$10$Kgpka2dN29Z.nS7QZrSaXuGjLhWd6dAmEtsjfrdtzd89QW8.3paCG');

ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid_UNIQUE` (`userid`);

ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;


-----------------------------------------------------------------------------------
-- 
-- Events table for spikeballdb (for storing club events and relevent event information)
--
-----------------------------------------------------------------------------------
CREATE TABLE `events` (
  `eventID` int(11) NOT NULL,
  `eventName` varchar(45) DEFAULT NULL,
  `description` tinytext DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `startTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `events` (`eventID`, `eventName`, `description`, `location`, `startDate`, `startTime`) VALUES
(1, 'test', 'test event', 'Brinser Field', '2022-12-08', '04:00:00');

ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`);

ALTER TABLE `events`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

