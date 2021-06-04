
create table branches (
    id          int(20) NOT NULL AUTO_INCREMENT,
    BranchID        int             not null,
    BranchName      varchar(255)    not null,
    District        varchar(50)     not null,
    City            varchar(255)    not null,
    ContactNum      varchar(15)     not null,
    Pin_code        varchar(10)     not null,
    PRIMARY KEY(id)
);

INSERT INTO branches (id, BranchID, BranchName, District , City,ContactNum,Pin_code)

 VALUES
  (1,  '10',     'firstbranch',  'Ernakulam',   'Kochi1',  '+91123456789',   '682020'),
  (2,  '20',     'secondbranch', 'Idukki',      'kochi2',  '+91098765432',   '682021'),
  (3,  '30',     'thirdbranch',  'Kollam',      'kochi3',  '+91234509876',   '682022');


 CREATE TABLE parcel(
     id           int(20) NOT NULL AUTO_INCREMENT,
     reference_no int(20) NOT NULl,
     sender_name  varchar(50) NOT NULL,
     sender_address text NOT NULl,
     sender_contact text NOT NULL,
     recipient_name varchar(50) NOT NULL,
     recipient_address text NOT NULl,
     recipient_contact text NOT NULL,
     from_branch_id varchar(30) NOT NULL,
     to_branch_id   varchar(30),
     p_weight       varchar(30),
     p_height       varchar(30),
     p_price        float NOT NULL,
     p_status       text NOT NULL,
     PRIMARY KEY(id)

 );

 INSERT INTO parcel(id,reference_no,sender_name,sender_address,sender_contact,recipient_name,recipient_address,recipient_contact,from_branch_id,to_branch_id,p_weight,p_height,p_price,p_status)
 VALUES (1,'12345678','jubit john','kizhakkemuri (h)','7356771642','Jerin','kottaikkal','9078263635','123','321',NULL,NULL,300,'Order Received'),
        (2,'12345678','john','kizhakkemuri (h)','2352523','Jerin','kottaikkal','9078263635','123','321',NULL,NULL,350,'Order Received');



create table staff(
    id           int(20) NOT NULL AUTO_INCREMENT,
    StaffID         int             not null,
    StaffName       varchar(255)    not null,
    District        varchar(50)     not null,
    City            varchar(255)    not null,
    PhoneNum        varchar(15)     not null,
    email           varchar(10)     not null,
    BranchName      varchar(255)    not null,
    PRIMARY KEY(id)
);
INSERT INTO staff(StaffID, StaffName, District, City, PhoneNum, email, BranchName)

 VALUES
  (1,  'Ellen',     'Ernakulam',     'Kalamassery',        '+911335587892',   'ellen.352@gmail.com',   'firstbranch'),
  (3,  'Claire',    'Kottayam',      'Changanassery',      '+910982454323',   'claire@gmail.com',      'secondbranch'),
  (4,  'Ben',       'Trivandrum',    'Pattom',             '+912572098764',   'benjohn@gmail.com',     'thirdbranch');

  

CREATE TABLE parcel_tracks (
    id int(30) NOT NULL AUTO_INCREMENT,
    parcel_id int(30) NOT NULL,
    parcel_status text NOT NULL, 
    PRIMARY KEY(id)
);
INSERT INTO parcel_tracks(id,parcel_id,parcel_status)
VALUES (1,'456','Order Shipped'),
       (2,'654','Order Delivered');

CREATE TABLE users (
  id int(11) NOT NULL,
  username varchar(255) NOT NULL,
  pass varchar(255) NOT NULL
);


INSERT INTO users(id, username, pass)

VALUES
(1, 'aakhil', 'aak'),
(2, 'jubit', 'jun'),
(3, 'anushika', 'anu'),
(4, 'anju', 'anj'),
(5, 'jouhar', 'jou');


























































































