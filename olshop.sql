DROP TABLE detail_order;
DROP TABLE order_brg;
DROP TABLE barang;
DROP TABLE bayar;
DROP TABLE pembeli;
DROP TABLE kategori;


DROP TABLE log_pembeli;
DROP TABLE log_order;
DROP TABLE log_order_detail;
DROP TABLE admin;


CREATE TABLE pembeli(
 pbl_id CHAR(5) NOT NULL PRIMARY KEY,
 pbl_nama	VARCHAR(50),
 pbl_alamat	VARCHAR(200),
 pbl_telp	VARCHAR(15),
 pbl_email	VARCHAR(100),
 pbl_status	VARCHAR(20)
);

CREATE TABLE bayar(
 byr_id		CHAR(5) NOT NULL PRIMARY KEY,
 byr_bank	VARCHAR(20),
 byr_rek	VARCHAR(20)
);

CREATE TABLE kategori(
 ktg_id		CHAR(5) NOT NULL PRIMARY KEY,
 ktg_nama	VARCHAR(20)
);

CREATE TABLE barang(
 brg_id		CHAR(5) NOT NULL PRIMARY KEY,
 ktg_id		CHAR(5) NOT NULL,
 brg_nama	VARCHAR(50),
 brg_harga	INT,
 brg_stok	INT,
 brg_ket	VARCHAR(10),
 FOREIGN KEY (ktg_id) REFERENCES kategori(ktg_id)
);

CREATE TABLE order_brg(
 od_id		CHAR(5) NOT NULL PRIMARY KEY,
 byr_id		CHAR(5) NOT NULL,
 pbl_id		CHAR(5) NOT NULL,
 od_jumlah	INT,
 od_total	INT,
 od_tglbeli	DATE,
 FOREIGN KEY (byr_id) REFERENCES bayar(byr_id),
 FOREIGN KEY (pbl_id) REFERENCES pembeli(pbl_id)
);

CREATE TABLE detail_order(
 od_id		CHAR(5) NOT NULL,
 brg_id		CHAR(5) NOT NULL,
 jumlah		INT,
 FOREIGN KEY (od_id) REFERENCES order_brg(od_id),
 FOREIGN KEY (brg_id) REFERENCES barang(brg_id)
);

CREATE TABLE admin(
  username	VARCHAR(20),
  pass_word	VARCHAR(30)
);

ALTER TABLE order_brg
 ADD od_total_pjk INT;

INSERT INTO admin VALUES ('mutia','yahud');
INSERT INTO admin VALUES ('yasinta','maknyus');

