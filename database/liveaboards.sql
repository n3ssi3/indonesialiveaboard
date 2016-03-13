# MySQL-Front Dump 2.5
#
# Host: localhost   Database: liveaboards
# --------------------------------------------------------
# Server version 4.0.1-alpha-nt


#
# Table structure for table 'cruise'
#

DROP TABLE IF EXISTS cruise;
CREATE TABLE cruise (
  boat_code varchar(50) default NULL,
  boat_name varchar(200) default NULL,
  boat_type varchar(100) default NULL,
  cruise_code varchar(100) default NULL,
  destination varchar(200) default NULL,
  derive varchar(200) default NULL,
  departure_date_dd char(2) default NULL,
  departure_date_mm char(2) default NULL,
  departure_date_yyyy varchar(4) default NULL,
  departure_time varchar(5) default NULL,
  return_date_dd char(2) default NULL,
  return_date_mm char(2) default NULL,
  return_date_yyyy varchar(4) default NULL,
  return_time varchar(5) default NULL,
  link_details varchar(100) default NULL,
  link_area varchar(100) default NULL,
  category varchar(100) default NULL,
  price varchar(100) default NULL,
  duration varchar(10) default NULL,
  notes text,
  id int(11) NOT NULL auto_increment,
  PRIMARY KEY  (id)
) TYPE=MyISAM;



#
# Dumping data for table 'cruise'
#

INSERT INTO cruise VALUES("pl03", "cruise03", "boat_type03", "cruise_code03", "malaysia", "lembongan", "29", "06", "2005", "08:00", "30", "06", "2005", "15:00", "boat03.htm", "area03.htm", "category03", "400", "2D/1N", "schedule03", "4");
INSERT INTO cruise VALUES("pl10", "cruise10", "boat_type10", "cruise_code10", "benoa", "lembongan", "14", "06", "2005", "08:00", "15", "06", "2005", "15:00", "boat10.htm", "area10.htm", "category10", "2100", "9D/8N", "schedule10", "13");
INSERT INTO cruise VALUES("pl02", "cruise02", "boat_type02", "cruise_code02", "singapore", "surabaya", "29", "09", "2008", "08:00", "30", "10", "2008", "15:00", "boat02.htm", "area02.htm", "category02", "1000", "3D/4N", "schedule02", "3");
INSERT INTO cruise VALUES("pl06", "cruise06", "boat_type06", "cruise_code06", "benoa", "singapore", "15", "04", "2005", "08:00", "18", "04", "2005", "15:00", "boat06.htm", "area06.htm", "category06", "1700", "7D/6N", "schedule06", "7");
INSERT INTO cruise VALUES("pl04", "cruise04", "boat_type04", "cruise_code04", "benoa", "philipine", "28", "07", "2005", "08:00", "30", "07", "2005", "15:00", "boat04.htm", "area04.htm", "category04", "2500", "9D/10N", "schedule04", "5");
INSERT INTO cruise VALUES("pl06", "cruise06", "boat_type06", "cruise_code06", "singapore", "perth", "15", "07", "2005", "08:00", "17", "07", "2005", "15:00", "boat06.htm", "area06.htm", "category06", "1700", "7D/6N", "schedule06", "8");
INSERT INTO cruise VALUES("pl07", "cruise07", "boat_type07", "cruise_code07", "benoa", "surabaya", "09", "09", "2005", "08:00", "12", "09", "2005", "15:00", "boat07.htm", "area07.htm", "category07", "3400", "10D/9N", "schedule07", "10");
INSERT INTO cruise VALUES("pl08", "cruise08", "boat_type08", "cruise_code08", "singapore", "malaysia", "29", "06", "2005", "08:00", "30", "06", "2005", "15:00", "boat08.htm", "area08.htm", "category08", "80", "3D/4N", "schedule08", "11");
INSERT INTO cruise VALUES("pl12", "cruise12", "boat_type12", "cruise_code12", "lembongan", "benoa", "16", "06", "2005", "08:00", "18", "06", "2005", "15:00", "boat12.htm", "area12.htm", "category12", "1500", "5D/4N", "schedule12", "15");
INSERT INTO cruise VALUES("pl09", "cruise09", "boat_type09", "cruise_code09", "singapore", "jakarta", "04", "07", "2005", "08:00", "08", "07", "2005", "15:00", "boat09.htm", "area09.htm", "category09", "1300", "3D/4N", "schedule09", "12");
INSERT INTO cruise VALUES("pl11", "cruise11", "boat_type11", "cruise_code11", "benoa", "jakarta", "01", "07", "2006", "08:00", "05", "07", "2006", "15:00", "boat11.htm", "area11.htm", "category11", "450", "2D/3N", "schedule11", "14");
INSERT INTO cruise VALUES("pl05", "cruise05", "boat_type05", "cruise_code05", "perth", "surabaya", "29", "10", "2006", "08:00", "30", "10", "2006", "15:00", "boat05.htm", "area05.htm", "category05", "1200", "4D/3N", "schedule05", "6");
INSERT INTO cruise VALUES("pl06", "cruise06", "boat_type06", "cruise_code06", "singapore", "benoa", "10", "04", "2005", "08:00", "12", "04", "2005", "15:00", "boat06.htm", "area06.htm", "category06", "1700", "7D/6N", "schedule06", "9");


#
# Table structure for table 'usertbl'
#

DROP TABLE IF EXISTS usertbl;
CREATE TABLE usertbl (
  user varchar(50) default NULL,
  password varchar(20) default NULL,
  status varchar(32) default NULL,
  name varchar(200) default NULL
) TYPE=MyISAM;



#
# Dumping data for table 'usertbl'
#

INSERT INTO usertbl VALUES("test@test.com", "test", "admin", "liveaboards");
