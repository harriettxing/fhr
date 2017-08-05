insert into provider_type (description) values ('physician');
insert into provider_type (description) values ('lab');
insert into provider_type (description) values ('hospital');


insert into provider (name, address_id, phone, fax, email, provider_type)
values
('John Hopkins Physicians', 1, '240.123.1234', '301.123.1234', 'doctor@test.com', 1);

insert into provider (name, address_id, phone, fax, email, provider_type)
values
('Shady Grove Radiology', 2, '240.123.1234', '301.123.1234', 'lab@test.com', 2);

insert into provider (name, address_id, phone, fax, email, provider_type)
values
('Shady Grove Hospital', 1, '240.123.1234', '301.123.1234', 'hospital@test.com', 3);

insert into provider (name, address_id, phone, fax, email, provider_type)
values
('Capital Digestive Consultants', 1, '240.123.1234', '301.123.1234', 'gi@test.com', 3);

insert into prescription (dosage, frequency, description, active, note)
values
('24mg', 'daily', 'Amitiza', 1, '');

insert into prescription (dosage, frequency, description, active, note)
values
('10mg', 'daily', 'Miralax', 1, '');

insert into insurance_type (description) values ('Medical');
insert into insurance_type (description) values ('Dental');
insert into insurance_type (description) values ('Vision');

insert into insurance (address_id, phone, secondary, insurance_type, effective_date, policy_no, group_id, carrier)
values
(1, '800.888.8888', 0, 1, str_to_date('01/01/2017', '%m/%d/%Y'), 'B123123', '99K1', 'Carefirst');