INSERT INTO pembeli VALUES ('BL001','Mutia','Jl. Citraraya Utama Kotamandiri Citraraya','(031)5455021', 'mutia.kim@yahoo.com', 'reseller');
INSERT INTO pembeli VALUES ('BL002','Yasinta','Jl. Raya Jemursari 203-205 Pert Jemur Raya Blok B/9-10','(031)5471862','choi.cieya@ymail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL003','Navinda','Jl. Darmo Harapan I Kav 2-3','(031)5981737','navvv@gmail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL004','Romadhona','Jl. Kalisari Utara I No.107, Kalisari, Mulyorejo','(031)7316797','rorodho@gmail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL005','Dhona','Jl. Jendral A Yani 73 Maspion Square Blok G/22','(031)8430472','nanana@yahoo.com','pelanggan');
INSERT INTO pembeli VALUES ('BL006','Vinda','Jl. Manyar Kertoarjo VIII 3','(031)5012476', 'ndavinda@ymail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL007','Fitri','Jl. Kom L Yos Sudarso 11',	'(031)5356942','fitrrrie@yahoo.com','reseller');
INSERT INTO pembeli VALUES ('BL008','Gebrina','Jl. HR Muhammad 373-383 Ruko Golden Palace Blok A/18-19','(031)5476012','gebrinaz@yahoo.com','pelanggan');
INSERT INTO pembeli VALUES ('BL009','Mayza','Jl. Mayjend Sungkono 180',	'(031)5316645','edamayza@yahoo.com','pelanggan');
INSERT INTO pembeli VALUES ('BL010','Rere','Jl. Jendral Basuki Rachmad 8-12 Plaza Tunjungan IV 35-36 Lt. 1','(031)5994534','rere.e33@ymail.com', 'pelanggan');
INSERT INTO pembeli VALUES ('BL011','Joni','Jl. Pemuda 31-37 Plaza Boulevard', '(031)8415963', 'johniye@gmail.com','reseller');
INSERT INTO pembeli VALUES ('BL012','Kimi','Jl. Jendral Basuki Rachmad 2-12 Plaza Tunjungan III', '(031)5476582', 'kimi.kr@gmail.com', 'pelanggan');
INSERT INTO pembeli VALUES ('BL013','Fernando','Jl. Raya Lontar Pakuwon Trade Center', '(031)5450530', 'fernand@yahoo.com', 'pelanggan');
INSERT INTO pembeli VALUES ('BL014','Anita','Jl. Kasuari Ruko Permata Jembatan Merah Blok A/17', '(031)5027531', 'anittt4@ymail.com', 'pelanggan');
INSERT INTO pembeli VALUES ('BL015','Sahara','Jl. Delta Raya Selatan 38','(031)5991944','etasaha@yahoo.com','pelanggan');
INSERT INTO pembeli VALUES ('BL016','Benedict','Jl. Klampis Jaya Blok B/1','(031)5455606','ben.d3ict@ymail.com','reseller');
INSERT INTO pembeli VALUES ('BL017','Laura','Jl. Abdul Wahab Siamin 2-8 Mall Golden City 1','(031)5039489','laucint.aall@ymail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL018','Qiandra','Jl. Embong Malang 25-31 Sheraton Surabaya Hotel & Tower','(031)5016300','qiaqiqi@ymail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL019','Kiehl','Jl. Kalirungkut 27 Ruko Rungkut Makmur Blok D/19-21','(031)5478700','ehlaki@yahoo.com','pelanggan');
INSERT INTO pembeli VALUES ('BL020','Siti','Jl. Tenggilis Mejoyo Blok AI/23','(031)8419572','siti.sicantik@gmail.com','reseller');
INSERT INTO pembeli VALUES ('BL021','Steven','Jl. Gubeng Masjid Perumka','(031)8414054','stvv3bu@ymail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL022','Gerrard','Jl. Raya Arjuna 78-F','(031)5350076','rardrare@yahoo.com','pelanggan');
INSERT INTO pembeli VALUES ('BL023','Frank','Jl. Manyar Kertoarjo 75','(031)5949369','frankyou@yahoo.com','pelanggan');
INSERT INTO pembeli VALUES ('BL024','Lampard','Jl. Nginden Intan Raya 1-A','(031)3890308','lampadang@yahoo.com','pelanggan');
INSERT INTO pembeli VALUES ('BL025','Oliver','Jl. Siwalankerto 95','(031)5451151','olivoil@gmail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL026','Kent','Jl. Krembangan Bakti XIII 5','(031)8540142','oyamazaki@gmail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL027','Amylee','Jl. Taman Sampoerna 6','(031)8482660','evaneslee@ymail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL028','Jubaedah','Jl. Pregolan 1-5 Mex Building','(031)5312036','jubedsyantiq@ymail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL029','Soekamti','Jl. P Diponegoro 111','(031)5016934','soekrosoek@ymail.com','pelanggan');
INSERT INTO pembeli VALUES ('BL030','Endank','Jl. Abdul Wahab Siamin 2-8 Mall Golden City 1','(031)8291220','dankend4nk@gmail.com','pelanggan');


INSERT INTO bayar VALUES ('BYR01', 'BRI', '1412567890');
INSERT INTO bayar VALUES ('BYR02', 'BNI', '4480926175');
INSERT INTO bayar VALUES ('BYR03', 'MANDIRI', '3612080812');
INSERT INTO bayar VALUES ('BYR04', 'BCA', '1090141298');


INSERT INTO kategori VALUES ('KTG01', 'Wanita');
INSERT INTO kategori VALUES ('KTG02', 'Pria');
INSERT INTO kategori VALUES ('KTG03', 'Anak');


