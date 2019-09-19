DROP TABLE APPOINTMENTS;
DROP TABLE DOCTORS;
DROP TABLE PATIENTS;
DROP TABLE USERSRECEPTION;
DROP TABLE USERSACCOUNT;
DROP TABLE ACCOUNTS;
DROP TABLE APPTIMES;


--Create table DOCTORS


CREATE TABLE DOCTORS (
    DoctorId NUMBER(3) NOT NULL,
    FirstName VARCHAR2 (40),
    LastName VARCHAR2 (40),
    Dob VARCHAR2 (9),
    PhoneNumber VARCHAR2 (10),
    Email VARCHAR2 (50),
    Status CHAR (1),   
    CONSTRAINT Pk_DOCTORS PRIMARY KEY (DoctorId)
);

--Create table PATIENTS

CREATE TABLE PATIENTS (
PatientId NUMBER(3) NOT NULL ,
FirstName VARCHAR2 (40),
LastName VARCHAR2 (40),
Dob VARCHAR2 (9),
PhoneNumber VARCHAR2 (10),
Email VARCHAR2 (50),
Status CHAR (1),
CONSTRAINT Pk_PATIENTS PRIMARY KEY (PatientId)
);

--Create table USERSRECEPTION

CREATE TABLE USERSRECEPTION (
UserName VARCHAR2 (40),
Password VARCHAR2 (24),
CONSTRAINT Pk_USERSRECEPTION PRIMARY KEY (UserName)
);

--Create table USERSACCOUNT

CREATE TABLE USERSACCOUNT(
UserName VARCHAR2 (40),
Password VARCHAR2 (24),
CONSTRAINT Pk_USERSACCOUNT PRIMARY KEY (UserName)
);

--Create table ACCOUNTS

CREATE TABLE ACCOUNTS (
SaleId  NUMBER (4) NOT NULL,
SaleDate VARCHAR2 (9) ,
RevenueAmount NUMBER (8),
DoctorWages NUMBER (6),
ReceptionistWages NUMBER (6),
AccountantWages NUMBER (6),
Tax NUMBER (6),
CONSTRAINT Pk_ACCOUNTSId PRIMARY KEY (SaleID)
);

--Create table APPTIMES

CREATE TABLE AppTimes
(AppTime varchar2(5),
CONSTRAINT pk_AppTimes PRIMARY KEY (AppTime)
);

--Create table APPOINTMENTS 

CREATE TABLE APPOINTMENTS (
AppointmentId NUMBER (5) ,
DoctorId NUMBER (3) ,
PatientId NUMBER (3),
AppDate Date ,
AppTime VARCHAR2 (5),
AppointmentStatus CHAR (1),
CONSTRAINT Fk_AppointDocId FOREIGN KEY (DoctorId) REFERENCES DOCTORS,
CONSTRAINT Fk_AppointPatId FOREIGN KEY (PatientId) REFERENCES PATIENTS,
CONSTRAINT Pk_AppointmentId PRIMARY KEY (AppointmentId)
);

--Populate table DOCTORS

INSERT INTO Doctors(DoctorId, FirstName, LastName, DOB, PhoneNumber, Email, Status)
VALUES(1,'Andy','Adams','06-MAR-68','0891234567','Andy68@live.com','R');

INSERT INTO Doctors(DoctorId, FirstName, LastName, DOB, PhoneNumber, Email, Status)
VALUES(2,'Boris','Branson','25-JUN-85','0351234567','BorisBranson123@outlook.com','R');

--Populate table PATIENTS

INSERT INTO Patients(PatientId, FirstName, LastName, DOB, PhoneNumber, Email, Status)
VALUES(1,'Adam','Anderson','16-JUL-68','0551234567','Adam123@outlook.com','R');

INSERT INTO Patients(PatientId, FirstName, LastName, DOB, PhoneNumber, Email, Status)
VALUES(2,'Brandon','Butchinson','14-DEC-85','0351234567','Butch3456123@outlook.com','R');

