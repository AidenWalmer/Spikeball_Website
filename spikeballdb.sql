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
  id INTEGER NOT NULL AUTO_INCREMENT,
  nameFirst VARCHAR(50) NOT NULL,
  nameLast VARCHAR(50) NOT NULL,
  startDate DATE NOT NULL,
  email VARCHAR(100) NOT NULL,
  UNIQUE INDEX email_UNIQUE (email ASC),
  UNIQUE INDEX id_UNIQUE (id ASC),
  PRIMARY KEY (id))
ENGINE = InnoDB
AUTO_INCREMENT = 1;

INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Aiden', 'Walmer', '2022-02-07', 'walmera1@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Dylan', 'Holland', '2022-02-07', 'hollandd1@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Dylan', 'Zambo', '2022-02-07', 'zambod@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Alec', 'Delgado', '2022-02-07', 'delgagoa@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Adam', 'Johnson', '2022-02-07', 'johnsona3@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Kyle', 'Ament', '2022-02-07', 'amentk@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Scott', 'Reagan', '2022-02-07', 'reagans@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Megan', 'Nauroth', '2022-02-07', 'naurothm@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Eric', 'Hierl', '2022-02-07', 'hierle@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Matteo', 'Pinnero', '2022-02-07', 'pinnerom@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Alex', 'Lynch', '2022-02-08', 'lyncha2@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Alex', 'Fox', '2022-02-08', 'foxa1@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Nathan', 'Seager', '2022-02-08', 'seegern@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Ryan', 'Geist', '2022-02-08', 'geistr@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Keegan', 'Donaher', '2022-02-21', 'donaherk@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Ryan', 'Ramler', '2022-02-23', 'ramlerr@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Ernie', 'Dennison', '2022-02-24', 'dennisone@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Hannah', 'Steenkamer', '2022-03-16', 'steenkamerh@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Jordan', 'Figueroa', '2022-08-04', 'figueroaj@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Christopher', 'Talluto', '2022-08-04', 'tallutoc@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Blake', 'Samsel', '2022-08-04', 'samselb@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Matthew', 'Thomas', '2022-08-04', 'thomasm5@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Nathan', 'Wiser', '2022-08-04', 'wisern@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Mason', 'Palmer', '2022-08-26', 'palmerm2@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Christiana', 'Mood', '2022-08-26', 'moodc@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Victor', 'Witkofsky', '2022-08-26', 'witkofskyv@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Marissa', 'Tuman', '2022-08-27', 'tumanm@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Christy', 'Martin', '2022-08-29', 'martinc@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Jackson', 'Lager', '2022-08-31', 'lagerj@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Jaden', 'Thomas', '2022-09-01', 'thomasj3@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Evan', 'Carneal', '2022-09-01', 'carneale@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Hannah', 'Lewiski', '2022-11-11', 'lewiskih@etown.edu');
INSERT INTO spikeballdb(nameFirst, nameLast, startDate, email) VALUES ('Christain', 'Ramos', '2022-11-11', 'ramosc@etown.edu');



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