INSERT INTO barang VALUES ('BR001','KTG01','Black Tie Up Cullote',150000,100,'ada');
INSERT INTO barang VALUES ('BR002','KTG01','Navy Tie Up Cullote',150000,100,'ada');
INSERT INTO barang VALUES ('BR003','KTG01','White Polka Blazer',140000,100,'ada');
INSERT INTO barang VALUES ('BR004','KTG01','Grey Polka Blazer',140000,100,'ada');
INSERT INTO barang VALUES ('BR005','KTG01','Black Basic Long Outer',180000,100,'ada');
INSERT INTO barang VALUES ('BR006','KTG02','Casual Trouser',140000,100,'ada');
INSERT INTO barang VALUES ('BR007','KTG02','Round Neck T-Shirt',90000,150,'ada');
INSERT INTO barang VALUES ('BR008','KTG02','Solid V-Neck T-Shirt',100000,100,'ada');
INSERT INTO barang VALUES ('BR009','KTG02','Casual Blazer',250000,100,'ada');
INSERT INTO barang VALUES ('BR010','KTG02','Regular Fit Shorts',90000,150,'ada');
INSERT INTO barang VALUES ('BR011','KTG03','Pleated Skirt Cream',80000,150,'ada');
INSERT INTO barang VALUES ('BR012','KTG03','Parka Navy',140000,100,'ada');
INSERT INTO barang VALUES ('BR013','KTG03','Collar Dress Chambray',80000,100,'ada');
INSERT INTO barang VALUES ('BR014','KTG03','Shoulder Jumpsuit',90000,100,'ada');
INSERT INTO barang VALUES ('BR015','KTG03','Parka Yellow',140000,100,'ada');
INSERT INTO barang VALUES ('BR016','KTG01','Women Pumps',200000,100,'ada');
INSERT INTO barang VALUES ('BR017','KTG01','Women Sandals',150000,100,'ada');
INSERT INTO barang VALUES ('BR018','KTG01','Solid Wedges',270000,100,'ada');
INSERT INTO barang VALUES ('BR019','KTG01','Cation Maxi Top',310000,50,'ada');
INSERT INTO barang VALUES ('BR020','KTG01','Striped Top',260000,100,'ada');
INSERT INTO barang VALUES ('BR021','KTG02','Men Loafers',200000,100,'ada');
INSERT INTO barang VALUES ('BR022','KTG02','Men Sneakers',300000,50,'ada');
INSERT INTO barang VALUES ('BR023','KTG02','Red Tape',250000,100,'ada');
INSERT INTO barang VALUES ('BR024','KTG02','Puma Men Jacket',350000,50,'ada');
INSERT INTO barang VALUES ('BR025','KTG02','Sporty Jacket',230000,100,'ada');
INSERT INTO barang VALUES ('BR026','KTG02','Soft Stripe Shirt',150000,100,'ada');
INSERT INTO barang VALUES ('BR027','KTG03','Spicy Print Sweater',80000,150,'ada');
INSERT INTO barang VALUES ('BR028','KTG03','3 Per 4 Raglan T-Shirt',80000,150,'ada');
INSERT INTO barang VALUES ('BR029','KTG01','Cardigan Lumense',120000,100,'ada');
INSERT INTO barang VALUES ('BR030','KTG01','Love Patch Sweatshirt',150000,100,'ada');


