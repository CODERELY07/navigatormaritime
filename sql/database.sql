-- Data base Name
navigatormaritime

-- Contact FORM SQL
CREATE TABLE contact (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    number INT(11),
    purpose TEXT NOT NULL,
    course VARCHAR(255),
    message TEXT NOT NULL,
    send_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);
--house-course
CREATE TABLE house_course(
	id INT NOT NULL AUTO_INCREMENT,
    course VARCHAR(255) NOT NULL,
    days INT(255) NOT NULL,
    PRIMARY KEY(id)
)
--marina-course
CREATE TABLE marina_course(
	id INT NOT NULL AUTO_INCREMENT,
    course VARCHAR(255) NOT NULL,
    days INT(255) NOT NULL,
    PRIMARY KEY(id)
)
--practical-assement
CREATE TABLE practical_assesment(
	id INT NOT NULL AUTO_INCREMENT,
    course VARCHAR(255) NOT NULL,
    days INT(255) NOT NULL,
    PRIMARY KEY(id)
)
--electiral-course
CREATE TABLE electiral_course(
	id INT NOT NULL AUTO_INCREMENT,
    course VARCHAR(255) NOT NULL,
    days INT(255) NOT NULL,
    PRIMARY KEY(id)
)
--book-course
CREATE TABLE book_course (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    number INT(11),
    courses TEXT NOT NULL,
    message TEXT NOT NULL,
    enroll_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);
--certificate
CREATE TABLE certificate(
	id INT AUTO_INCREMENT PRIMARY KEY,
    number INT(12) NOT NULL
)
INSERT INTO certificate(number) VALUES(21002100)

--INSERT INTO marina_course
INSERT INTO marina_course(course,days) VALUES
('Advanced Training for Ships Operating in polar waters',5),
('Basic Training for Ships Operating in polar waters',3)

--INSERT INTO practical_assesment
INSERT INTO practical_assesment(course,days) VALUES
('Advanced Training for Ships Operating in polar waters',5),
('Basic Training for Ships Operating in polar waters',3)

--INSERT INTO practical_assesment
INSERT INTO practical_assesment(course,days) VALUES
('Advanced Training for Ships Operating in polar waters',5),
('Basic Training for Ships Operating in polar waters',3)

--electrical course
INSERT INTO electiral_course (course, days) VALUES
('Control Engineering Course', 2),
('High Voltage Safety Electric Propulsion', 2),
('Marine Electro Technology basic', 2),
('Pneumatics and Hydraulics', 2),
('Refrigeration and AirConditioning', 2);


