create database unitydatabase;
use unitydatabase;
select * from nadra;
drop table nadra;

CREATE TABLE nadra (
    cnic INT PRIMARY KEY,
    name VARCHAR(30),
    address VARCHAR(50),
    dob DATE
);

CREATE TABLE Item (
  ItemID INT NOT NULL AUTO_INCREMENT,
  Itemname VARCHAR(45) NOT NULL DEFAULT 'new item',
  price int,
  Stock INT NULL DEFAULT 2,
  PRIMARY KEY (ItemID)
);
  
CREATE TABLE bridge (
    CustomerEmail varchar(30),
    ItemID int,
    itemName varchar(10),
    purchase_date date,
    foreign key (CustomerEmail) references user(email),
    foreign key (itemID) references item(itemID)
);


CREATE TABLE Bank (
    Account_Number VARCHAR(15) PRIMARY KEY,
    Beneficiary_name VARCHAR(30),
    Beneficiary_CNIC INT unique,
    Amount INT,
    foreign key (Beneficiary_CNIC) references nadra(CNIC)
);

CREATE TABLE Transactions (
    TransactionID int PRIMARY KEY,
    Beneficiary_CNIC INT,
    Amount INT,
    transaction_date datetime,
    foreign key (Beneficiary_CNIC) references nadra(CNIC)
);

CREATE TABLE education (
    ID INT unique,
    name VARCHAR(30),
    enrollment_date date,
    program VARCHAR(30),
    foreign key (ID) references nadra(CNIC)
);

CREATE TABLE employee (
    employeeID INT unique,
    employee_name varchar(30),
    department VARCHAR(30),
    job_title VARCHAR(30),
    join_date DATE,
	salary int,
    foreign key (employeeID) references nadra(CNIC)
);

CREATE TABLE user (
    username VARCHAR(30),
    password VARCHAR(30),
    email varchar(30) primary key,
    cnic int default 0,
    avatar INT,
    clothIndex int default 0,
    wallet int default 500
);

CREATE TABLE policeStation (
    criminalID INT,
    crime_description VARCHAR(30),
    fine_amount INT,
    crime_date datetime,
    foreign key (criminalID) references nadra(CNIC)
);

select * from item;
select * from nadra;
select * from bank;
select * from bridge;
select * from policeStation;
select * from transactions;
select * from user;
select * from education;

truncate user;
drop table bridge;

delete from transactions where transaction_date > '2023-06-16 00:00:00';
update item set stock = 2;