INSERT INTO order_brg VALUES ('OD001','BYR02','BL002',4, 580000,'2018/05/02');
INSERT INTO order_brg VALUES ('OD002','BYR02','BL003',2, 290000,'2018/05/02');
INSERT INTO order_brg VALUES ('OD003','BYR01','BL004',5, 680000,'2018/05/02');
INSERT INTO order_brg VALUES ('OD004','BYR01','BL005',1, 270000,'2018/05/04');
INSERT INTO order_brg VALUES ('OD005','BYR01','BL006',3, 260000,'2018/05/05');
INSERT INTO order_brg VALUES ('OD006','BYR03','BL008',4, 1050000,'2018/05/05');
INSERT INTO order_brg VALUES ('OD007','BYR04','BL009',3, 370000,'2018/05/05');
INSERT INTO order_brg VALUES ('OD008','BYR04','BL010',5, 1330000,'2018/05/05');
INSERT INTO order_brg VALUES ('OD009','BYR04','BL012',2, 430000,'2018/05/06');
INSERT INTO order_brg VALUES ('OD010','BYR04','BL013',2, 190000,'2018/05/06');
INSERT INTO order_brg VALUES ('OD011','BYR03','BL014',3, 370000,'2018/05/06');
INSERT INTO order_brg VALUES ('OD012','BYR02','BL015',1, 270000,'2018/05/07');
INSERT INTO order_brg VALUES ('OD013','BYR02','BL017',4, 600000,'2018/05/07');
INSERT INTO order_brg VALUES ('OD014','BYR03','BL018',1, 90000,'2018/05/08');
INSERT INTO order_brg VALUES ('OD015','BYR03','BL019',2, 280000,'2018/05/08');
INSERT INTO order_brg VALUES ('OD016','BYR03','BL008',1, 90000,'2018/05/08');
INSERT INTO order_brg VALUES ('OD017','BYR03','BL018',3, 500000,'2018/05/08');
INSERT INTO order_brg VALUES ('OD018','BYR02','BL003',3, 350000,'2018/05/10');
INSERT INTO order_brg VALUES ('OD019','BYR04','BL012',2, 190000,'2018/05/10');
INSERT INTO order_brg VALUES ('OD020','BYR03','BL008',2, 280000,'2018/05/12');
INSERT INTO order_brg VALUES ('OD021','BYR04','BL001',37, 3300000,'2018/05/12');
INSERT INTO order_brg VALUES ('OD022','BYR02','BL007',20, 5700000,'2018/05/12');
INSERT INTO order_brg VALUES ('OD023','BYR01','BL011',15, 2250000,'2018/05/13');
INSERT INTO order_brg VALUES ('OD024','BYR01','BL016',29, 6330000,'2018/05/13');
INSERT INTO order_brg VALUES ('OD025','BYR03','BL020',55, 6650000,'2018/05/14');
INSERT INTO order_brg VALUES ('OD026','BYR01','BL011',37, 4880000,'2018/05/14');
INSERT INTO order_brg VALUES ('OD027','BYR02','BL007',30, 6000000,'2018/05/14');
INSERT INTO order_brg VALUES ('OD028','BYR04','BL001',52, 6080000,'2018/05/15');
INSERT INTO order_brg VALUES ('OD029','BYR01','BL011',25, 4950000,'2018/05/15');
INSERT INTO order_brg VALUES ('OD030','BYR01','BL016',30, 4600000,'2018/05/16');
INSERT INTO order_brg VALUES ('OD031','BYR02','BL021',1, 260000,'2018/05/17');
INSERT INTO order_brg VALUES ('OD032','BYR02','BL022',3, 250000,'2018/05/17');
INSERT INTO order_brg VALUES ('OD033','BYR02','BL023',3, 300000,'2018/05/17');
INSERT INTO order_brg VALUES ('OD034','BYR03','BL024',3, 430000,'2018/05/17');
INSERT INTO order_brg VALUES ('OD035','BYR03','BL025',2, 400000,'2018/05/17');
INSERT INTO order_brg VALUES ('OD036','BYR04','BL026',1, 270000,'2018/05/17');
INSERT INTO order_brg VALUES ('OD037','BYR04','BL027',1, 260000,'2018/05/18');
INSERT INTO order_brg VALUES ('OD038','BYR04','BL028',4, 700000,'2018/05/18');
INSERT INTO order_brg VALUES ('OD039','BYR01','BL029',2, 200000,'2018/05/19');
INSERT INTO order_brg VALUES ('OD040','BYR01','BL030',4, 390000,'2018/05/19');