--INSERT INTO house_course
INSERT INTO house_course (course, days) VALUES 
('Accident Investigation and Root Cause Analysis', 2),
('ADVANCE TRAINING IN NEGOTIATION STRATEGIES AND SKILLS', 1),
('Auxillary Marchinery System', 3),
('Basic Ice Navigation', 2),
('Basic Ice Navigation for Evic', 0),
('Basic Trim and Stability', 2),
('Bridge Maneuvering Simulator', 3),
('Bridge Resource Management', 3),
('Bridge Resource Management (Cenmar)', 3),
('Bridge Resource Management (StarOcean)', 2),
('Bridge Resource Management Refresher', 2),
('Bridge Team Management', 3),
('Bridge Team Management Refresher', 2),
('Bridge Team Management with Bridge Resource Management', 4),
('Bunkering Survey Calculation', 2),
('CARGO HANDLING / ENEL', 1),
('Cargo Handling and Care of Cargo', 4),
('Collision Avoidance', 3),
('Collision Regulation', 1),
('Consolidated Marpol (In-house)', 3),
('Crude Oil Washing and Inert Gas System', 2),
('DANELEC ECDIS', 2),
('Dangerous Hazardous and Harmful Cargoes with CFR', 2),
('Electronic Chart Display and Information System', 5),
('Electronic Chart Display and Information System Refresher', 2),
('Engine Resource Management', 3),
('Engine Resource Management (StarOcean)', 2),
('Engine Room Management Refresher', 2),
('Engine Room Simulator with Engine Resource Management', 3),
('Engine Room Simulator with Engine Resource Management Refresher', 2),
('Engine Team Management', 3),
('ENTRY INTO ENCLOSED SPACES', 1),
('Environmental Management System', 1),
('Fuel Oil Management', 12),
('Global Sulphur Cap 2020', 1),
('Hatch Cover Maintenance', 2),
('Hazardous and Harmful Cargoes with CFR (In-House)', 1),
('Hazardous Atmosphere Monitoring', 1),
('Ice Navigation (Full Course)', 5),
('Ice Navigation for Engine', 2),
('Ice Navigation for Officers', 2),
('Improvement of Safe Navigational Watch and Collision Avoidance', 3),
('Incident Investigation and Analysis', 2),
('Incident Investigation and Root Cause Analysis', 2),
('International Safety Management (Evic)', 1),
('International Safety Management (Officer)', 1),
('International Safety Management (Ratings)', 1),
('JRC NEW (JAN-9201/7201)', 2),
('JRC OLD (JAN-701-901-2000)', 2),
('Leadership and Crew Management', 1),
('Leadership and Management Training', 1),
('Marine Environmental Awareness', 1),
('Marine High Voltage', 2),
('Maritime English (Officer)', 1),
('Maritime English (Ratings)', 1),
('Maritime Law for Officers', 3),
('Maritime Leadership and Behavioral Development', 1),
('Marpol Annex 1 & 6', 2),
('Marpol Annex I', 1),
('Marpol Annex I & 2 & 6', NULL),
('Marpol Annex V', NULL),
('Marpol Annex VI', 1),
('Marpol Consolidated', 5),
('Mental Health Awareness', 1),
('NAVIGATION / ENEL', 2),
('Navigation Training Course', 2),
('Oil Record Book', 1),
('Oil Tanker Cargo Operations and Liquid Cargo Handling with Simulator', 4),
('Operation and Safety Measures of Gas Analyzer', 3),
('Passage Planning Course', 3),
('Polar Ice Navigation', 5),
('Port State Control', 1),
('Port State Control (Evic)', 2),
('Port State Control (OFFICER)', 2),
('Port State Control (RATINGS)', 1),
('POST-TRAUMA SUPPORT SPECIALIZATION', 1),
('Radar Operation Plotting Aid', 10),
('Refresher Course for Safety Officer', 2),
('Risk Assessment / Incident Investigation and Root Cause Analysis', 1),
('Risk Assessment and Incident Investigation Analysis', 3),
('Risk Assessment and Incident Investigation Analysis Refresher', 2),
('Risk Assessment and Management', 2),
('Risk Assessment Training Course', 1),
('Risk Awareness Training Course', 1),
('Risk Management & Incident Investigation Course', 3),
('Safety Precautions', 1),
('Safety Training and Accident Investigation', 2),
('Scrubber System Course', 2),
('Ship Anchoring Course', 1),
('Ship Environmental Management System', 1),
('Ship Handling and Maneuvering', 3),
('Ship Handling and Maneuvering (Full Course)', 5),
('Ship Officer Training Course', 2),
('Ship Security Officer', 3),
('Ship Security Officer Refresher', 2),
('Ship Simulator and Bridge Teamwork (Refresher)', 2),
('Ship Simulator and Bridge Teamwork with BRM', 5),
('Shipboard Environmental Management System', 1),
('Shipboard Mooring Operations', 1),
('Shipboard officers development program', 2),
('Shipboard Safety Officer', 2),
('SHIPBOARD SAFETY WORKING PRACTICES', 3),
('SSBT WITH BRM (Marsaman)', 5),
('SSBT with BTM (Marsaman)', 5),
('Steering Course', 1),
('TRANSAS ECDIS Type Specific', 2),
('Trim and Stability (Full Course)', 5),
('Vetting Inspection Course', 2),
('Voyage Planning Course', 2);

