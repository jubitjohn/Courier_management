/*Anushika p j */
create table branches(
    id           int(20) NOT NULL AUTO_INCREMENT,
    BranchID        int             not null,
    BranchName      varchar(255)    not null,
    District        varchar(50)     not null,
    City            varchar(255)    not null,
    ContactNum      varchar(15)     not null,
    Pin_code        varchar(10)     not null,
     PRIMARY KEY(id)
);


/*JUBIT*/
-- Table for parcel
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





/*AAKHIL*/
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


/*JOUHAR*/
CREATE TABLE parcel_tracks (
  `id` int(30) NOT NULL,
  `parcel_id` int(30) NOT NULL,
  `parcel_status` text NOT NULL, 
   PRIMARY KEY(id)
);























































































--anushika

--jouhar

--aakhil