INSERT INTO detail_order VALUES ('OD001','BR001',2);
INSERT INTO detail_order VALUES ('OD001','BR003',2);
INSERT INTO detail_order VALUES ('OD002','BR002',1);
INSERT INTO detail_order VALUES ('OD002','BR004',1);
INSERT INTO detail_order VALUES ('OD003','BR007',3);
INSERT INTO detail_order VALUES ('OD003','BR008',1);
INSERT INTO detail_order VALUES ('OD003','BR019',1);
INSERT INTO detail_order VALUES ('OD004','BR018',1);
INSERT INTO detail_order VALUES ('OD005','BR014',2);
INSERT INTO detail_order VALUES ('OD005','BR011',1);
INSERT INTO detail_order VALUES ('OD006','BR005',1);
INSERT INTO detail_order VALUES ('OD006','BR009',1);
INSERT INTO detail_order VALUES ('OD006','BR019',2);
INSERT INTO detail_order VALUES ('OD007','BR003',1);
INSERT INTO detail_order VALUES ('OD007','BR004',1);
INSERT INTO detail_order VALUES ('OD007','BR007',1);
INSERT INTO detail_order VALUES ('OD008','BR021',1);
INSERT INTO detail_order VALUES ('OD008','BR022',1);
INSERT INTO detail_order VALUES ('OD008','BR023',1);
INSERT INTO detail_order VALUES ('OD008','BR024',1);
INSERT INTO detail_order VALUES ('OD008','BR025',1);
INSERT INTO detail_order VALUES ('OD009','BR005',1);
INSERT INTO detail_order VALUES ('OD009','BR009',1);
INSERT INTO detail_order VALUES ('OD010','BR007',1);
INSERT INTO detail_order VALUES ('OD010','BR008',1);
INSERT INTO detail_order VALUES ('OD011','BR013',1);
INSERT INTO detail_order VALUES ('OD011','BR014',1);
INSERT INTO detail_order VALUES ('OD011','BR016',1);
INSERT INTO detail_order VALUES ('OD012','BR018',1);
INSERT INTO detail_order VALUES ('OD013','BR001',1);
INSERT INTO detail_order VALUES ('OD013','BR002',1);
INSERT INTO detail_order VALUES ('OD013','BR008',1);
INSERT INTO detail_order VALUES ('OD013','BR016',1);
INSERT INTO detail_order VALUES ('OD014','BR007',1);
INSERT INTO detail_order VALUES ('OD015','BR003',1);
INSERT INTO detail_order VALUES ('OD015','BR004',1);
INSERT INTO detail_order VALUES ('OD016','BR014',1);
INSERT INTO detail_order VALUES ('OD017','BR018',1);
INSERT INTO detail_order VALUES ('OD017','BR026',1);
INSERT INTO detail_order VALUES ('OD017','BR027',1);
INSERT INTO detail_order VALUES ('OD018','BR028',1);
INSERT INTO detail_order VALUES ('OD018','BR029',1);
INSERT INTO detail_order VALUES ('OD018','BR030',1);
INSERT INTO detail_order VALUES ('OD019','BR008',1);
INSERT INTO detail_order VALUES ('OD019','BR014',1);
INSERT INTO detail_order VALUES ('OD020','BR013',1);
INSERT INTO detail_order VALUES ('OD020','BR016',1);
INSERT INTO detail_order VALUES ('OD021','BR008',12);
INSERT INTO detail_order VALUES ('OD021','BR013',15);
INSERT INTO detail_order VALUES ('OD021','BR014',10);
INSERT INTO detail_order VALUES ('OD022','BR019',10);
INSERT INTO detail_order VALUES ('OD022','BR020',10);
INSERT INTO detail_order VALUES ('OD023','BR001',15);
INSERT INTO detail_order VALUES ('OD024','BR005',12);
INSERT INTO detail_order VALUES ('OD024','BR016',10);
INSERT INTO detail_order VALUES ('OD024','BR019',7);
INSERT INTO detail_order VALUES ('OD025','BR012',10);
INSERT INTO detail_order VALUES ('OD025','BR017',15);
INSERT INTO detail_order VALUES ('OD025','BR003',10);
INSERT INTO detail_order VALUES ('OD025','BR011',20);
INSERT INTO detail_order VALUES ('OD026','BR011',15);
INSERT INTO detail_order VALUES ('OD026','BR014',12);
INSERT INTO detail_order VALUES ('OD026','BR020',10);
INSERT INTO detail_order VALUES ('OD027','BR002',15);
INSERT INTO detail_order VALUES ('OD027','BR009',15);
INSERT INTO detail_order VALUES ('OD028','BR004',12);
INSERT INTO detail_order VALUES ('OD028','BR006',10);
INSERT INTO detail_order VALUES ('OD028','BR011',20);
INSERT INTO detail_order VALUES ('OD028','BR015',10);
INSERT INTO detail_order VALUES ('OD029','BR017',15);
INSERT INTO detail_order VALUES ('OD029','BR018',10);
INSERT INTO detail_order VALUES ('OD030','BR008',20);
INSERT INTO detail_order VALUES ('OD030','BR020',10);
INSERT INTO detail_order VALUES ('OD031','BR020',1);
INSERT INTO detail_order VALUES ('OD032','BR013',2);
INSERT INTO detail_order VALUES ('OD032','BR014',1);
INSERT INTO detail_order VALUES ('OD033','BR008',3);
INSERT INTO detail_order VALUES ('OD034','BR002',1);
INSERT INTO detail_order VALUES ('OD034','BR006',1);
INSERT INTO detail_order VALUES ('OD034','BR012',1);
INSERT INTO detail_order VALUES ('OD035','BR009',1);
INSERT INTO detail_order VALUES ('OD035','BR017',1);
INSERT INTO detail_order VALUES ('OD036','BR018',1);
INSERT INTO detail_order VALUES ('OD037','BR020',1);
INSERT INTO detail_order VALUES ('OD038','BR001',2);
INSERT INTO detail_order VALUES ('OD038','BR016',2);
INSERT INTO detail_order VALUES ('OD039','BR008',2);
INSERT INTO detail_order VALUES ('OD040','BR011',3);
INSERT INTO detail_order VALUES ('OD040','BR017',1);



