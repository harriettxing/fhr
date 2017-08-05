drop table provider_type;
create table provider_type
(id               int auto_increment,
 description      varchar(50),
 primary key (id)
) engine=innodb;

drop table provider;
create table provider
(id               int auto_increment,
 name             varchar(50),
 address_id       int,
 phone            varchar(50),
 fax              varchar(50),
 email            varchar(50),
 provider_type    int,
 primary key (id),
 foreign key (address_id) references address(id) on delete cascade,
 foreign key (provider_type) references provider_type(id) on delete cascade
) engine=innodb;
 
drop table address; 
create table address
(id               int auto_increment,
 street           varchar(100),
 city             varchar(50),
 state            varchar(50),
 zip              varchar(20),
 country          varchar(50),
 primary key(id)
) engine=innodb;

drop table insurance_type;
create table insurance_type
(id               int auto_increment,
 description      varchar(50),
 primary key (id)
) engine=innodb;

drop table insurance;
create table insurance
(id               int auto_increment,
 address_id       int,
 phone            varchar(50),
 secondary        smallint,
 insurance_type   int,
 effective_date   date,
 end_date         date,
 policy_no        varchar(50),
 group_id         varchar(50),
 carrier          varchar(50),
 primary key(id),
 foreign key(address_id) references address(id) on delete cascade,
 foreign key(insurance_type) references insurance_type(id) on delete cascade
) engine=innodb;

drop table prescription;
create table prescription
(id                   int auto_increment,
 dosage               varchar(50),
 frequency            varchar(50),
 description          varchar(50),
 active               smallint,
 note                 varchar(2000),
 provider_id          int,
 primary key (id),
 
) engine=innodb;

drop table patient;
create table patient
(id                   int auto_increment,
 name                 varchar(100),
 DOB                  date,
 gender               char(1),
 address_id           int,
 phone                varchar(50),
 email                varchar(50),
 primary key(id),
 foreign key(address_id) references address(id) on delete cascade
) engine=innodb;

drop table visit_type;
create table visit_type
(id                   int auto_increment,
 description          varchar(200),
 primary key (id)
) engine=innodb;

drop table visit;
create table visit
(id                   int auto_increment,
 visit_date           date,
 symptoms             varchar(2000),
 patient_id           int,
 referrer_id          int,
 provider_id          int,
 insurance_id         int,
 note                 varchar(2000),
 visit_type           int,
 primary key (id),
 foreign key (patient_id) references patient(id) on delete cascade,
 foreign key (referrer_id) references provider(id) on delete cascade,
 foreign key (provider_id) references provider(id) on delete cascade,
 foreign key (insurance_id) references insurance(id) on delete cascade
) engine=innodb;










 
 
 
 