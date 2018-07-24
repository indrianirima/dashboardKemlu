CREATE TABLE KON_UM(
	JENIS VARCHAR(10) NOT NULL,
	PAGU INT ,
	PRIMARY KEY(jenis)
);

INSERT INTO KON_UM VALUEs ('perwakilan',2877000);
INSERT INTO KON_UM VALUEs ('pusat',4290000);

select * from kon_um;

drop table kon_um;

SELECT pagu from kon_um WHERE jenis='perwakilan';