-----------------------------------view
CREATE VIEW vibarang AS
SELECT dd.brg_id, b.brg_nama, SUM(dd.jumlah) AS jumlah_terjual
FROM barang b JOIN detail_order dd
USING (brg_id)
GROUP BY dd.brg_id;

DROP VIEW vibarang;

--------------------------function
DELIMITER $$

CREATE FUNCTION penjualan(nama_barang VARCHAR(50))
    RETURNS INT
    DETERMINISTIC
    BEGIN
    DECLARE jual INT;
    SELECT SUM(dd.jumlah) INTO jual
    FROM barang b JOIN detail_order dd
    USING (brg_id)
    WHERE nama_barang = b.brg_nama;
    RETURN jual;
    END $$
    
DELIMITER $$

--cekfunction
SELECT DISTINCT penjualan('Solid Wedges') AS jml_terjual;

DROP FUNCTION penjualan;


-----------------------------trigger 
--buatupdate
CREATE TABLE log_pembeli(
pbl_id 		CHAR(5),
pbl_nama	VARCHAR(50),
pbl_alamat	VARCHAR(200),
pbl_telp	VARCHAR(15),
pbl_email	VARCHAR(100),
pbl_status	VARCHAR(20),
tgl_ubah 	DATETIME,
status_ubah 	VARCHAR(20)
);

DELIMITER $$

CREATE OR REPLACE TRIGGER histori
AFTER UPDATE ON pembeli
    FOR EACH ROW
    BEGIN
    INSERT INTO log_pembeli VALUES (OLD.pbl_id, OLD.pbl_nama, OLD.pbl_alamat, OLD.pbl_telp, OLD.pbl_email, OLD.pbl_status,  SYSDATE(), 'before');
    INSERT INTO log_pembeli VALUES (NEW.pbl_id, NEW.pbl_nama, NEW.pbl_alamat, NEW.pbl_telp, NEW.pbl_email, NEW.pbl_status,  SYSDATE(), 'updated');
    END$$

DELIMITER $$

--cekupdatetrigger
UPDATE pembeli
SET pbl_email='cyborg@greget.bz'
WHERE pbl_id='BL004';

DROP TRIGGER histori;


--------------------------------procedure
DELIMITER $$
CREATE OR REPLACE PROCEDURE diskon()
    BEGIN
    UPDATE order_brg od
    SET od.od_total_pjk =(od.od_total_pjk-(od.od_total_pjk*0.05)) 
    WHERE od.od_tglbeli BETWEEN '2018-05-10' AND '2018-05-16'
    AND EXISTS (
    SELECT p.pbl_id
    FROM pembeli p
    WHERE p.pbl_status='pelanggan' AND p.pbl_id = od.pbl_id);
    END $$
DELIMITER $$

--cekpro
CALL diskon();

DROP PROCEDURE diskon;


--------------------------------join
SELECT *
FROM (SELECT b.brg_nama, SUM(dd.jumlah) AS jumlah_terjual
FROM barang b JOIN detail_order dd USING (brg_id)
JOIN order_brg od USING (od_id)
JOIN pembeli pbl USING (pbl_id)
WHERE pbl_status = 'pelanggan'
GROUP BY b.brg_nama
ORDER BY jumlah_terjual DESC)temp
LIMIT 5;


--------------------------------index
SELECT * FROM pembeli WHERE pbl_nama = 'Kimi'; 

CREATE INDEX pb_idx ON pembeli(pbl_nama);

ALTER TABLE pembeli DROP INDEX pb_idx;


--------------------------------cursor
DELIMITER $$

