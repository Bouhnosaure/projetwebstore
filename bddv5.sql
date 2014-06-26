/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr?tion :  23/06/2014 11:49:50                      */
/*==============================================================*/


drop table if exists ADDRESS;

drop table if exists ARTICLES;

drop table if exists ARTICLESTATEMENTS;

drop table if exists BOOKSELLERS;

drop table if exists CATEGORIES;

drop table if exists CITY;

drop table if exists CIVILITY;

drop table if exists CONTAIN;

drop table if exists CUSTOMERS;

drop table if exists OPINION;

drop table if exists ORDERS;

drop table if exists ORDERSTATEMENTS;

drop table if exists SPECIFICATIONS;

drop table if exists TVA;

drop table if exists TYPE;

/*==============================================================*/
/* Table : ADDRESS                                              */
/*==============================================================*/
create table ADDRESS
(
   IDADDRESS             int not null auto_increment,
   IDCITY               int not null,
   ADDRESS1             text,
   ADDRESS2             text,
   primary key (IDADDRESS)
);

/*==============================================================*/
/* Table : ARTICLES                                             */
/*==============================================================*/
create table ARTICLES
(
   IDARTICLE            int not null auto_increment,
   IDARTICLESTATEMENT   int not null,
   IDCATEGORY           int not null,
   LABELARTICLE         text,
   DESCRIPTION          text,
   PRICE                float(8,2),
   QUANTITYSTOCK        numeric(8,0),
   DATECREATEARTICLE    date,
   DATELASTMODIF        date,
   THRESHOLDSTOCK       numeric(8,0),
   IMAGE                text,
   primary key (IDARTICLE)
);

/*==============================================================*/
/* Table : ARTICLESTATEMENTS                                    */
/*==============================================================*/
create table ARTICLESTATEMENTS
(
   IDARTICLESTATEMENT   int not null auto_increment,
   ARTICLESTATEMENT     text,
   primary key (IDARTICLESTATEMENT)
);

/*==============================================================*/
/* Table : BOOKSELLERS                                          */
/*==============================================================*/
create table BOOKSELLERS
(
   IDSELLER             int not null auto_increment,
   LASTNAMESELLER       text,
   FIRSTNAMESELLER      text,
   USERNAMESELLER       text,
   PASSWORDSELLER       text,
   primary key (IDSELLER)
);

/*==============================================================*/
/* Table : CATEGORIES                                           */
/*==============================================================*/
create table CATEGORIES
(
   IDCATEGORY           int not null auto_increment,
   NAMECATEGORY         text,
   primary key (IDCATEGORY)
);

/*==============================================================*/
/* Table : CITY                                                 */
/*==============================================================*/
create table CITY
(
   IDCITY               int not null auto_increment,
   CITY                 text,
   ZIPCODE              numeric(8,0),
   COUNTRY              text,
   primary key (IDCITY)
);

/*==============================================================*/
/* Table : CIVILITY                                             */
/*==============================================================*/
create table CIVILITY
(
   IDCIVILITY           int not null auto_increment,
   NAMECIVILITY         text,
   primary key (IDCIVILITY)
);

/*==============================================================*/
/* Table : CONTAIN                                              */
/*==============================================================*/
create table CONTAIN
(
   IDORDER              int not null,
   IDARTICLE            int not null,
   IDTVA                int not null,
   QUANTITYORDER        numeric(8,0),
   UNITARYPRICE         numeric(8,0),
   primary key (IDORDER, IDARTICLE, IDTVA)
);

/*==============================================================*/
/* Table : CUSTOMERS                                            */
/*==============================================================*/
create table CUSTOMERS
(
   IDCUSTOMER           int not null auto_increment,
   IDCIVILITY           int not null,
   IDADDRESS             int not null,
   USERNAME             text,
   PASSWORD             text,
   LASTNAME             text,
   FIRSTNAME            text,
   EMAIL                text,
   primary key (IDCUSTOMER)
);

/*==============================================================*/
/* Table : OPINION                                              */
/*==============================================================*/
create table OPINION
(
   IDARTICLE            int not null,
   IDCUSTOMER           int not null,
   NOTE                 numeric(8,0),
   CONTENT              text,
   primary key (IDARTICLE, IDCUSTOMER)
);

/*==============================================================*/
/* Table : ORDERS                                               */
/*==============================================================*/
create table ORDERS
(
   IDORDER              int not null auto_increment,
   IDORDERSTATEMENT     int not null,
   IDCUSTOMER           int not null,
   DATEORDER            datetime,
   ADDRESS1ORDER        text,
   ADDRESS2ORDER        text,
   CITYORDER            text,
   ZIPCODEORDER         numeric(8,0),
   COUNTRYORDER         text,
   DATEPAYMENTORDER     date,
   primary key (IDORDER)
);

/*==============================================================*/
/* Table : ORDERSTATEMENTS                                      */
/*==============================================================*/
create table ORDERSTATEMENTS
(
   IDORDERSTATEMENT     int not null auto_increment,
   ORDERSTATEMENT       text,
   primary key (IDORDERSTATEMENT)
);

/*==============================================================*/
/* Table : SPECIFICATIONS                                       */
/*==============================================================*/
create table SPECIFICATIONS
(
   IDSPECIFICATIONS     int not null auto_increment,
   IDARTICLE            int not null,
   IDTYPE               int not null,
   CONTENTSPECIFICATIONS varchar(500),
   primary key (IDSPECIFICATIONS)
);

