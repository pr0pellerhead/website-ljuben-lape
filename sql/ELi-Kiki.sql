insert into tip_profesori
(tip)
values
('Oddelenski'),
('Nastaven');

update tip_profesori
set
tip = 'Predmeten'
where 
id = 2;

insert into profesor
(ime, predmet, priemen_den, priemen_cas, id_tip_profesor, slika, biografija)
values
('Sanja Stanisavevska', 'Biologija', 'Ponedelnik', '14:00', 2, 'images/1.jpg', 'Lorem ipsum'),
('Mimi Danailova', 'Tehnicko', 'Petok', '09:30', 2, 'images/2.jpg', 'Lorem ipsum'), 
('Lazo Lazeski', 'Oddelenski', 'Sreda', '13:00', 1, 'images/4.jpg', 'Lorem ipsum');

-- Profesori od oddelenska nastava
select * from profesor
where
id_tip_profesor = 2;

-- Prikazuva imeto, predmet i kakov prof
select prof.ime, prof.predmet, tip_prof.tip
from profesor prof
join tip_profesori tip_prof
on prof.id_tip_profesor = tip_prof.id;

-- Gi prikazuva oddelenskite nastavnici
select prof.ime, prof.predmet, tip_prof.tip
from profesor prof
join tip_profesori tip_prof
on prof.id_tip_profesor = tip_prof.id
where 
prof.id_tip_profesor = 1;

-- Samo predmetni nastavnici
select prof.ime, prof.predmet, tip_prof.tip
from profesor prof
join tip_profesori tip_prof
on prof.id_tip_profesor = tip_prof.id
where 
prof.id_tip_profesor = 2;

insert into tip_korisnici
(tip)
values
('Admin'),
('Moderator'),
('Editor');

insert into korisnici
(ime, email, password, id_tip_korisnici)
values
('Mimi Prochkova', 'mimip@gmail.com', 'pass', 1),
('Elena Jancheva', 'angelaj@gmail.com', 'angela', 2),
('Filip Stoilkov', 'filipk@gmail.com', 'ficho', 3);

delete from tip_korisnici
where id=3;

-- Prikazi moderatori i email
select ko.ime, ko.email, tip_kor.tip
from korisnici ko
join tip_korisnici tip_kor
on ko.id_tip_korisnici = tip_kor.id
where
ko.id_tip_korisnici = 2;

-- Prikazi admini i email
select ko.ime, ko.email, tip_kor.tip
from korisnici ko
join tip_korisnici tip_kor
on ko.id_tip_korisnici = tip_kor.id
where
ko.id_tip_korisnici = 1;





