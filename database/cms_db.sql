/*Anushika p j */
create table branches(
    BranchID        int             not null,
    BranchName      varchar(255)    not null,
    District        varchar(50)     not null,
    City            varchar(255)    not null,
    ContactNum      varchar(15)     not null,
    Pin_code        varchar(10)     not null
)


/*JUBIT*/
-- Table for parcel
 CREATE TABLE parcel(
     id           int(20) NOT NULL,
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
     p_status       text NOT NULL

 );





/*AAKHIL*/
create table staff(
    StaffID         int             not null,
    StaffName       varchar(255)    not null,
    District        varchar(50)     not null,
    City            varchar(255)    not null,
    PhoneNum        varchar(15)     not null,
    email           varchar(10)     not null,
    BranchName      varchar(255)    not null
)


/*JOUHAR*/























































































--anushika

--jouhar

--aakhil