--Populate table USERSRECEPTION

INSERT INTO UsersReception(UserName, Password)
VALUES('Harry','abc123');

INSERT INTO UsersReception(UserName, Password)
VALUES('Catherine','def456');

--Populate table USERSACCOUNT

INSERT INTO UsersAccount(UserName, Password)
VALUES('Harry','abc123');

INSERT INTO UsersAccount(UserName, Password)
VALUES('Catherine','def456');

--Populate table ACCOUNTS

INSERT INTO ACCOUNTS (SaleId,SaleDate,RevenueAmount,DoctorWages,ReceptionistWages,AccountantWages,Tax)
VALUES('1','11-JAN-16' ,200,50,20,10,10);

INSERT INTO ACCOUNTS (SaleId,SaleDate,RevenueAmount,DoctorWages,ReceptionistWages,AccountantWages,Tax)
VALUES('2','18-JAN-17' ,2200,50,20,10,10);

INSERT INTO ACCOUNTS (SaleId,SaleDate,RevenueAmount,DoctorWages,ReceptionistWages,AccountantWages,Tax)
VALUES('3','02-FEB-16' ,200,50,20,10,10);

INSERT INTO ACCOUNTS (SaleId,SaleDate,RevenueAmount,DoctorWages,ReceptionistWages,AccountantWages,Tax)
VALUES('4','03-MAR-17' ,200,50,20,10,10);

INSERT INTO ACCOUNTS (SaleId,SaleDate,RevenueAmount,DoctorWages,ReceptionistWages,AccountantWages,Tax)
VALUES('5','13-APR-17' ,200,50,200,10,10);

INSERT INTO ACCOUNTS (SaleId,SaleDate,RevenueAmount,DoctorWages,ReceptionistWages,AccountantWages,Tax)
VALUES('6','13-MAY-17' ,200,50,200,10,10);

INSERT INTO ACCOUNTS (SaleId,SaleDate,RevenueAmount,DoctorWages,ReceptionistWages,AccountantWages,Tax)
VALUES('7','13-JUN-17' ,250,50,200,10,10);

--Populate table APPTIMES

INSERT INTO AppTimes
VALUES('09:00');
INSERT INTO AppTimes
VALUES('09:30');
INSERT INTO AppTimes
VALUES('10:00');
INSERT INTO AppTimes
VALUES('10:30');
INSERT INTO AppTimes
VALUES('11:00');
INSERT INTO AppTimes
VALUES('11:30');
INSERT INTO AppTimes
VALUES('12:00');
INSERT INTO AppTimes
VALUES('12:30');
INSERT INTO AppTimes
VALUES('14:00');
INSERT INTO AppTimes
VALUES('14:30');
INSERT INTO AppTimes
VALUES('15:00');
INSERT INTO AppTimes
VALUES('15:30');
INSERT INTO AppTimes
VALUES('16:00');
INSERT INTO AppTimes
VALUES('16:30');
INSERT INTO AppTimes
VALUES('17:00');
INSERT INTO AppTimes
VALUES('17:30');

--Populate table APPOINTMENTS

INSERT INTO APPOINTMENTS( AppointmentId, DoctorId, PatientId, AppDate, AppTime, AppointmentStatus)
VALUES (1,2,1,'12-APR-19','10:30','A');

INSERT INTO APPOINTMENTS( AppointmentId, DoctorId, PatientId, AppDate, AppTime, AppointmentStatus)
VALUES (2,2,1,'12-APR-19','14:00','A');

INSERT INTO APPOINTMENTS( AppointmentId, DoctorId, PatientId, AppDate, AppTime, AppointmentStatus)
VALUES (3,2,1,'13-APR-19','11:30','A');

INSERT INTO APPOINTMENTS( AppointmentId, DoctorId, PatientId, AppDate, AppTime, AppointmentStatus)
VALUES (4,2,1,'15-APR-19','9:00','A');

COMMIT;