CREATE OR REPLACE PROCEDURE eksplisit()
BEGIN
DECLARE id CHAR(5);
DECLARE done INT DEFAULT 0;
DECLARE curs CURSOR FOR SELECT od_id FROM order_brg;
DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
OPEN curs;
REPEAT 
FETCH curs INTO id;
UPDATE order_brg
SET od_total_pjk = od_total_pjk + 7500
WHERE od_id = id AND byr_id NOT IN 
(SELECT byr.byr_id
FROM bayar byr
WHERE byr.byr_bank = 'BRI');
UNTIL done END REPEAT;
CLOSE curs;

END $$

CALL eksplisit();

SELECT * FROM order_brg;

DROP PROCEDURE eksplisit;


-- view Menampilkan barang yang belum pernah dibeli
CREATE VIEW brg_notsale AS
SELECT b.*
FROM barang b
WHERE NOT EXISTS (
	SELECT dor.brg_id
	FROM detail_order dor
	WHERE b.brg_id = dor.brg_id
	);
SELECT * FROM brg_notsale;

-- function Menghitung total harga yang pernah dilakukan oleh pembeli tertentu.
DELIMITER$$
CREATE OR REPLACE FUNCTION total_harga (nm_pembeli VARCHAR(50))
RETURNS INT
DETERMINISTIC
BEGIN
 DECLARE total INT;
 SELECT SUM(od.od_total) INTO total
 FROM pembeli pb, order_brg od
 WHERE pb.pbl_nama = nm_pembeli AND od.pbl_id = pb.pbl_id;
 RETURN total;
END$$
DELIMITER$$

SELECT total_harga('Yasinta') AS total;


-- trigger Ketika menghapus record pada tabel order, 
-- maka detail order tersebut akan ikut terhapus juga (pada tabel detail_order).
DELIMITER$$
CREATE OR REPLACE TRIGGER del_order
BEFORE DELETE ON order_brg
FOR EACH ROW
BEGIN
 DELETE FROM detail_order
 WHERE detail_order.od_id = old.od_id;
END$$
DELIMITER$$

DELETE FROM order_brg
WHERE od_id = 'OD040';

INSERT INTO order_brg VALUES ('OD040','BYR01','BL030',4, 390000,'2018/05/19', 0);
INSERT INTO detail_order VALUES ('OD040','BR011',3);
INSERT INTO detail_order VALUES ('OD040','BR017',1);


-- procedure Memberikan pajak 10% untuk semua barang dalam satu kali transaksi.


DELIMITER$$
CREATE OR REPLACE PROCEDURE pajak_trx()
BEGIN
 UPDATE order_brg
 SET od_total_pjk = od_total*1.1;
END$$
DELIMITER$$

CALL pajak_trx();

ALTER TABLE order_brg
DROP COLUMN od_total_pjk;


-- join Menampilkan detail barang (nama, jumlah) yang dibeli oleh pelanggan.
SELECT b.brg_nama, SUM(dor.jumlah) AS jumlah
FROM pembeli pb
JOIN order_brg od ON pb.pbl_id = od.pbl_id
JOIN detail_order dor ON od.od_id = dor.od_id
JOIN barang b ON dor.brg_id = b.brg_id
AND pb.pbl_status = 'pelanggan'
GROUP BY b.brg_nama


-- index Membuat index untuk mencari nama barang pada tabel barang.
CREATE INDEX idx_barang ON barang(brg_nama);

SELECT b.brg_nama, SUM(dor.jumlah) AS jml
FROM barang b, detail_order dor
WHERE b.brg_id = dor.brg_id
GROUP BY b.brg_nama

ALTER TABLE barang DROP INDEX idx_barang;


-- cursor Memberi potongan harga total 10% pada pelanggan 
-- yang membeli di atas 1.000.000 dalam satu kali transaksi.
DELIMITER$$
CREATE OR REPLACE PROCEDURE disc_order()
BEGIN
	DECLARE stops INT DEFAULT 0;
	DECLARE idod CHAR(5);
	DECLARE cur1 CURSOR FOR SELECT od_id FROM order_brg;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET stops = 1;
	
	OPEN cur1;
	REPEAT
	FETCH cur1 INTO idod;
	UPDATE order_brg 
	SET od_total_pjk = od_total_pjk*0.9
	WHERE od_id = idod
	AND od_total > 1000000
	AND pbl_id IN (SELECT pb.pbl_id
		FROM pembeli pb
		WHERE pb.pbl_status = 'pelanggan');
	UNTIL stops
	END REPEAT;
	CLOSE cur1;
END$$
DELIMITER$$

CALL disc_order();