/*==============================================================*/
/* Table : TVA                                                  */
/*==============================================================*/
create table TVA
(
   IDTVA                int not null auto_increment,
   RATE                 numeric(8,0),
   primary key (IDTVA)
);

/*==============================================================*/
/* Table : TYPE                                                 */
/*==============================================================*/
create table TYPE
(
   IDTYPE               int not null auto_increment,
   LABELTYPE            varchar(50),
   primary key (IDTYPE)
);

alter table ADDRESS add constraint FK_HAVE1 foreign key (IDCITY)
      references CITY (IDCITY) on delete restrict on update restrict;

alter table ARTICLES add constraint FK_BE foreign key (IDARTICLESTATEMENT)
      references ARTICLESTATEMENTS (IDARTICLESTATEMENT) on delete restrict on update restrict;

alter table ARTICLES add constraint FK_BELONG_TO foreign key (IDCATEGORY)
      references CATEGORIES (IDCATEGORY) on delete restrict on update restrict;

alter table CONTAIN add constraint FK_CONTAIN foreign key (IDORDER)
      references ORDERS (IDORDER) on delete restrict on update restrict;

alter table CONTAIN add constraint FK_CONTAIN2 foreign key (IDARTICLE)
      references ARTICLES (IDARTICLE) on delete restrict on update restrict;

alter table CONTAIN add constraint FK_CONTAIN3 foreign key (IDTVA)
      references TVA (IDTVA) on delete restrict on update restrict;

alter table CUSTOMERS add constraint FK_IS foreign key (IDCIVILITY)
      references CIVILITY (IDCIVILITY) on delete restrict on update restrict;

alter table CUSTOMERS add constraint FK_LIVE foreign key (IDADDRESS)
      references ADDRESS (IDADDRESS) on delete restrict on update restrict;

alter table OPINION add constraint FK_OPINION foreign key (IDARTICLE)
      references ARTICLES (IDARTICLE) on delete restrict on update restrict;

alter table OPINION add constraint FK_OPINION2 foreign key (IDCUSTOMER)
      references CUSTOMERS (IDCUSTOMER) on delete restrict on update restrict;

alter table ORDERS add constraint FK_HAS_1 foreign key (IDORDERSTATEMENT)
      references ORDERSTATEMENTS (IDORDERSTATEMENT) on delete restrict on update restrict;

alter table ORDERS add constraint FK_ORDER foreign key (IDCUSTOMER)
      references CUSTOMERS (IDCUSTOMER) on delete restrict on update restrict;

alter table SPECIFICATIONS add constraint FK_DISPOSE foreign key (IDTYPE)
      references TYPE (IDTYPE) on delete restrict on update restrict;

alter table SPECIFICATIONS add constraint FK_POSSESS foreign key (IDARTICLE)
      references ARTICLES (IDARTICLE) on delete restrict on update restrict;


INSERT INTO `booksellers`(`LASTNAMESELLER`, `FIRSTNAMESELLER`, `USERNAMESELLER`, `PASSWORDSELLER`) VALUES ("Samuel", "Bobo", "sbobo", "sbobo");

INSERT INTO `articlestatements`( `ARTICLESTATEMENT`) VALUES ("In stock");
INSERT INTO `articlestatements`( `ARTICLESTATEMENT`) VALUES ("New");
INSERT INTO `articlestatements`( `ARTICLESTATEMENT`) VALUES ("Out of stock");

INSERT INTO `orderstatements`(`ORDERSTATEMENT`) VALUES ("In preparation");
INSERT INTO `orderstatements`(`ORDERSTATEMENT`) VALUES ("Pending");
INSERT INTO `orderstatements`(`ORDERSTATEMENT`) VALUES ("int routing");

INSERT INTO `type`(`LABELTYPE`) VALUES ("Descriptive");
INSERT INTO `type`(`LABELTYPE`) VALUES ("Writer");
INSERT INTO `type`(`LABELTYPE`) VALUES ("Producer");
INSERT INTO `type`(`LABELTYPE`) VALUES ("Director");

INSERT INTO `categories` ( `NAMECATEGORY` ) VALUES ("DVD");
INSERT INTO `categories` ( `NAMECATEGORY` ) VALUES ("CD");

INSERT INTO `civility`( `NAMECIVILITY`) VALUES ("Mrs.");
INSERT INTO `civility`( `NAMECIVILITY`) VALUES ("Mr.");

INSERT INTO `city`(`CITY`, `ZIPCODE`, `COUNTRY`) VALUES ("Bordeaux", 33000, "France");
INSERT INTO `city`(`CITY`, `ZIPCODE`, `COUNTRY`) VALUES ("Blanquefort", 33290, "France");

INSERT INTO `address`( `IDCITY`, `ADDRESS1`, `ADdRESS2`) VALUES (2, "67 rue du maurian", "");

INSERT INTO `customers`( `IDCIVILITY`, `IDADDRESS`, `USERNAME`, `PASSWORD`, `LASTNAME`, `FIRSTNAME`, `EMAIL`) VALUES (1, 1,"Fenris", "sam", "Samuel", "Bob", "s.bobo@viacesi.fr");