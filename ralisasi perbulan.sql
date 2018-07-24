CREATE TABLE DATA_3(
department VARCHAR(2),
bulan VARCHAR(10),
nilai INT
);

INSERT INTO DATA_3 VALUES ('AA', '1', 1);
INSERT INTO DATA_3 VALUES ('AA', '2', 4);
INSERT INTO DATA_3 VALUES ('BB', '3', 6);
INSERT INTO DATA_3 VALUES ('BB', '3', 7);
INSERT INTO DATA_3 VALUES ('CC', '5', 7);
INSERT INTO DATA_3 VALUES ('CC', '6', 7);
INSERT INTO DATA_3 VALUES ('DD', '6', 8);
INSERT INTO DATA_3 VALUES ('EE', '8', 4);
INSERT INTO DATA_3 VALUES ('FF', '12', 4);
INSERT INTO DATA_3 VALUES ('FF', '12', 4);


SELECT department
, SUM(CASE WHEN bulan = 1 THEN nilai END) Janu
, SUM(CASE WHEN bulan = 2 THEN nilai END) Feb
, SUM(CASE WHEN bulan = 3 THEN nilai END) Mar
, SUM(CASE WHEN bulan = 4 THEN nilai END) Apr
, SUM(CASE WHEN bulan = 5 THEN nilai END) May
, SUM(CASE WHEN bulan = 6 THEN nilai END) Jun
, SUM(CASE WHEN bulan = 7 THEN nilai END) Jul
, SUM(CASE WHEN bulan = 8 THEN nilai END) Aug
, SUM(CASE WHEN bulan = 9 THEN nilai END) Sep
, SUM(CASE WHEN bulan = 10 THEN nilai END) Oct
, SUM(CASE WHEN bulan = 11 THEN nilai END) Nov
, SUM(CASE WHEN bulan = 12 THEN nilai END) Dec
From DATA_3
GROUP BY department;
