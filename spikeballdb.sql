SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema spikeball
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `spikeballdb`
-- -----------------------------------------------------
USE spikeballdb;
DROP TABLE IF EXISTS spikeballdb;
CREATE TABLE IF NOT EXISTS spikeballdb (
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

INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Aiden', 'Walmer', '2022-02-07', '2024', 'walmera1@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Dylan', 'Holland', '2022-02-07', '2024', 'hollandd1@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Dylan', 'Zambo', '2022-02-07', '2024', 'zambod@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Alec', 'Delgado', '2022-02-07', '2024', 'delgagoa@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Adam', 'Johnson', '2022-02-07', '2024', 'johnsona3@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Kyle', 'Ament', '2022-02-07', '2024', 'amentk@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Scott', 'Reagan', '2022-02-07', '2024', 'reagans@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Megan', 'Nauroth', '2022-02-07', '2024', 'naurothm@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Eric', 'Hierl', '2022-02-07', '2024', 'hierle@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Matteo', 'Pinnero', '2022-02-07', '2023', 'pinnerom@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Alex', 'Lynch', '2022-02-08', '2024', 'lyncha2@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Alex', 'Fox', '2022-02-08', '2024', 'foxa1@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Nathan', 'Seager', '2022-02-08', '2024', 'seegern@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Ryan', 'Geist', '2022-02-08', '2023', 'geistr@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Keegan', 'Donaher', '2022-02-21', '0', 'donaherk@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Ryan', 'Ramler', '2022-02-23', '2023', 'ramlerr@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Ernie', 'Dennison', '2022-02-24', '2023', 'dennisone@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Hannah', 'Steenkamer', '2022-03-16', '0', 'steenkamerh@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Jordan', 'Figueroa', '2022-08-04', '2024', 'figueroaj@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Christopher', 'Talluto', '2022-08-04', '2024', 'tallutoc@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Blake', 'Samsel', '2022-08-04', '2024', 'samselb@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Matthew', 'Thomas', '2022-08-04', '0', 'thomasm5@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Nathan', 'Wiser', '2022-08-04', '0', 'wisern@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Mason', 'Palmer', '2022-08-26', '0', 'palmerm2@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Christiana', 'Mood', '2022-08-26', '2024', 'moodc@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Victor', 'Witkofsky', '2022-08-26', '2024', 'witkofskyv@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Marissa', 'Tuman', '2022-08-27', '2024', 'tumanm@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Christy', 'Martin', '2022-08-29', '2024', 'martinc@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Jackson', 'Lager', '2022-08-31', '0', 'lagerj@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Jaden', 'Thomas', '2022-09-01', '2023', 'thomasj3@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Evan', 'Carneal', '2022-09-01', '0', 'carneale@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Hannah', 'Lewiski', '2022-11-11', '2023', 'lewiskih@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, gradYear, email) VALUES ('Christain', 'Ramos', '2022-11-11', '0', 'ramosc@etown.edu');



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
